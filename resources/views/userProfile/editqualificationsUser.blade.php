@extends('layout.userProfile.menu')
@section('content')


<!-- Modal to add new record -->
<div class="  " style="background-color: #fcfdfd ;right:50% " tabindex="-1"  id="qualification">
  <div class="offcanvas-header    border-bottom">
    <h5 class="offcanvas-title" id="exampleModalLabel">اضافة موهل جديد</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body flex-grow-1">
  <form class="add-new-record pt-0 row g-2" id="form-add-new-record" method="POST" action="{{route('update_qualification',["id"=>$qualification->id])}}">
    @csrf
      <div class="col-sm-12">
        <label class="form-label" for="basicFullname">اسم الموهل </label>
        <div class="input-group input-group-merge">
          <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input value="{{$qualification->name}}" type="text" id="basicFullname" class="form-control dt-full-name" name="name" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
        </div>
      </div>
      <div class="col-sm-12">
        <label class="form-label" for="basicFullname">وصف الموهل </label>
        <div class="input-group input-group-merge">
          <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
          <input type="text" value="{{$qualification->describe}}" id="basicFullname" class="form-control dt-full-name" name="describe" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
        </div>
      </div>
      <div class="col-md-6 col-12 mb-4">
        <label for="bs-datepicker-options" class="form-label">التاريخ</label>
        <input type="date" value="{{$qualification->date}}" name="date" id="bs-datepicker-options" placeholder="MM/DD/YYYY" class="form-control" />
      </div>
      
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
      </div>
    </form>

  </div>
</div>

<!--/ DataTable with Buttons -->
@endsection