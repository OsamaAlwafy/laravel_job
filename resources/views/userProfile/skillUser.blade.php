@extends('layout.userProfile.menu')
@section('content')

<div class="card-header flex-column flex-md-row">
  <div class="head-label text-center">
    <h5 class="card-title mb-0">قائمة المهارات</h5>
  </div>
  <div class="dt-action-buttons text-end pt-3 pt-md-0">
    <div class="dt-buttons">
      
        <button class="dt-button create-new btn btn-primary" data-bs-toggle="modal"  data-bs-target="#skill" tabindex="0" aria-controls="DataTables_Table_0" type="button">
         <span><i class="bx bx-plus me-sm-2">
         </i> <span class="d-none d-sm-inline-block">اضافة مهارة جديد</span></span>
        </button>
       </div></div></div>
<div class="card">
<div class="card-datatable table-responsive">
  <table class="datatables-basic table border-top">
    <thead>
      <tr>
        
        <th>id</th>
        <th>اسم</th>
        <th>النسبة</th>
        <th>الحالة</th>
        
        <th>العمليات</th>
      </tr>
    </thead>
    <tbody>
      @foreach ( $skills as $skill )
      <td>{{$skill->id}}</td>
      <td>{{$skill->id}}</td>
      <td>
        <div class="progress">
          <div class="progress-bar bg-success" role="progressbar" style="width:{{$skill->rate}}%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">{{$skill->rate}}%</div>
        </div>
      </td>
      <td>
        @if ($skill->is_active)
      <a href="{{route('activity_skill',['id'=>$skill->id,'active'=>0])}}"><button type="button" class="btn btn-success">مفعل</button></a>
        @else
      <a href="{{route('activity_skill',['id'=>$skill->id,'active'=>1])}}"><button type="button" class="btn btn-danger">موقف</button></a>
        
          
        @endif
      </td>
      <td>
        <div class="dropdown">
          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('edit_skill',['id'=>$skill->id])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
          <a class="dropdown-item" href="{{route('delete_skill',['id'=>$skill->id])}}"><i class="bx bx-trash me-1"></i> Delete</a>
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
<div class=" offcanvas-end fade  modal m-auto " style="background-color: #fcfdfd ;right:50% " tabindex="-1"  id="skill">
<div class="offcanvas-header modal-dialog   border-bottom">
  <h5 class="offcanvas-title" id="exampleModalLabel">اضافة مهارة جديد</h5>
  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body flex-grow-1">
<form class="add-new-record pt-0 row g-2" id="form-add-new-record" method="POST" action="{{route('add_skill')}}">
  @csrf
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">اسم المهاره</label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
        <input name="name" type="text" id="basicFullname" class="form-control dt-full-name" name="basicFullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div> 
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="rateSkill">النسبة</label>
      <div class="input-group input-group-merge" style="gap: 10px">
        <input type="range" class="flex-grow-1" onchange="updateTextInput(this.value);"  min="1" max="100" id="rateSkill">
        <input name="rate" type="text" style="width: 13%; border-radius:30%" id="textInput" value="">
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

  <script>
    function updateTextInput(val) {
          document.getElementById('textInput').value=val; 
        }
  </script>