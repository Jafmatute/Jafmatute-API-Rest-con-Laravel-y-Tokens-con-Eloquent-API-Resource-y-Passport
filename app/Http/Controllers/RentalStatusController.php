<?php

namespace App\Http\Controllers;

use App\Http\Resources\RentalStatusResource;
use App\RentalStatus;
use Illuminate\Http\Request;

class RentalStatusController extends Controller
{
    public function index()
    {
        return RentalStatusResource::collection(RentalStatus::all());
    }
}
