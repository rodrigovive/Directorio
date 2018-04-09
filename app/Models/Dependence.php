<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependence extends Model
{
    //
    protected $fillable = [
      'email', 'annex', 'phone', 'code_dependence', 'type_id', 'level_id'
    ];

    public function managers(){
        return $this->belongsToMany(Manager::class);
    }

    public function level(){
        return $this->belongsTo(LevelDependence::class);
    }

    public function type(){
        return $this->belongsTo(TypeDependence::class);
    }
    public function nature(){
        return $this->belongsTo(NatureDependence::class);
    }
}
