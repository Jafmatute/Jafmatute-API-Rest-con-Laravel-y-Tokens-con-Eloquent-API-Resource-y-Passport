<?php

namespace App\Http\Controllers;

use App\Http\Resources\TypeVehicleResource;
use App\TypeVehicle;
use Illuminate\Http\Request;

class TypeVehicleController extends Controller
{
    public function index()
    {
        return TypeVehicleResource::collection(TypeVehicle::all());
    }
}
