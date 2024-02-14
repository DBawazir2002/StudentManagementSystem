@extends('layout.appStudent')
@section('title','Dashboard')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
              <div class="card card-secondary">
                <span class="card-body d-lg-flex align-items-center">
                  <p class="mb-lg-0">Notices from the school kindly check! </p>
                  <a href="{{url('/student/showStudentNotices')}}" target="_blank" class="btn btn-warning purchase-button btn-sm my-1 my-sm-0 ml-auto">View Notice</a>

                </span>
              </div>
            </div>
          </div>
        </div>

@endsection





