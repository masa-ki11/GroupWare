<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function timeclocks()
    {
        return $this->hasMany(TimeClock::class);
    }

    public function businesscardinformations()
    {
        return $this->hasMany(BusinessCardInformation::class);
    }
    public function informations()
    {
        return $this->hasMany(Information::class);
    }
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
    public function storageInformations()
    {
        return $this->hasMany(StorageInformation::class);
    }
    public function subprojects()
    {
        return $this->hasMany(SubProject::class);
    }
    public function workflows()
    {
        return $this->hasMany(WorkFlow::class);
    }
    public function workflowcomments()
    {
        return $this->hasMany(WorkFlowComment::class);
    }

    public function chats()
    {
        return $this->belongsToMany(Chat::class, 'ChatUser', 'user_id', 'chat_id');
    }
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'UserGroup', 'user_id', 'group_id');
    }
    public function childgroups()
    {
        return $this->belongsToMany(ChildGroup::class, 'UserChildGroup', 'user_id', 'chat_id');
    }
    public function departments()
    {
        return $this->belongsToMany(Department::class, 'UserDepartment', 'user_id', 'department_id');
    }
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'UserProject', 'user_id', 'project_id');
    }

}
