<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePublicNoticeRequest;
use App\Http\Requests\UpdatePublicNoticeRequest;
use App\Models\PublicNotice;
use Illuminate\Http\Request;

class PublicNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicNotices = PublicNotice::paginate(15);
        return view('admin.PublicNotices.publicNotices', compact('publicNotices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.PublicNotices.addPublicNotice');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicNoticeRequest $request)
    {
            $request->validated();
            PublicNotice::create([
                'noticeTitle' => $request->noticeTitle,
                'noticeMessage' => $request->noticeMessage,
                'created_at' => now()
            ]);
        return back()->with('message', 'Successfully Stored Public Notice');
    }

    /**
     * Display the specified resource.
     */
    public function show(PublicNotice $publicNotice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PublicNotice $publicNotice)
    {
        return view('admin.PublicNotices.editPublicNotice', compact('publicNotice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublicNoticeRequest $request, PublicNotice $publicNotice)
    {
        $request->validated();
        $publicNotice->update([
            'noticeTitle' => $request->noticeTitle,
            'noticeMessage' => $request->noticeMessage,
            'updated_at' => now()
        ]);
        return to_route('publicNotices.index')->with('message', 'Successfully Updated Public Notice');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PublicNotice $publicNotice)
    {
        $publicNotice->delete();
        return back()->with('message', 'Successfully Deleted Public Notice');
    }
}
