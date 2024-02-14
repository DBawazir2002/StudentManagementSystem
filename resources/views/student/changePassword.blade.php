@extends('layout.appStudent')
@section('title', 'Change Password')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Change Password </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('student')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Change Password</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        @if (session('message'))
            <div>
                <h4 class="text-success">{{session('message')}}</h4>
            </div>
       @endif
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="text-align: center;">Change Password</h4>

              <form class="forms-sample" method="post" action="{{route('student.changePassword',$student->id)}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="currentPassword">Current Password</label>
                    <input type="password" name="currentPassword" id="currentpassword" class="form-control" >
                    @error('currentPassword')
                        <div>
                            <span class="text-danger text-small">{{$message}}</span>
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password"  class="form-control" >
                    @error('password')
                        <div>
                            <span class="text-danger text-small">{{$message}}</span>
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="confirmpassword" value=""  class="form-control" >
                    @error('password_confirmation')
                        <div>
                            <span class="text-danger text-small">{{$message}}</span>
                        </div>
                    @enderror
                  </div>


                <button type="submit" class="btn btn-primary mr-2" name="submit">Change</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection















