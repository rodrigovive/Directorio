<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Relationship\HasDependenceRelationship;


class NatureDependence extends Model
{
    //
    use HasDependenceRelationship;

    protected $fillable = [
        'name',
    ];
    
}
