<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model  {
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'course_number', 'description', 'availability',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The students who took the course and obtained a grade.
     */
    public function students()
    {
        return $this->belongsToMany('App\User');
                    
    }

    public function  isCourseAvailable()
    {
        return $this->availability === 'available';
    } 


    public function count() {

        $count = App\Courses->count();
    
        return $count;
    }  

}

