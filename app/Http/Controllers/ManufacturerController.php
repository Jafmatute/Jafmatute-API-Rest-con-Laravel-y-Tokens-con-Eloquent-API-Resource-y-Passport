<?php

namespace App\Http\Controllers;

use App\Http\Resources\ManufacturerResource;
use App\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function index()
    {
        return ManufacturerResource::collection(Manufacturer::all());
    }
}
