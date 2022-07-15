@extends('layout.userProfile.menu')
@section('content')

<div class="card-header flex-column flex-md-row">
  <div class="head-label text-center">
    <h5 class="card-title mb-0">الخبره</h5>
  </div>
  <div class="dt-action-buttons text-end pt-3 pt-md-0">
    <div class="dt-buttons">
      
        <button class="dt-button create-new btn btn-primary" data-bs-toggle="modal"  data-bs-target="#qualification" tabindex="0" aria-controls="DataTables_Table_0" type="button">
         <span><i class="bx bx-plus me-sm-2">
         </i> <span class="d-none d-sm-inline-block">اضافة خبره جديد</span></span>
        </button>
       </div></div></div>
<div class="card">
<div class="card-datatable table-responsive">
  <table class="datatables-basic table border-top">
    <thead>
      <tr>
       
        <th>id</th>
        <th>اسم</th>
        <th>الوصف</th>
        <th>تاريخ البدء</th>
        <th>تايخ الانتهاء</th>
        <th>اسم الشركة</th>
        <th>الحالة </th>
        <th>العمليات</th>
      </tr>
    </thead>
    <tbody>
      @foreach ( $experiences as $experience )
      <td>{{$experience->id}}</td>
      <td>{{$experience->name}}</td>
      <td>
        {{$experience->describe}}
      </td>
      <td>
        {{$experience->start_date}}
      </td>
      <td>
        {{$experience->end_date}}
      </td>
      <td>
        {{$experience->campany_name}}
      </td>
      <td>
        @if ($experience->is_active)
      <a href="{{route('activity_experience',['id'=>$experience->id,'active'=>0])}}"><button type="button" class="btn btn-success">مفعل</button></a>
        @else
      <a href="{{route('activity_experience',['id'=>$experience->id,'active'=>1])}}"><button type="button" class="btn btn-danger">موقف</button></a>
        
          
        @endif
      </td>
      <td>
        <div class="dropdown">
          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('edit_experience',['id'=>$experience->id])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
          <a class="dropdown-item" href="{{route('delete_experience',['id'=>$experience->id])}}"><i class="bx bx-trash me-1"></i> Delete</a>
          </div>
        </div>
      </td>
    </tr>
      @endforeach
    <tr>
    


    </tbody>
  </table>
</div>
</div>
<!-- Modal to add new record -->
<div class="modal fade " id="qualification" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        {{-- <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button> --}}
        <div class="text-center mb-4">
     
         
          <h3> اضافة خبره  جديد </h3>
         
        
          
        </div>

</div>

{{-- <div class=" offcanvas-end fade  modal m-auto " style="background-color: #fcfdfd ;right:50% " tabindex="-1"  id="qualification">
<div class="offcanvas-header modal-dialog   border-bottom">
  <h5 class="offcanvas-title" id="exampleModalLabel">اضافة خبره جديد</h5>
  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div> --}}
<div class="offcanvas-body flex-grow-1">
  <form class="add-new-record pt-0 row g-2" method="POST" action="{{route('store_experience')}}"  id="form-add-new-record" >
    @csrf
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">اسم الخبره </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="text" id="basicFullname" class="form-control dt-full-name" name="name" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">وصف الخبره </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="text" id="basicFullname" class="form-control dt-full-name" name="describe" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">اسم الشركة  </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="text" id="basicFullname" class="form-control dt-full-name" name="campany_name" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname"> رابط الشركة </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="text" id="basicFullname" class="form-control dt-full-name" name="campany_url" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">  تاريخ بداية العمل </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="date" id="basicFullname" class="form-control dt-full-name" name="start_date" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">  نهاية تاريخ العمل </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="date" id="basicFullname" class="form-control dt-full-name" name="end_date" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">Submit</button>
      <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
    </div>
  </form>

</div>
</div>
    </div>
  </div>

  @endsection