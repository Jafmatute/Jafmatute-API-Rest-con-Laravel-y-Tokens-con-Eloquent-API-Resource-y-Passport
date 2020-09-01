<?php

namespace App\Http\Controllers;

use App\Http\Resources\ManufacturerResource;
use App\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ManufacturerController extends Controller
{
    public function index()
    {
        return ManufacturerResource::collection(Manufacturer::all());
    }
    public function store()
    {
        if (request()->ajax()) {
            try {
                $this->validate(request(), [
                    'name' => 'required|min:2',
                    'details' => 'required'
                ]);
                $manufacturer = Manufacturer::create([
                    'name' => request('name'),
                    'details' => request('details'),
                ]);
                return response()->json(['message' => 'Fabricante creado', 'Id' => $manufacturer->id]);
            } catch (ValidationException $e) {
                return response()->json($e->validator->errors());
            }
        }
        abort(401);
    }
}
