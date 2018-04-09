<?php

namespace App\Models\Traits\Relationship;

use App\Models\Dependence;

trait HasManyDependenceRelationship
{
    /**
     * 
     */

    public function dependences()
    {
        return $this->belongsToMany(Dependence::class);
    }

}