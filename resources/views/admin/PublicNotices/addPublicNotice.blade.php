@extends('layout.appAdmin')
@section('title', 'Add Public Notice')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Add Public Notice </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Add Public Notice</li>
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
              <h4 class="card-title" style="text-align: center;">Add Public Notice</h4>

              <form class="forms-sample" method="post" action="{{route('publicNotices.store')}}">
                @csrf
                <div class="form-group">
                  <label for="noticeTitle">Notice Title</label>
                  <input type="text" name="noticeTitle" value="" class="form-control" required='true'>
                  @error('noticeTitle')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="noticeMessage">Notice Message</label>
                  <textarea name="noticeMessage" value="" class="form-control" required='true'></textarea>
                  @error('noticeMessage')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </div>

                <button type="submit" class="btn btn-primary mr-2" name="submit">Add</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

