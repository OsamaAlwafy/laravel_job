@extends('layout.userProfile.menu')
@section('content')


<!-- Modal to add new record -->
<div class="  " style="background-color: #fcfdfd ;right:50% " tabindex="-1"  id="qualification">
<div class="offcanvas-header    border-bottom">
  <h5 class="offcanvas-title" id="exampleModalLabel">اضافة خبره جديد</h5>
  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body flex-grow-1">
  <form class="add-new-record pt-0 row g-2" method="POST" action="{{route('update_experience',['id'=>$experience->id])}}"  id="form-add-new-record" >
    @csrf
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">اسم الخبره </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
      <input type="text" value="{{$experience->name}}" id="basicFullname" class="form-control dt-full-name" name="name" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">وصف الخبره </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="text" value="{{$experience->describe}}" id="basicFullname" class="form-control dt-full-name" name="describe" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">اسم الشركة  </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="text" value="{{$experience->campany_name}}" id="basicFullname" class="form-control dt-full-name" name="campany_name" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname"> رابط الشركة </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="text" value="{{$experience->campany_url}}" id="basicFullname" class="form-control dt-full-name" name="campany_url" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">  تاريخ بداية العمل </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="date" value="{{$experience->start_date}}" id="basicFullname" class="form-control dt-full-name" name="start_date" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">  نهاية تاريخ العمل </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="date" value="{{$experience->end_date}}" id="basicFullname" class="form-control dt-full-name" name="end_date" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">Submit</button>
      <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
    </div>
  </form>

</div>
</div>

  @endsection