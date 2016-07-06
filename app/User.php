<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function groups()
    {
        return $this->belongsToMany('App\Group','users_groups');
    }

    /**
     * @return mixed
     */
    public function getGroupNameAttribute(){
        $group = $this->groups()->first();
        return $group->name;
    }


//    public function setGroup($group_name){
//        $this->groups()->save($group_name);
//    }

    public function activate()
    {
        $this->activated = true;
        $this->activation_code = null;
        $this->activated_at = Carbon::now();
        $this->save();
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }


}
