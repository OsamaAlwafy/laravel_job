
@extends('layout.admin.menu')
@section('content')
















@if(session()->has('message')){
            <p class="alert alert-danger">{{ session()->get('message') }}</p>
          }
          @endif
          @if ($errors->any())
            @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
                
            @endforeach
                
            @endif



  <h5 class="card-header">Enter Company Details</h5>
  <form class="card-body  border-0"  action="{{ route('store_company') }}" method="POST" id="dropzone-basic" enctype="multipart/form-data">
  @csrf
    <div class="row g-3">
      <div class="col-md-6 mb-1">
        <label class="form-label" for="multicol-username">company  Name</label>
        <input name="name" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-6 mb-1">
        <label class="form-label" for="multicol-username">Location </label>
        <input name="location" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>

      <div class="row g-3">
      <div class="col-md-6 mb-1">
        <label class="form-label" for="multicol-username">City</label>
        <input name="city" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-6 mb-1">
        <label class="form-label" for="multicol-username">type </label>
        <input name="type" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      

      <div class="col-12">

<div class="card mb-4">

  <div id="imageupload" class="card-body">
    <label class="form-label" for="">Catigory Image</label>

    <div id="load-img" class="label-img">
      <label for="file" class=" ">
        Drop files here or click to upload
      </label>
      </br>
      <label for="img">
        (This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)
      </label>
      <input id="img" class="d-none" name="img" type="file" />
    </div>

  </div>
  <!-- </div> -->


</div>
</div>










     
















      


















      </div>






      <div class="pt-4">
        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-label-secondary">Cancel</button>
      </div>
  </form>
</div>





<!-- / Content -->




<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      © <script>
        document.write(new Date().getFullYear())
      </script>
      , made with ❤️ by <a href="https://themeselection.com/" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
    </div>
    <div>

      <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
      <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

      <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>


      <a href="https://themeselection.com/support/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>

    </div>
  </div>
</footer>
<!-- / Footer -->


<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->

<!-- / Layout page -->
</div>



<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>


<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

</div>
<!-- / Layout wrapper -->






<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="assets/vendor/libs/jquery/jquery.js"></script>
<script src="assets/vendor/libs/popper/popper.js"></script>
<script src="assets/vendor/js/bootstrap.js"></script>
<script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="assets/vendor/libs/hammer/hammer.js"></script>
<script src="assets/vendor/libs/i18n/i18n.js"></script>
<script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>

<script src="assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<!-- <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script> -->

<!-- Main JS -->
<script src="../../assets/vendor/js/menu.js"></script>
<script src="assets/js/main.js"></script>

<!-- Page JS -->
<script src="assets/js/dashboards-crm.js"></script>
<script src="assets/js/custom.js"></script>
</body>


<!--  , Sat, 26 Mar 2022 16:46:23 GMT -->

</html>

@endsection