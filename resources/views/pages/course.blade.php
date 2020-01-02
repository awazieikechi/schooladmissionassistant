@include('layouts.header_user');
@include('layouts.sidebar_user');

<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
<div class="row">
<div class="col-5 align-self-center">
<h4 class="page-title">Course</h4>
<div class="d-flex align-items-center">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Course</li>
</ol>
</nav>
</div>
</div>
<div class="col-7 align-self-center">
<div class="d-flex no-block justify-content-end align-items-center">
<div class="mr-2">
<div class="lastmonth"></div>
</div>
<div class=""><small></small>
<h4 class="text-info mb-0 font-medium"></h4></div>
</div>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
	@include('layouts.alert_user');
<!-- Column -->
<input type="hidden" value="{{url('/')}}" id="url" name="url">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="d-flex no-block align-items-center mb-4">
<h4 class="card-title">All Courses</h4>
<div class="ml-auto">
<div class="btn-group">

<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#createmodeladdcourse">
Add New Course
</button>
</div>
</div>
</div>
<div class="table-responsive">
<table id="file_export" class="table table-bordered display" width="100%" cellspacing="0">
<thead>
<tr>
<th> </th>
<th> </th>
<th>Course Name</th> 
<th>Course Fees</th>
<th>Post UTME Cutoff Mark</th>
<th>SSCE Requirements</th>
<th></th>
</tr>
</thead>

</table>
</div>
</div>
</div>
</div>
<!-- Column -->
<!-- Column -->

</div>
</div>
</div>
<!-- Column -->
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>

<!-- Create Modal add course -->
<div class="modal fade" id="createmodeladdcourse" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<form method="POST" action="{{ route('course.store') }}">
@csrf
<div class="modal-header">
<h5 class="modal-title" id="createModalLabel"><i class="ti-marker-alt mr-2"></i> Add New Course</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="input-group mb-3">
<button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
<input id="course_name" type="text" class="form-control @error('course_name') is-invalid @enderror" name="course_name" value="{{ old('course_name')}}" placeholder="Enter Course Name Here"  autocomplete="course_name" autofocus>
  @error('course_name')
  <span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
  </span>
 @enderror
</div>

<div class="input-group mb-3">
<button type="button" class="btn btn-info"><i class="ti-more text-white"></i></button>
<input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount')}}" placeholder="Enter Course fees"  autocomplete="amount" autofocus>
  @error('amount')
  <span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
  </span>
 @enderror
</div>
<div class="input-group mb-3">
<button type="button" class="btn btn-info"><i class="ti-import text-white"></i></button>
<input id="postutme_score" type="text" class="form-control @error('postutme_score') is-invalid @enderror" name="postutme_score" value="{{ old('postutme_score')}}" placeholder="Enter Postutme Cutt off"  autocomplete="postutme_score" autofocus>
  @error('postutme_score')
  <span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
  </span>
 @enderror
</div>
<div class="input-group mb-3">
<button type="button" class="btn btn-info"><i class="ti-import text-white"></i></button>
<textarea id="ssce_requirements" class="form-control @error('ssce_requirements') is-invalid @enderror" name="ssce_requirements" value="{{ old('ssce_requirements')}}" placeholder="Enter SSCE Requirements"  autocomplete="ssce_requirements" autofocus></textarea>
  @error('ssce_requirements')
  <span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
  </span>
 @enderror
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success"><i class="ti-save"></i> Save</button>
</div>
</form>
</div>
</div>
</div>

<!-- Create Modal edit course -->
<div class="modal fade" id="createmodeleditcourse" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<form method="POST" action="{{ route('course.update') }}">
@csrf
{{ method_field('PATCH') }}
<div class="modal-header">
<h5 class="modal-title" id="createModalLabel1"><i class="ti-marker-alt mr-2"></i> Edit Course</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<div class="modal-body">
<div class="input-group mb-3">
<button type="button" class="btn btn-info"><i class="ti-user text-white"></i></button>
<input id="course_name1" type="text" class="form-control @error('course_name') is-invalid @enderror" name="course_name" value="{{ old('course_name')??Auth::user()->course_name}}" placeholder="Enter Course Name Here"  autocomplete="course_name" autofocus>
  @error('course_name')
  <span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
  </span>
 @enderror
</div>
<div class="input-group mb-3">
<button type="button" class="btn btn-info"><i class="ti-more text-white"></i></button>
<input id="amount1" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount')??Auth::user()->amount}}" placeholder="Enter Course fees"  autocomplete="amount" autofocus>
  @error('amount')
  <span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
  </span>
 @enderror
</div>
<div class="input-group mb-3">
<button type="button" class="btn btn-info"><i class="ti-import text-white"></i></button>
<input id="postutme_score1" type="text" class="form-control @error('postutme_score') is-invalid @enderror" name="postutme_score" value="{{ old('postutme_score')??Auth::user()->postutme_score}}" placeholder="Enter Postutme Cutt off"  autocomplete="postutme_score" autofocus>
  @error('postutme_score')
  <span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
  </span>
 @enderror
</div>
<div class="input-group mb-3">
<button type="button" class="btn btn-info"><i class="ti-import text-white"></i></button>
<textarea id="ssce_requirements1"  class="form-control @error('ssce_requirements') is-invalid @enderror" name="ssce_requirements" value="{{ old('ssce_requirements')}}" placeholder="Enter SSCE Requirements"  autocomplete="ssce_requirements" autofocus></textarea>
  @error('ssce_requirements')
  <span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
  </span>
 @enderror
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success"><i class="ti-save"></i> Save</button>
</div>
</form>
</div>
</div>
</div>

<!-- Delete course -->

<form method="POST" action="{{ route('course.destroy') }}">
@csrf
{{ method_field('DELETE') }}
  
  <input type="hidden" name="id2" value"" id="id2">
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete the Course?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
@include('layouts.footer_user');

<script type="text/javascript">
  
 $('#createmodeleditcourse').on('show.bs.modal', function (event) {
         var button = $(event.relatedTarget);
        var id = button.data('id');
        var coursename = button.data('course');
        
        $('#course_name1').val(button.data('course')) ;
        $('#amount1').val(button.data('amount')) ;
        $('#postutme_score1').val(button.data('postutme_score')) ;
        $('#ssce_requirements1').val(button.data('ssce_requirements')) ;
})

$('#deleteModal').on('show.bs.modal', function (event) {
         var button = $(event.relatedTarget);
          var result = $('#id2').val(button.data('id')) ;
           console.log(result);
})

</script>