<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   protected $fillable = [
    'name',
    'deadline',
    'priority',
    'project_id',
    'status',
];

}
