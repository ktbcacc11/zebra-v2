<?php
use App\Models\AdminDetails;
?>
@include('admin::layouts.header')
 <!-- Content wrapper -->
 <div class="content-wrapper">

    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="py-3 mb-4">
<span class="text-muted fw-light">Dashboard /</span> Add Admin
</h4>

<!-- Card Border Shadow -->
<div class="row">
        <div class="card mb-4">
          <h5 class="card-header">Add Admin</h5>
          @if(Session::has('success')) <div class="alert alert-success mt-2 mb-2">{{ Session::get('success') }}</li></div>@endif
          @if(Session::has('fail')) <div class="alert alert-danger mt-2 mb-2">{{ Session::get('fail') }}</li></div>@endif
          <div class="card-body">
            <form action="" method="post">
            @csrf
            <div class="row">
            <div class="col-md-4 mb-3">
              <label for="defaultFormControlInput" class="form-label">Name</label>
              <input type="text" class="form-control" id="defaultFormControlInput" name="name" />
              @if($errors->has("name")) <div class="alert alert-danger mt-2">{{ $errors->first('name') }}</li></div>@endif
            </div>
            <div class="col-md-4 mb-3">
                <label for="defaultFormControlInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="defaultFormControlInput" name="email" />
                @if($errors->has("email")) <div class="alert alert-danger mt-2">{{ $errors->first('email') }}</li></div>@endif
            </div>
            <div class="col-md-4 mb-3">
                <label for="defaultFormControlInput" class="form-label">Phone No</label>
                <input type="text" class="form-control" id="defaultFormControlInput" name="phone" />
                @if($errors->has("phone")) <div class="alert alert-danger mt-2">{{ $errors->first('phone') }}</li></div>@endif
            </div>
            <div class="col-md-4 mb-3">
                <label for="defaultFormControlInput" class="form-label">Password</label>
                <input type="password" class="form-control" id="defaultFormControlInput" name="password" />
                @if($errors->has("password")) <div class="alert alert-danger mt-2">{{ $errors->first('password') }}</li></div>@endif
            </div>
            <div class="col-md-4 mb-3">
                <label for="defaultFormControlInput" class="form-label">Confirm Password</label>
                <input type="password_confirmation" class="form-control" id="defaultFormControlInput" name="password_confirmation" />
                @if($errors->has("password_confirmation")) <div class="alert alert-danger mt-2">{{ $errors->first('password_confirmation') }}</li></div>@endif
            </div>
            <div class="col-md-12">
            <button type="submit" class="btn btn-primary mb-4 mt-4" style="width:250px; ">
                <span class="bx bxs-save me-1"></span>Save
            </button>
            </div>
            </div>
            </form>
          </div>
        </div>
</div>
<!--/ Card Border Shadow -->



      </div>
      <!-- / Content -->

@include('admin::layouts.footer')
