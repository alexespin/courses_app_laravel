<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'class_name',
        'teacher',
        'start_time',
        'end_time',
        'classroom'
    ]; 
}
