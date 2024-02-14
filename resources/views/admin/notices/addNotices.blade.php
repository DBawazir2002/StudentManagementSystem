@extends('layout.appAdmin')
@section('title', 'Add Notice')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Add Notice </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Add Notice</li>
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
              <h4 class="card-title" style="text-align: center;">Add Notice</h4>

              <form class="forms-sample" method="post" action="{{route('notices.store')}}">
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
                  <label for="classStudy_id">Notice For</label>
                  <select  name="classStudy_id" class="form-control" required='true'>
                    <option value="" disabled>Select Class</option>
                    @foreach ($class_studies as $classStudy)
                        <option value="{{$classStudy->id}}">{{$classStudy->className}}</option>
                    @endforeach
                    @error('classStudy_id')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </select>
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
