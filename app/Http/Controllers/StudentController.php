<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStudentPasswordRequest;
use App\Models\Notice;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class StudentController extends Controller
{

    public function index()
    {
            $notices = Student::findOrFail(auth('student')->user()->id)->with('classStudy')->paginate(15);
        return view('student.dashboard',compact('notices'));
    }


    public function showStudentNotices()
    {
            $notices = Notice::where('classStudy_id',auth('student')->user()->classStudy_id)->paginate(15);
        return view('student.notices',compact('notices'));
    }

    public function showStudentProfile()
    {
            $student = Student::findOrFail(auth('student')->user()->id)->first();
        return view('student.profile',compact('student'));
    }


    public function changePassword(UpdateStudentPasswordRequest $request, Student $student)
    {
        $data = $request->validated();
        if($request->currentPassword and $request->password and $request->password_confirmation){
            if(Hash::check($request->currentPassword,$student->password)){
                $data['password'] = Hash::make($request->password);
            }
        }else{
            $data['password'] = $student->password;
        }
        $data['updated_at'] = now();
        $student->update($data);
        return back()->with('message', 'Successfully Updated Profile');
    }


    public function getChangePasswordForm()
    {
        $student = Student::findOrFail(auth('student')->user()->id)->first();
        return view('student.changePassword',compact('student'));
    }

}
