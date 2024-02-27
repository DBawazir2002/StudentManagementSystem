@extends('layout.appAdmin')
@section('title', 'Students')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
       <div class="page-header">
        <h3 class="page-title"> Manage Students </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Manage Students</li>
          </ol>
        </nav>
      </div>
      <div class="row">
            @if (session('message'))
                        <div>
                            <h4 class="text-success">{{session('message')}}</h4>
                        </div>
            @endif
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex align-items-center mb-4">
                <h4 class="card-title mb-sm-0">Manage Students</h4>
                <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Students</a>
              </div>
              <div class="table-responsive border rounded p-1">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="font-weight-bold">S.No</th>
                      <th class="font-weight-bold">Student ID</th>
                      <th class="font-weight-bold">Student User Name</th>
                      <th class="font-weight-bold">Student Class</th>
                      <th class="font-weight-bold">Student Name</th>
                      <th class="font-weight-bold">Student Email</th>
                      <th class="font-weight-bold">Admissin Date</th>
                      <th class="font-weight-bold">Student Image Profile</th>
                      <th class="font-weight-bold">Action</th>

                    </tr>
                  </thead>
                  <tbody>


                    @foreach ($students as $key => $student)
                    <tr class="text-center">
                        <td>{{$key+=1}}</td>
                        <td>{{$student->studentIdentity}}</td>
                        <td>{{$student->userName}}</td>
                        <td>{{$student->classStudy?->className}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->dateOfAdmission}}</td>
                        <td><img src="{{asset('storage/'.$student->image)}}" alt="Student Profile" width="300" height="300" /></td>
                        <td>
                            <div>
                                    <a href="{{route('students.edit',$student->id)}}"><i class="icon-eye" ></i></a></button>
                                            <form action="{{route('students.destroy',$student->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn" onclick="return confirm('Do you really want to Delete ?');">
                                                <a href=""><i class="icon-trash" ></i></a></button>
                                            </form>
                                            </div></td>
                  </tr>
                    @endforeach

                    </tbody>
                  </table>
                </div>

            </div>
        </div>
      </div>
    </div>
  </div>
  {{$students->links()}}
@endsection
