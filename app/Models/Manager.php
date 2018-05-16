<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Relationship\HasManyDependenceRelationship;
use App\Models\Traits\Relationship\ManagerRelationship;

class Manager extends Model
{
    //
    use ManagerRelationship;
    protected $fillable = [
        'name', 'lastname', 'phone', 'cellphone', 'email','occupation_id','dni','dependence_id'
    ];

}
