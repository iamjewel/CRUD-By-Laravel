<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'department_id', 'semester', 'address'
    ];

    function department()
    {
        return $this->belongsTo(Department::class);
    }
}
