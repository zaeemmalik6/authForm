<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    public function teacherDashboard(Request $request)
    {
        $teacherId = Auth::id();
        $teacher = User::find($teacherId);
        $teacherStudents = $teacher->students()->get();
        return view('teacherDashboard', ['teacherStudents' => $teacherStudents]);
    }

    public function studentsRecord(Request $req)
    {
        $teacherId = $req->id;
        $teacher = User::find($teacherId);
        $teacherStudents = $teacher->students()->get();
        return view('teacherDashboard', ['teacherStudents' => $teacherStudents]);
    }
}
