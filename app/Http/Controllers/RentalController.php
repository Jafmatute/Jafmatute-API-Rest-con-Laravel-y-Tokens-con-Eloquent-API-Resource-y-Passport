<?php

namespace App\Http\Controllers;

use App\Http\Resources\RentalResource;
use App\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        return RentalResource::collection(Rental::all());
    }
}
