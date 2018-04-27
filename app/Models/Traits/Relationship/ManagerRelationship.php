<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo Viveros
 * Date: 27/04/18
 * Time: 11:40
 */

namespace App\Models\Traits\Relationship;

use App\Models\OccupationManager;
/**
 * Class DependenceRelationship.
 */
trait ManagerRelationship
{

    public function occupation()
    {
        return $this->belongsToMany(OccupationManager::class);
    }

}