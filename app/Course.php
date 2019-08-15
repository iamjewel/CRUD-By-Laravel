<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=[
        'department_id','course_name'
    ];


    function department()
    {
        return $this->belongsTo(Department::class);
    }
}
