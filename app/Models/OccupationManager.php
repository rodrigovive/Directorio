<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo Viveros
 * Date: 27/04/18
 * Time: 11:37
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Relationship\HasManagerRelationship;

class OccupationManager extends Model
{
    //
    use HasManagerRelationship;

    protected $fillable = [
        'name', 'description'
    ];

}