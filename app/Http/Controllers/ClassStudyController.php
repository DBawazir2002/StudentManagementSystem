<?php

namespace App\Http\Controllers;

use App\Events\ClassStudyDestroyed;
use App\Events\ClassStudyUpdated;
use App\Events\StoreClassStudy;
use App\Http\Requests\StoreClassStudyRequest;
use App\Http\Requests\UpdateClassStudy;
use App\Models\ClassStudy;
use Illuminate\Http\Request;

class ClassStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classStudies = ClassStudy::latest()->paginate(15);
        return view('admin.classStudy.classStudies',compact('classStudies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.classStudy.addClassStudy');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClassStudyRequest $request)
    {
            $request->validated();
            ClassStudy::create([
                'className' => $request->className,
                'section' => $request->section,
                'created_at' => now()
            ]);
        return back()->with('message', 'Successfully Stored Class Study');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClassStudy $classStudy)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClassStudy $classStudy)
    {
            $sections = ['A', 'B', 'C', 'D', 'E', 'F'];
            $section = array($classStudy->section);
            for ($i=0; $i < count($sections); $i++)
                if($sections[$i] != $classStudy->section)
                    $section[$i+1] = $sections[$i];
        return view('admin.classStudy.editClassStudy',compact(['classStudy','section']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassStudy $request, ClassStudy $classStudy)
    {
            $request->validated();
            $classStudy->update([
                'className' => $request->className,
                'section' => $request->section,
                'updated_at' => now(),
            ]);
        return to_route('classStudies.index')->with('message', 'Successfully Updated Class Study');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClassStudy $classStudy)
    {
            $classStudy->delete();
        return to_route('classStudies.index')->with('message', 'Successfully Deleted Class Study');
    }
}
