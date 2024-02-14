@extends('layout.appAdmin')
@section('title','Dashboard')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                    <div class="d-sm-flex align-items-baseline report-summary-header">
                        <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                    </div>
                    </div>
                </div>
                <div class="row report-inner-cards-wrapper">
                    <div class=" col-md -6 col-xl report-inner-card">
                    <div class="inner-card-text">

                        <span class="report-title">Total Class</span>
                        <h4>{{ $classStudiesNo }}</h4>
                        <a href="{{route('classStudies.index')}}"><span class="report-count"> View Classes</span></a>
                      </div>
                      <div class="inner-card-icon bg-success">
                        <i class="icon-rocket"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl report-inner-card">
                      <div class="inner-card-text">

                        <span class="report-title">Total Students</span>
                        <h4>{{$studentsNo}}</h4>
                        <a href="{{route('students.index')}}"><span class="report-count"> View Students</span></a>
                      </div>
                      <div class="inner-card-icon bg-danger">
                        <i class="icon-user"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl report-inner-card">
                      <div class="inner-card-text">

                        <span class="report-title">Total Class Notice</span>
                        <h4>{{$notices}}</h4>
                        <a href="{{route('notices.index')}}"><span class="report-count"> View Notices</span></a>
                      </div>
                      <div class="inner-card-icon bg-warning">
                        <i class="icon-doc"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl report-inner-card">
                      <div class="inner-card-text">

                        <span class="report-title">Total Public Notice</span>
                        <h4>{{$publicNotices}}</h4>
                        <a href="{{route('publicNotices.index')}}"><span class="report-count"> View PublicNotices</span></a>
                      </div>
                      <div class="inner-card-icon bg-primary">
                        <i class="icon-doc"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
