<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function studentsCNTT1()
    {
        $data = Student::whereHas('classroom', function ($q) {
            $q->where('class_name', 'CNTT1');
        })->get();

        return response()->json($data);
    }

    public function subjectOfStudent()
    {
        $student = Student::find(5);

        return response()->json($student->subjects);
    }

    public function countStudent()
    {
        $data = Classroom::withCount('students')->get();

        return response()->json($data);
    }

    public function totalSubject()
    {
        $data = DB::table('students')
            ->leftJoin(
                'student_subject',
                'students.id',
                '=',
                'student_subject.student_id'
            )
            ->select(
                'students.student_name',
                DB::raw('COUNT(student_subject.subject_id) as total_subject')
            )
            ->groupBy('students.student_name')
            ->get();

        return response()->json($data);
    }

    public function activeStudent()
    {
        return response()->json(
            Student::active()->get()
        );
    }
}