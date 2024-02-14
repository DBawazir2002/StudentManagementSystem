<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Events\StudentWasRegistered;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\ClassStudy;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $students = Student::with('classStudy')->paginate(15);
        return view('admin.students.students',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $class_studies = ClassStudy::all();
        return view('admin.students.addStudent',compact('class_studies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $data = $request->validated();
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $imageURL = 'studentProfileImage/'.$imageName;
            Image::make($image)->resize(300,300)->save('storage/'.$imageURL);
            $data['image'] = $imageURL;
        }
        $data['dateOfAdmission'] = now();
        $student = Student::create($data);
        $student->password = $request->password;
        event(new StudentWasRegistered($student));
    return back()->with('message', 'Successfully Stored Student');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $classStudiesForMakeOrdered = ClassStudy::get();
        $class_studies = array($student->classStudy);
        for ($i=0; $i < count($classStudiesForMakeOrdered); $i++)
                if($classStudiesForMakeOrdered[$i] != $class_studies[0])
                    $class_studies[$i+1] = $classStudiesForMakeOrdered[$i];
        return view('admin.students.editStudent',compact(['student', 'class_studies']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $imageURL = 'studentProfileImage/'.$imageName;
            $data = $request->validated();
            Image::make($image)->resize(300,300)->save('storage/'.$imageURL);
            $data['image'] = $imageURL;
            $data['password'] = ($request->password) ? Hash::make($request->password) : $student->password;
            $student->update($data);
        }
        $data = $request->validated();
        $data['password'] = ($request->password) ? Hash::make($request->password) : $student->password;
        $student->update($data);
        return back()->with('message', 'Successfully Updated Student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        Image::make('storage/'.$student->image)->destroy();
        $student->delete();
        return back()->with('message', 'Successfully Deleted Student');
    }

}
