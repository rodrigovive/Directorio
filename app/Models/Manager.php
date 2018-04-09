<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Relationship\HasManyDependenceRelationship;

class Manager extends Model
{
    //
    use HasManyDependenceRelationship;

    protected $fillable = [
        'name', 'lastname', 'phone', 'cellphone', 'title_job', 'email'
    ];

}
