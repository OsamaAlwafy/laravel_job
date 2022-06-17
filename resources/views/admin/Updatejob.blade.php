
@extends('layout.admin.menu')
@section('content')

  <h5 class="card-header">ادخل تفاصيل  نغديل الوظيفة</h5>
  <form class="card-body  border-0" action="{{ route('update_job',["id"=>$job->job_id]) }}"  method="POST" id="dropzone-basic" enctype="multipart/form-data">
  @csrf
    <div class="row g-3">
      <div class="col-md-6 mb-1">
        <label class="form-label" for="multicol-username">مجال الوظيفة</label>
      <input name="name_job" value="{{$job->name}}" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
        @error('name_job')
              <span class="alert alert-danger">{{ $message }}</span>
          @enderror
      </div>

      <div class="col-md-3 mb-4">
                  <label for="select2Basic" class="form-label">الشركة</label>

                  <select id="select2Basic" name= "company_job" class="select2 form-select form-select-md" data-allow-clear="true">
                  @foreach ( $companies as $company )
                   @if ($company->id==$job->company_id)
                   <option selected value={{$company->id}}>{{$company->name_com}}</option>
                   @else
                   <option value={{$company->id}}>{{$company->name_com}}</option>
                   @endif
                    
                    @endforeach
            
                  </select>

                  @error('company_job')
              <span class="alert alert-danger">{{ $message }}</span>
          @enderror
                </div>

                <div class="col-md-3 mb-1">
                  <label class="form-label" for="multicol-username"> الفرع</label>
                  <input name="branch" value="{{$job->branch}}"type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
                  @error('branch')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                </div>
      <div class="col-md-6 mb-1">
        <label class="form-label" for="multicol-username">نوع الوظيفة</label>
        <input name="type_job" value="{{$job->Job_title}}" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
        @error('type_job')
              <span class="alert alert-danger">{{ $message }}</span>
          @enderror
      </div>











      <div class="col-md-6 mb-1">
                  <label for="price" class=" col-form-label">الراتب</label>
                  <input class="form-control" value="{{$job->salary}}"  id="quantity" name="salary_job" type="number" value="18" />
                  @error('salary_job')
              <span class="alert alert-danger">{{ $message }}</span>
          @enderror

                </div>



      
        <div class="col-md-12">

          <label class="form-label" for="bootstrap-maxlength-example2">وصف الوظيفة</label>
          <textarea id="bootstrap-maxlength-example2"  name="desc_job" class="form-control bootstrap-maxlength-example" rows="3" maxlength="255"> {{$job->descripe}}</textarea>
          @error('desc_job')
              <span class="alert alert-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="col-md-12">

          <label class="form-label" for="bootstrap-maxlength-example2">مسؤوليات العمل</label>
          <textarea id="bootstrap-maxlength-example2"  name="W_responsible" class="form-control bootstrap-maxlength-example" rows="3" maxlength="255">{{$job->why_w_us}}</textarea>
          @error('W_responsible')
              <span class="alert alert-danger">{{ $message }}</span>
          @enderror
        </div>

        <div class="col-md-12">

          <label class="form-label" for="bootstrap-maxlength-example2">لماذا العمل معنا</label>
          <textarea id="bootstrap-maxlength-example2"  name="why_w_us" class="form-control bootstrap-maxlength-example" rows="3" maxlength="255">{{$job->W_responsible}}</textarea>
          @error('why_w_us')
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





@endsection


</body>


<!--  , Sat, 26 Mar 2022 16:46:23 GMT -->

</html>

