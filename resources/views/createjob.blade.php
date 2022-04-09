
@extends('layout.admin.menu')
@section('content')



















  <h5 class="card-header">Enter job Details</h5>
  <form class="card-body  border-0" action="{{ route('addJob') }}"  method="POST" id="dropzone-basic" enctype="multipart/form-data">
  @csrf
    <div class="row g-3">
      <div class="col-md-6 mb-1">
        <label class="form-label" for="multicol-username">job Name</label>
        <input name="name_job" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
        @error('name_job')
              <span class="alert alert-danger">{{ $message }}</span>
          @enderror
      </div>

      <div class="col-md-6 mb-4">
                  <label for="select2Basic" class="form-label">Company</label>
                  <select id="select2Basic" name="company_job" class="select2 form-select form-select-lg" data-allow-clear="true">
                    <option value="1">Alaska</option>
                    <option value="2">Hawaii</option>
                    <option value="3">California</option>
                    <option value="4">Nevada</option>
                    <option value="5">Oregon</option>
                    <option value="6">Washington</option>
                  </select>

                  @error('company_job')
              <span class="alert alert-danger">{{ $message }}</span>
          @enderror
                </div>
      <div class="col-md-6 mb-1">
        <label class="form-label" for="multicol-username">job Type</label>
        <input name="type_job" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
        @error('type_job')
              <span class="alert alert-danger">{{ $message }}</span>
          @enderror
      </div>











      <div class="col-md-6 mb-1">
                  <label for="price" class=" col-form-label">Salary</label>
                  <input class="form-control" id="quantity" name="salary_job" type="number" value="18" />
                  @error('salary_job')
              <span class="alert alert-danger">{{ $message }}</span>
          @enderror

                </div>



      
        <div class="col-md-12">

          <label class="form-label" for="bootstrap-maxlength-example2">Job Description</label>
          <textarea id="bootstrap-maxlength-example2" name="desc_job" class="form-control bootstrap-maxlength-example" rows="3" maxlength="255"></textarea>
          @error('desc_job')
              <span class="alert alert-danger">{{ $message }}</span>
          @enderror
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