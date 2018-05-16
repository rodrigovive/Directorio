<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo Viveros
 * Date: 27/04/18
 * Time: 11:40
 */

namespace App\Models\Traits\Relationship;

use App\Models\Dependence;
use App\Models\OccupationManager;

trait ManagerRelationship
{

    public function occupation()
    {
        return $this->belongsTo(OccupationManager::class);
    }

    public  function dependence(){
        return $this->belongsTo(Dependence::class);
    }
}