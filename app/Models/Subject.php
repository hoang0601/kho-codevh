<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_name'
    ];

    public function students()
    {
        return $this->belongsToMany(
            Student::class,
            'student_subject'
        );
    }
}