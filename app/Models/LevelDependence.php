<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Relationship\HasDependenceRelationship;


class LevelDependence extends Model
{
    //
    use HasDependenceRelationship;

    protected $fillable = [
        'name',
    ];

}
