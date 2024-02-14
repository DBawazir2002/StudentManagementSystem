@extends('layout.appAdmin')
@section('title','Update Class Study')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Update Class </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Update Class</li>
          </ol>
        </nav>
      </div>
      <div class="row">

        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="text-align: center;">Update Class</h4>
              <form class="forms-sample" method="post" action="{{route('classStudies.update',$classStudy->id)}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="exampleInputName1">Class Name</label>
                  <input type="text" name="className" value="{{$classStudy->className}}" class="form-control" required='true'>
                    @error('className')
                        <div>
                            <span class="text-danger text-small">{{$message}}</span>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail3">Section</label>
                  <select  name="section" class="form-control" required='true'>
                    @foreach ($section as $sec)
                        <option value="{{$sec}}">{{$sec}}</option>
                    @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- con
@endsection
