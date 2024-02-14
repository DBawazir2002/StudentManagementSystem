@extends('layout.appAdmin')
@section('title','Add Class Study')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Add Class </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Add Class</li>
          </ol>
        </nav>
      </div>
      <div class="row">

        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="text-align: center;">Add Class</h4>
                @if (session('message'))
                    <div class="bg-success">
                        <h4>{{session('message')}}</h4>
                    </div>
                @endif
              <form class="forms-sample" method="post" action="{{route('classStudies.store')}}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputName1">Class Name</label>
                  <input type="text" name="className" value="" class="form-control" required='true'>
                  @error('className')
                    <div>
                        <span class="text-danger text-small">{{$message}}</span>
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail3">Section</label>
                  <select  name="section" class="form-control" required='true'>
                    <option value="">Choose Section</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary mr-2" name="submit">Add</button>

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
