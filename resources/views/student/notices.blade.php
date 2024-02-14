@extends('layout.appStudent')
@section('title', 'View Notice')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> View Notice </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('student')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"> View Notice</li>
          </ol>
        </nav>
      </div>
      <div class="row">

        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">

              <table border="1" class="table table-bordered mg-b-0">


    @if ($notices)
                @foreach ($notices as $notice)
                    <tr align="center" class="table-warning">
                        <td colspan="4" style="font-size:20px;color:blue">
                        Notice</td></tr>
                        <tr class="table-info">
                            <th>Notice Announced Date</th>
                            <td>{{$notice->created_at}}</td>
                        </tr>
                            <tr class="table-info">
                            <th>Noitice Title</th>
                            <td>{{$notice->noticeTitle}}</td>
                        </tr>
                        <tr class="table-info">
                            <th>Message</th>
                            <td>{{$notice->noticeMessage}}</td>

                        </tr>
                @endforeach

    @else
        <tr>
            <th colspan="2" style="color:red;">No Notice Found</th>
        </tr>
    @endif
    </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              {{$notices->links()}}
@endsection
