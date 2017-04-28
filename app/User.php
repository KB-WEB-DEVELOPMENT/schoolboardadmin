<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'role', 'email', 'password',
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
     * The courses to which the student has gotten a grade.
     */
    public function courses()
    {
        return $this->belongsToMany('App\Course', 'course_student', 'student_id', 'course_id')
                    ->withPivot('course_grade');
    }

    public function isAdmin() {

        return $this->role === 'admin';

    }

    public function count() {

        $count = App\User::where('role', 'student')->count();
    
        return $count;
    }

}
