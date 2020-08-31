<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelVehicle extends Model
{
    protected $guarder = ['id'];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
