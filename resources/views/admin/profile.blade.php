@extends('layout.appAdmin')
@section('title', 'Profile')
@section('content')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                  <div class="page-header">
                    <h3 class="page-title"> Admin Profile </h3>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
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
                          <h4 class="card-title" style="text-align: center;">Admin Profile</h4>

                          <form class="forms-sample" method="post" action="{{route('updateAdminProfile',$user->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="name">Admin Name</label>
                              <input type="text" name="name" value="{{$user->name}}" class="form-control" required='true'>
                              @error('name')
                                    <div>
                                        <span class="text-danger text-small">{{$message}}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="userName">User Name</label>
                              <input type="text" name="userName" value="{{$user->userName}}" class="form-control" readonly="">
                            </div>

                            <div class="form-group">
                                <label for="password">Current Password</label>
                                <input type="password" name="currentPassword" id="currentpassword" class="form-control" >
                                @error('currentPassword')
                                    <div>
                                        <span class="text-danger text-small">{{$message}}</span>
                                    </div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="newPassword">New Password</label>
                                <input type="password" name="password"  class="form-control" >
                                @error('newPassword')
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
                            {{-- <div class="form-group">
                              <label for="exampleInputPassword4">Contact Number</label>
                              <input type="text" name="mobilenumber" value=""  class="form-control" maxlength='10' required='true' pattern="[0-9]+">
                            </div> --}}
                            <div class="form-group">
                              <label for="email">Email</label>
                               <input type="email" name="email" value="{{$user->email}}" class="form-control" required='true'>
                               @error('email')
                                    <div>
                                        <span class="text-danger text-small">{{$message}}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="AdminRegistrationDate">Admin Registration Date</label>
                               <input type="text" name="AdminRegistrationDate" value="{{$user->AdminRegistrationDate}}" readonly="" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>

                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- content-wrapper ends -->

@endsection
