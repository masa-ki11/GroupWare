<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildGroup extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany(User::class, 'UserChildGroup', 'user_id', 'childgroup_id');
    }
}
