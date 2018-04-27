<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo Viveros
 * Date: 27/04/18
 * Time: 11:39
 */
namespace App\Models\Traits\Relationship;

use App\Models\Manager;

trait HasManagerRelationship
{
    /**
     *
     */

    public function managers()
    {
        return $this->belongsToMany(Manager::class);
    }

}