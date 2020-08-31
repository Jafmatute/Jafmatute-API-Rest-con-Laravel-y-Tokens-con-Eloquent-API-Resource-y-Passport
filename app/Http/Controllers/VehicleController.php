<?php

namespace App\Http\Controllers;

use App\Http\Resources\VehicleResource;
use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        return VehicleResource::collection(Vehicle::all());
    }
}
