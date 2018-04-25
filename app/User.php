<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'gender', 'password','dob','tel','religion','area','loe','degree','ygn','institute','card','cgpa','pass_year','curriculam','father_name','father_occupation','mother_name','mother_occupation','user_image','user_nid','laci',
		's_category','ypa','tp',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
