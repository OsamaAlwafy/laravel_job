@extends('layout.userProfile.menu')
@section('content')


<!-- Modal to add new record -->
<div class=" " style="background-color: #fcfdfd ;right:50% " tabindex="-1"  id="qualification">
<div class="offcanvas-header border-bottom">
  <h5 class="offcanvas-title" id="exampleModalLabel">اضافة مشروع جديد</h5>
  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body flex-grow-1">
  <form class="add-new-record pt-0 row g-2" method="POST" action="{{route('update_pre_work',["id"=>$previous_works->id])}}" id="form-add-new-record" >
   @csrf
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">اسم المشروع </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
      <input type="text" value="{{$previous_works->name}}" id="basicFullname" class="form-control dt-full-name" name="name" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">وصف المشروع </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input value="{{$previous_works->describe}}" type="text" id="basicFullname" class="form-control dt-full-name" name="describe" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname"> رابط المشروع </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="text" value="{{$previous_works->project_url}}" id="basicFullname" class="form-control dt-full-name" name="project_url" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname"> صورة المشروع </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="file" id="basicFullname" value="{{$previous_works->image}}" class="form-control dt-full-name" name="image" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-md-6 col-12 mb-4">
      <label for="bs-datepicker-options" class="form-label">التاريخ</label>
      <input type="date" value="{{$previous_works->date}}" id="bs-datepicker-options" placeholder="MM/DD/YYYY" name="date" class="form-control" />
    </div>
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">Submit</button>
      <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
    </div>
  </form>

</div>
</div>

  @endsection