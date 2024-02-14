@extends('layout.appAdmin')
@section('title', 'Edit Notice')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Edit Notice </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Edit Notice</li>
          </ol>
        </nav>
      </div>
      <div class="row">

        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="text-align: center;">Edit Notice</h4>

              <form class="forms-sample" method="post" action="{{route('notices.update',$notice->id)}}">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                  <label for="noticeTitle">Notice Title</label>
                  <input type="text" name="noticeTitle" value="{{$notice->noticeTitle}}" class="form-control" required='true'>
                </div>

                <div class="form-group">
                  <label for="classStudy_id">Notice For</label>
                  <select  name="classStudy_id" class="form-control" required='true'>
                    @foreach ($class_studies as $classStudy)
                        <option value="{{$classStudy->id}}">{{$classStudy->className}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="noticeMessage">Notice Message</label>
              <textarea name="noticeMessage" value="" class="form-control" required='true'>{{$notice->noticeMessage}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
