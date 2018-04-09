<?php

namespace App\Models\Traits\Relationship;

use App\Models\Dependence;

trait HasDependenceRelationship
{
    /**
     * 
     */
    public function dependences()
    {
        return $this->hasMany(Dependence::class);
    }
}