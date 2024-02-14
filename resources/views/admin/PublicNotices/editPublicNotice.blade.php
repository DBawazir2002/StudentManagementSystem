@extends('layout.appAdmin')
@section('title', 'Edit Public Notice')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Edit Public Notice </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Edit Public Notice</li>
          </ol>
        </nav>
      </div>
      <div class="row">

        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="text-align: center;">Edit Public Notice</h4>

              <form class="forms-sample" method="post" action="{{route('publicNotices.update',$publicNotice->id)}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="noticeTitle">Notice Title</label>
                  <input type="text" name="noticeTitle" value="{{$publicNotice->noticeTitle}}" class="form-control" required='true'>
                </div>
                <div class="form-group">
                  <label for="noticeMessage">Notice Message</label>
                  <textarea name="noticeMessage" value="" class="form-control" required='true'>{{$publicNotice->noticeMessage}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

