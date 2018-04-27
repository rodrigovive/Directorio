<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Relationship\DependenceRelationship;

class Dependence extends Model
{
    //
    use DependenceRelationship;
    /** Attributes for dependence
     * @var array
     */
    protected $fillable = [
      'email', 'annex', 'phone', 'code_dependence', 'category_id', 'level_id', 'acronym', 'description', 'dependence' 
    ];
}
