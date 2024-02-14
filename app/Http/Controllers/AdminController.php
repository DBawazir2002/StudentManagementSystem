<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAdminProfileRequest;
use App\Models\ClassStudy;
use App\Models\Notice;
use App\Models\PublicNotice;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;;

class AdminController extends Controller
{
    public function toAdmin() {
        $studentsNo = ( Student::get()->count() > 0) ? Student::get()->count() : 0;
        $classStudiesNo = ( ClassStudy::get()->count() > 0) ? ClassStudy::get()->count() : 0;
        $notices = ( Notice::get()->count() > 0 ) ? Notice::get()->count() : 0;
        $publicNotices = ( PublicNotice::get()->count() > 0) ? PublicNotice::get()->count() : 0;
        return view('admin.dashboard',compact(['studentsNo', 'classStudiesNo', 'notices', 'publicNotices']));
    }

    public function getSearchForm() {
        return view('admin.search');
    }

    public function search(Request $request) {
            $students = ( Student::where('studentIdentity', 'LIKE', '%' . $request->search . '%')->get()->count() > 0) ? Student::where('studentIdentity', 'LIKE', '%' . $request->search . '%')->paginate(15) : null;
            $search =  $request->search;
        return view('admin.search',compact(['students','search']));
    }

    public function getAdminProfileForm() {
        $user = auth()->user();
        return view('admin.profile',compact('user'));
    }

    public function updateAdminProfile(UpdateAdminProfileRequest $request, User $user) {
        $data = $request->validated();
        if($request->currentPassword and $request->password and $request->password_confirmation){
            if(Hash::check($request->currentPassword,$user->password)){
                $data['password'] = Hash::make($request->password);
            }
        }else{
            $data['password'] = $user->password;
        }
        $data['updated_at'] = now();
        $user->update($data);
        return back()->with('message', 'Successfully Updated Profile');
    }
}
