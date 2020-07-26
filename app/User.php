<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //a user can have many articles
    public function articles() {
        
        //select * from articles where user_id = 1
        return $this->hasMany(Article::class);
    }
    //A user can have many projects
    public function projects() {
        return $this->hasMany(Project::class);
    }
}
// $user -> articles

//$user = User::find(1); // select * from user where user_id = 1
//$user->projects; //select * from projects where user_id = $user->id
// $user->projects->first() ,last(), find(1), split(), groupBy()
