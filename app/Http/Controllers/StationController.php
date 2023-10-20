<?php

namespace App\Http\Controllers;

use App\Models\StationNames;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StationController extends Controller
{

    /**
     * Summary of getStationNames
     * 
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    function getStationNames(Request $request)
    {

        $stations = StationNames::select('id', 'stationName')
            ->where('stationName', 'like',  '%' . $request->name . '%')
            ->orderBy("stationName")
            ->paginate();
        return response()->json(
            [
                'data' => $stations,
                'message' => 'Test'
            ]
        );
    }


    function getStationBetween(Request $request)
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

            $apiEndpoint = "https://us-central1-delhimetroapi.cloudfunctions.net/";
            $apiEndpoint .= "route-get?";
            $apiEndpoint .= "from=$stationFrom&";
            $apiEndpoint .= "to=$stationTo";


            $response = Http::get($apiEndpoint);
            $data = json_decode($response->getBody(), true);
            return response()->json(
                [
                    "data" => $data,
                    'message' => $this->getStatusMessage($data['status'])
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


    function getStatusMessage($statusCode)
    {
        switch ($statusCode) {
            case 200:
                return "Result succesfully generated.";
            case 204:
                return "Same source and destination.";
            case 400:
                return "Undefined source or destination.";
            case 4061:
                return "Invalid source.";
            case 4062:
                return "Invalid destination.";
            case 406:
                return "Invalid source and destination.";
        }
    }
}
