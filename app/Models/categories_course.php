<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories_course extends Model
{
    use HasFactory;

    protected $table = "categories_courses";

    protected $fillable = [
        'category_id',
        'course_id',
    ];

}
