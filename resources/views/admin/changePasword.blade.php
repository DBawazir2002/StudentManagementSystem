@extends('layout.appAdmin')
@section('title', 'Change Password')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Change Password </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Change Password</li>
          </ol>
        </nav>
      </div>
      <div class="row">

        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="text-align: center;">Change Password</h4>

              <form class="forms-sample" name="changepassword" method="post" onsubmit="return checkpass();">

                <div class="form-group">
                  <label for="exampleInputName1">Current Password</label>
                  <input type="password" name="currentpassword" id="currentpassword" class="form-control" required="true">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail3">New Password</label>
                  <input type="password" name="newpassword"  class="form-control" required="true">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">Confirm Password</label>
                  <input type="password" name="confirmpassword" id="confirmpassword" value=""  class="form-control" required="true">
                </div>

                <button type="submit" class="btn btn-primary mr-2" name="submit">Change</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection



