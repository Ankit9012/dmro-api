<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationNames extends Model
{
    use HasFactory, HasUuids;
    protected $keyType = 'string';
    protected $fillables = [
        "id",
        "stationName",
        "line",
        "latitude",
        "longitude",
        "status"
    ];
}
