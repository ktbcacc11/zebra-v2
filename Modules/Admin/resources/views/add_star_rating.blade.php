<?php
use App\Models\AdminDetails;
?>
@include('admin::layouts.header')
 <!-- Content wrapper -->
 <div class="content-wrapper">

    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="py-3 mb-4">
<span class="text-muted fw-light">Dashboard /</span> Add Star Rating
</h4>

<!-- Card Border Shadow -->
<div class="row">
        <div class="card mb-4">
          <h5 class="card-header">Add Star Ratinge</h5>
          @if(Session::has('success')) <div class="alert alert-success mt-2 mb-2">{{ Session::get('success') }}</li></div>@endif
          @if(Session::has('fail')) <div class="alert alert-danger mt-2 mb-2">{{ Session::get('fail') }}</li></div>@endif
          <div class="card-body">
            <form action="" method="post">
            @csrf
            <div class="row">
            <div class="col-md-6 mb-3">
              <label for="defaultFormControlInput" class="form-label">Brain Profile</label>
              <select id="defaultSelect" class="form-select" name="brain_profile">
                <?php foreach($profiles as $profile) { ?>
                    <option value="{{$profile->id}}">{{$profile->name}} - {{$profile->code}}</option>
                <?php } ?>
                  </select>
              @if($errors->has("brain_profile")) <div class="alert alert-danger mt-2">{{ $errors->first('brain_profile') }}</li></div>@endif
            </div>
            <div class="col-md-6 mb-3">
                <label for="defaultFormControlInput" class="form-label">Category</label>
                <select id="defaultSelect" class="form-select" name="category">
                    <option value="careers">Careers</option>
                    <option value="internships">Internships</option>
                    <option value="scholarships">Scholarships</option>
                    <option value="university-programs">University Programs</option>
                  </select>
                @if($errors->has("category")) <div class="alert alert-danger mt-2">{{ $errors->first('category') }}</li></div>@endif
            </div>
            <div class="col-md-6 mb-3">
              <label for="defaultFormControlInput" class="form-label">Title</label>
              <input type="text" class="form-control" id="defaultFormControlInput" name="title" />
              @if($errors->has("title")) <div class="alert alert-danger mt-2">{{ $errors->first('title') }}</li></div>@endif
            </div>
            <div class="col-md-6 mb-3">
              <label for="defaultFormControlInput" class="form-label">Rating (Out of 5)</label>
              <input type="number" class="form-control" id="defaultFormControlInput" name="rating" />
              @if($errors->has("rating")) <div class="alert alert-danger mt-2">{{ $errors->first('rating') }}</li></div>@endif
            </div>
            <div class="col-md-12 mb-3">
                <label for="defaultFormControlInput" class="form-label">Description</label>
                <textarea name="description" id="description" ></textarea>
                @if($errors->has("description")) <div class="alert alert-danger mt-2">{{ $errors->first('description') }}</li></div>@endif
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
<script>
    $('#description').summernote({
      tabsize: 2,
      height: 400,
      toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'fontname', 'fontsize', 'fontsizeunit',  'forecolor', 'backcolor', 'italic', 'strikethrough', 'superscript', 'subscript', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph', 'height']],
          ['table', ['table']],
          ['insert', ['link','hr']],
        ]
    });


</script>