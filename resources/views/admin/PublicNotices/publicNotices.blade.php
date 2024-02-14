@extends('layout.appAdmin')
@section('title', 'public Notices')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
       <div class="page-header">
        <h3 class="page-title"> Manage Public Notice </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Manage Public Notice</li>
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
                <h4 class="card-title mb-sm-0">Manage Public Notice</h4>
                <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Public Notice</a>
              </div>
              <div class="table-responsive border rounded p-1">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="font-weight-bold">S.No</th>
                      <th class="font-weight-bold">Notice Title</th>
                      <th class="font-weight-bold">Notice Date</th>
                      <th class="font-weight-bold">Action</th>

                    </tr>
                  </thead>
                  <tbody>


                    @foreach ($publicNotices as $row)
                        <tr>
                            <td>{{$row->noticeTitle}}</td>
                            <td>{{$row->noticeMessage}}</td>
                            <td>{{$row->created_at}}</td>
                            <td>
                                <div>
                                        <a href="{{route('publicNotices.edit',$row->id)}}"><i class="icon-eye" ></i></a></button>
                                                <form action="{{route('publicNotices.destroy',$row->id)}}" method="post">
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
  {{$publicNotices->links()}}
@endsection

