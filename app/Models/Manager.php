<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    //
    protected $fillable = [
        'name', 'lastname', 'phone', 'cellphone', 'title_job', 'email'
    ];

    public function dependences(){
        return $this->belongsToMany(Dependence::class);
    }
}
