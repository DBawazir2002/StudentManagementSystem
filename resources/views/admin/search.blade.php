@extends('layout.appAdmin')
@section('title', 'Search')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
       <div class="page-header">
        <h3 class="page-title"> Search Student </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Search Student</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <form method="post" action="{{route('search')}}">
                @csrf
                          <div class="form-group">
                             <strong>Search Student:</strong>

                              <input id="searchdata" type="text" name="search" required="true" class="form-control" placeholder="Search by Student ID" required></div>

                          <button type="submit" class="btn btn-primary" id="submit">Search</button>
                      </form>
              <div class="d-sm-flex align-items-center mb-4">


                    @isset($search)
                    <h4 align="center">Result against "{{$search}}" keyword </h4>
                    @endisset
            </div>
            <div class="table-responsive border rounded p-1">

              <table class="table">
                <thead>
                  <tr>
                    <th class="font-weight-bold">S.No</th>
                    <th class="font-weight-bold">Student ID</th>
                    <th class="font-weight-bold">Student Class</th>
                    <th class="font-weight-bold">Student Name</th>
                    <th class="font-weight-bold">Student Email</th>
                    <th class="font-weight-bold">Admissin Date</th>
                    <th class="font-weight-bold">Student Image Profile</th>
                    <th class="font-weight-bold">Action</th>

                  </tr>
                </thead>
                <tbody>
                    @isset($students)
                        @forelse ($students as $key => $student)
                            <tr class="text-center">
                                <td>{{$key+=1}}</td>
                                <td>{{$student->studentIdentity}}</td>
                                <td>{{$student->userName}}</td>
                                <td>{{$student->classStudy->className}}</td>
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
                    @empty
                        <tr>
                            <td colspan="8"> No record found against this search</td>

                        </tr>
                    @endforelse
                    {{$students->links()}}
                @endisset
            </tbody>
        </table>
      </div>
    </div>
</div>
</div>
</div>
</div>
@endsection









