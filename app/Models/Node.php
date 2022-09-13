<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Node extends Model
{
    use HasFactory;
    use HasRecursiveRelationships;

    protected $fillable = [
        'content',
        'parent_id',
    ];
}
