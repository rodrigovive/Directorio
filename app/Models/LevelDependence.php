<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelDependence extends Model
{
    //
    protected $fillable = [
        'name',
    ];
    public function dependences(){
        return $this->hasMany(Dependence::class);
    }
}
