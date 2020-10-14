<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{
    protected $guarded = [];

    public function courses()
    {
        return $this->belongsToMany(Course::class,
            'course_teacher', 'teacher_id', 'course_id');
    }
}
