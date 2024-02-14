<?php

namespace App\Http\Controllers;

use App\Events\NoticeWasStored;
use App\Http\Requests\StoreNoticeRequest;
use App\Http\Requests\UpdateNoticeRequest;
use App\Models\ClassStudy;
use App\Models\Notice;
use App\Models\Student;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notices = Notice::paginate(15);
        return view('admin.notices.notices',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $class_studies = ClassStudy::get();
        return view('admin.notices.addNotices',compact('class_studies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoticeRequest $request)
    {
        $data = $request->validated();
        $data['created_at'] = now();
        $notice = Notice::create($data);
        $students = Student::where('classStudy_id', $request->classStudy_id)->get();
        //$students = $notice->classStudy->students;
        foreach ($students as $student) {
            event(new NoticeWasStored($student));
        }
        return back()->with('message', 'Successfully Stored Notice');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notice $notice)
    {
        $classStudiesForMakeOrdered = ClassStudy::get();
        $class_studies = array($notice->classStudy);
        for ($i=0; $i < count($classStudiesForMakeOrdered); $i++)
                if($classStudiesForMakeOrdered[$i] != $class_studies[0])
                    $class_studies[$i+1] = $classStudiesForMakeOrdered[$i];
        return view('admin.notices.editNotice', compact(['notice', 'class_studies']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoticeRequest $request, Notice $notice)
    {
        $request->validated();
        $notice->update([
            'noticeTitle' => $request->noticeTitle,
            'classStudy_id' => $request->classStudy_id,
            'noticeMessage' => $request->noticeMessage,
            'updated_at' => now()
        ]);
        return to_route('notices.index')->with('message', 'Successfully Updated Notice');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notice $notice)
    {
        $notice->delete();
        return back()->with('message', 'Successfully Deleted Notice');
    }
}
