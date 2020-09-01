<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $guarder = ['id'];
    protected $fillable = ['name', 'details'];

    public function models()
    {
        return $this->hasMany(ModelVehicle::class);
    }
}
