@extends('layout.userProfile.menu')
@section('content')

<div class="card-header flex-column flex-md-row">
  <div class="head-label text-center">
    <h5 class="card-title mb-0">DataTable with Buttons</h5>
  </div>
  <div class="dt-action-buttons text-end pt-3 pt-md-0">
    <div class="dt-buttons">
      
        <button class="dt-button create-new btn btn-primary" data-bs-toggle="modal"  data-bs-target="#qualification" tabindex="0" aria-controls="DataTables_Table_0" type="button">
         <span><i class="bx bx-plus me-sm-2">
         </i> <span class="d-none d-sm-inline-block">اضافة موهل جديد</span></span>
        </button>
       </div></div></div>
<div class="card">
<div class="card-datatable table-responsive">
  <table class="datatables-basic table border-top">
    <thead>
      <tr>
        
        <th>id</th>
        <th>اسم </th>
        <th>صورة </th>
        <th>التاريخ</th>
        <th>وصف</th>
        <th>الحالة </th>
        <th>العمليات</th>
      </tr>
    </thead>
    <tbody>
      @foreach ( $previous_works as $previous_work )
      <td>{{$previous_work->id}}</td>
      <td>{{$previous_work->name}}</td>
      <td>
        {{$previous_work->image}}
      </td>
      <td>
        {{$previous_work->date}}
      </td>
      <td>
        {{$previous_work->describe}}
      </td>
      <td>
        @if ($previous_work->is_active)
      <a href="{{route('activity_pre_work',['id'=>$previous_work->id,'active'=>0])}}"><button type="button" class="btn btn-success">مفعل</button></a>
        @else
      <a href="{{route('activity_pre_work',['id'=>$previous_work->id,'active'=>1])}}"><button type="button" class="btn btn-danger">موقف</button></a>
        
          
        @endif
      </td>
      <td>
        <div class="dropdown">
          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('edit_pre_work',['id'=>$previous_work->id])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
          <a class="dropdown-item" href="{{route('delete_pre_work',['id'=>$previous_work->id])}}"><i class="bx bx-trash me-1"></i> Delete</a>
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
<div class=" offcanvas-end fade  modal m-auto " style="background-color: #fcfdfd ;right:50% " tabindex="-1"  id="qualification">
<div class="offcanvas-header modal-dialog   border-bottom">
  <h5 class="offcanvas-title" id="exampleModalLabel">اضافة مشروع جديد</h5>
  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body flex-grow-1">
  <form class="add-new-record pt-0 row g-2" method="POST" action="{{route('store_pre_work')}}" id="form-add-new-record" >
   @csrf
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">اسم المشروع </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="text" id="basicFullname" class="form-control dt-full-name" name="name" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">وصف المشروع </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="text" id="basicFullname" class="form-control dt-full-name" name="describe" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname"> رابط المشروع </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="text" id="basicFullname" class="form-control dt-full-name" name="project_url" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname"> صورة المشروع </label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input type="file" id="basicFullname" class="form-control dt-full-name" name="image" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div>
    </div>
    <div class="col-md-6 col-12 mb-4">
      <label for="bs-datepicker-options" class="form-label">التاريخ</label>
      <input type="date" id="bs-datepicker-options" placeholder="MM/DD/YYYY" name="date" class="form-control" />
    </div>
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">Submit</button>
      <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
    </div>
  </form>

</div>
</div>

  @endsection