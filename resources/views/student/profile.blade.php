@extends('layout.appStudent')
@section('title','Profile')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> View Students Profile </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('student')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"> View Students Profile</li>
          </ol>
        </nav>
      </div>
      <div class="row">

        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">

              <table border="1" class="table table-bordered mg-b-0">

                <tr align="center" class="table-warning">
                    <td colspan="4" style="font-size:20px;color:blue">
                     Students Details</td></tr>

                        <tr class="table-info">
                        <th>Student Name </th>
                        <td>{{$student->name}}</td>
                         <th>Student Email</th>
                        <td>{{$student->email}}</td>
                      </tr>
                      <tr class="table-warning">
                         <th>Student Class</th>
                        <td>{{$student->classStudy->className}} {{$student->classStudy->section}}</td>
                         <th>Gender</th>
                        <td>{{$student->gender}} </td>
                      </tr>
                      <tr class="table-danger">
                        <th>Date of Birth</th>
                        <td>{{$student->dateOfBirth}}</td>
                        <th>Student ID</th>
                        <td>{{$student->studentIdentity}}</td>
                      </tr>
                      <tr class="table-success">
                        <th>Father Name</th>
                        <td>{{$student->fatherName}}</td>
                        <th>Mother Name</th>
                        <td>{{$student->motherName}}</td>
                      </tr>
                      <tr class="table-primary">
                        <th>Contact Number</th>
                        <td>{{$student->contactNumber}}</td>
                        <th>Altenate Number</th>
                        <td>
                            @if ($student->alternateNumber)
                                {{$student->alternateNumber}}
                            @else
                                Nothing
                            @endif
                        </td>
                      </tr>
                      <tr class="table-progress">
                        <th>Address</th>
                        <td>{{$student->address}}</td>
                        <th>User Name</th>
                        <td>{{$student->userName}}</td>
                      </tr>
                       <tr class="table-info">
                        <th>Profile Pics</th>
                        <td><img src="{{asset('storage/studentProfileImage/default.jpg')}}"></td>
                        <th>Date of Admission</th>
                        <td>{{$student->dateOfAdmission}}</td>
                      </tr>

                    </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

@endsection




