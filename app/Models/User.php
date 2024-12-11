<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use TCG\Voyager\Contracts\User as VoyagerUserContract;
use TCG\Voyager\Traits\VoyagerUser;
use App\Models\Role;
class User extends Authenticatable implements VoyagerUserContract
{
    use Notifiable, VoyagerUser;

    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function hasRole($role)
    {
        return $this->role && $this->role->name === $role;
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}

