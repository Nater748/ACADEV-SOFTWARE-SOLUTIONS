<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_code',
        'course_title',
        'lecturer_id',
    ];

    public function lecturer(){
        return $this->belongsTo(User::class,'lecturer_id');
    }
    public function feedbacks(){
        return $this->hasMany(Feedback::class);
    }
}
