<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NatureDependence extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public function dependences()
    {
        return $this->hasMany(Dependence::class);
    }
}
