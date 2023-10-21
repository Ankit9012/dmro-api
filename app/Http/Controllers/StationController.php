<?php

namespace App\Http\Controllers;

use App\Models\StationNames;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class StationController extends Controller
{
    /**
     * Summary of getStationNames
     *
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function getStationNames(Request $request)
    {

        $stations = StationNames::select(
            'id',
            'stationName',
            'line',
            'latitude',
            'longitude'
        )
            ->where('stationName', 'like', '%'.$request->name.'%')
            ->orderBy('stationName')
            ->paginate((int) $request->limit);

        return response()->json(
            [
                'data' => $stations,
                'message' => 'Test',
            ]
        );
    }

    public function getStationBetween(Request $request)
    {
        try {

            $validator = $request->validate(
                [
                    'stationFrom' => 'required|string',
                    'stationTo' => 'required|string',
                ]
            );

            $stationFrom = $request->stationFrom;
            $stationTo = $request->stationTo;

            $apiEndpoint = 'https://us-central1-delhimetroapi.cloudfunctions.net/';
            $apiEndpoint .= 'route-get?';
            $apiEndpoint .= "from=$stationFrom&";
            $apiEndpoint .= "to=$stationTo";

            $response = Http::get($apiEndpoint);
            $data = json_decode($response->getBody(), true);

            return response()->json(
                [
                    'data' => $data,
                    'message' => $this->getStatusMessage($data['status']),
                ],
                $data['status'] == 200 ? 200 : 500,
            );
        } catch (\Throwable $throwable) {
            return response()->json(
                [
                    'error' => $throwable->getMessage(),
                ]
            );
        }
    }

    /**Get Metro Line names */
    public function getMetroLines(Request $request)
    {

        try {
            $request->validate([
                'name' => 'nullable|string',
            ]);

            $lineName = StationNames::select('line')->orderBy('line', 'asc')
                ->where('line', 'like', '%'.$request->name.'%')
                ->groupBy('line')
                ->paginate((int) $request->limit);

            return response()->json(
                [
                    'data' => $lineName,
                ],
                200
            );
        } catch (\Throwable $throwable) {
            return response()->json(
                [
                    'error' => $throwable->getMessage(),
                ],
                500
            );
        }
    }

    public function getStatusMessage($statusCode)
    {
        switch ($statusCode) {
            case 200:
                return 'Result succesfully generated.';
            case 204:
                return 'Same source and destination.';
            case 400:
                return 'Undefined source or destination.';
            case 4061:
                return 'Invalid source.';
            case 4062:
                return 'Invalid destination.';
            case 406:
                return 'Invalid source and destination.';
        }
    }

    /**
     * Get Nearby Metro stations by co-ordinates
     */
    public function getStationsNearby(Request $request)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'lat' => 'required|string',
                    'long' => 'required|string',
                ],
                [
                    'lat.required' => 'Latitude(lat) co-ordinate is required ',
                    'long.required' => 'Longitude(long) co-ordinate is required',
                ]
            )->validate();

            $latitude = $request->lat;
            $longitude = $request->long;

            $nearbyAPI = getenv('NEARBY_API');
            $nearbyAPI .= '?lat='.$latitude;
            $nearbyAPI .= '&long='.$longitude;

            $response = Http::withHeaders(
                [
                    'X-RapidAPI-Key' => getenv('NEARBY_API_KEY'),
                    'X-RapidAPI-Host' => getenv('NEARBY_API_HOST'),
                ]
            )->get($nearbyAPI);

            if ($response->getStatusCode() == 200) {
                $stations = json_decode($response->getBody())->data;
                $data = [];
                foreach ($stations as $station) {
                    $stationName = $station->station_name;
                    unset($station->station_name);
                    $data[] = [
                        ...json_decode(json_encode($station), true),
                        'name' => $stationName,
                    ];
                }

                return response()->json(
                    [
                        'data' => $data,
                        'message' => 'success',
                    ],
                    200
                );
            }
        } catch (\Throwable $throwable) {
            return response()->json(
                [
                    'messgae' => $throwable->getMessage(),
                    'error' => $throwable->getTrace(),
                ],
                500
            );
        }
    }
}
