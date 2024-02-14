@extends('layout.appAdmin')
@section('title', 'Notices')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
       <div class="page-header">
        <h3 class="page-title"> Manage Notice </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Manage Notice</li>
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
                <h4 class="card-title mb-sm-0">Manage Notice</h4>
                <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Notice</a>
              </div>
              <div class="table-responsive border rounded p-1">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="font-weight-bold">S.No</th>
                      <th class="font-weight-bold">Notice Title</th>
                      <th class="font-weight-bold">Class</th>
                      <th class="font-weight-bold">Section</th>
                      <th class="font-weight-bold">Notice Date</th>
                      <th class="font-weight-bold">Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($notices as $key => $row)
                        <tr>
                            <td>{{$key+=1}}</td>
                            <td>{{$row->noticeTitle}}</td>
                            <td>{{$row->classStudy->className}}</td>
                            <td>{{$row->classStudy->section}}</td>
                            <td>{{$row->created_at}}</td>
                            <td>
                                <div>
                                        <a href="{{route('notices.edit',$row->id)}}"><i class="icon-eye" ></i></a></button>
                                                <form action="{{route('notices.destroy',$row->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn" onclick="return confirm('Do you really want to Delete ?');">
                                                    <a href=""><i class="icon-trash" ></i></a></button>
                                                </form>
                                </div>
                            </td>
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
  {{$notices->links()}}
@endsection
