<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'class_id',
        'active'
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'class_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(
            Subject::class,
            'student_subject'
        )->withPivot([
            'score',
            'registered_at'
        ]);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    protected static function booted()
    {
        static::addGlobalScope('sortName', function ($query) {
            $query->orderBy('student_name', 'asc');
        });
    }
}