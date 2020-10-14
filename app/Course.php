<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    protected  $table ='courses';

    protected  $fillable =[
        'id', 'title', 'image', 'description', 'price_after', 'price_before', 'reviews', 'active'
    ];

    public function teachers(){
        return $this->belongsToMany(Teacher::class,
            'course_teacher','course_id', 'teacher_id');
    }

    public function stage(){
        return $this->belongsTo(Stage::class, 'id');
    }

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }



}
