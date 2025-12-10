<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'name',
        'email',
        'role',
    ];
    public function projects()
    {
         return $this->belongsToMany(Project::class, 'project_team');
    }

}
