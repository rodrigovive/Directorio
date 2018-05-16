<?php

namespace App\Models\Traits\Relationship;

use App\Models\CategoryDependence;
use App\Models\LevelDependence;
use App\Models\Manager;
use App\Models\NatureDependence;

/**
 * Class DependenceRelationship.
 */
trait DependenceRelationship
{

    public function manager()
    {
        return $this->hasMany(Manager::class);
    }

    public function level()
    {
        return $this->belongsTo(LevelDependence::class);
    }

    public function category()
    {
        return $this->belongsTo(CategoryDependence::class);
    }

    public function nature()
    {
        return $this->belongsTo(NatureDependence::class);
    }
}