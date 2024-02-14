@extends('layout.appAdmin')
@section('title', 'Edit Student')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Edit Students </h3>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Edit Students</li>
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
                <h4 class="card-title" style="text-align: center;">Edit Students</h4>

                <form class="forms-sample" action="{{route('students.update',$student->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                    <label for="name">Student Name</label>
                    <input type="text" name="name" value="{{$student->name}}" class="form-control" required='true'>
                    @error('name')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                    </div>
                    <div class="form-group">
                    <label for="email">Student Email</label>
                    <input type="text" name="email" value="{{$student->email}}" class="form-control" required='true'>
                    @error('email')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                    </div>
                    <div class="form-group">
                    <label for="classStudy_id">Student Class</label>
                    <select  name="classStudy_id" class="form-control" required='true'>
                        @foreach ($class_studies as $classStudy)
                            <option value="{{$classStudy->id}}">{{$classStudy->className}}</option>
                        @endforeach
                        @error('classStudy_id')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                    </select>
                </div>
                <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" value="" class="form-control" required='true'>
                    @if ($student->gender == 'Male')
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    @else
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    @endif

                    @error('gender')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </select>
                </div>
                <div class="form-group">
                <label for="dateOfBirth">Date of Birth</label>
                <input type="date" name="dateOfBirth" value="{{$student->dateOfBirth}}" class="form-control" required='true'>
                @error('dateOfBirth')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                <label for="studentIdentity">Student ID</label>
                <input type="text" name="studentIdentity" value="{{$student->studentIdentity}}" class="form-control" required='true'>
                @error('studentIdentity')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                <label for="image">Student Photo</label>
                <input type="file" name="image" value="" class="form-control">
                @error('image')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </div>
                <h3>Parents/Guardian's details</h3>
                <div class="form-group">
                <label for="fatherName">Father's Name</label>
                <input type="text" name="fatherName" value="{{$student->fatherName}}" class="form-control" required='true'>
                @error('fatherName')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                <label for="motherName">Mother's Name</label>
                <input type="text" name="motherName" value="{{$student->motherName}}" class="form-control" required='true'>
                @error('motherName')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                <label for="contactNumber">Contact Number</label>
                <input type="text" name="contactNumber" value="{{$student->contactNumber}}" class="form-control" required='true' maxlength="10" pattern="[0-9]+">
                @error('contactNumber')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                <label for="alternateNumber">Alternate Contact Number</label>
                @if ($student->alternateNumber)
                    <input type="text" name="alternateNumber" value="{{$student->alternateNumber}}" class="form-control"  maxlength="10" pattern="[0-9]+">
                @else
                    <input type="text" name="alternateNumber" value="" class="form-control"  maxlength="10" pattern="[0-9]+">
                @endif
                @error('alternateNumber')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" class="form-control" required='true'>{{$student->address}}</textarea>
                @error('address')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </div>
    <h3>Login details</h3>
    <div class="form-group">
                <label for="userName">User Name</label>
                <input type="text" name="userName" value="{{$student->userName}}" class="form-control" required='true'>
                @error('userName')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" value="" class="form-control" >
                @error('password')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" >
                    @error('password_confirmation')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>

            </form>

            </div>
        </div>
        </div>
    </div>
    </div>

@endsection
