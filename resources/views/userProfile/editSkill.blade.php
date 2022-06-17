@extends('layout.userProfile.menu')
@section('content')


   
<!-- Modal to add new record -->
<div class=" " style="background-color: #fcfdfd ;right:50% " tabindex="-1"  id="skill">
<div class="offcanvas-header   border-bottom">
  <h5 class="offcanvas-title" id="exampleModalLabel">اضافة مهارة جديد</h5>
  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body flex-grow-1">
<form class="add-new-record pt-0 row g-2" id="form-add-new-record" method="POST" action="{{route('update_skill',['id'=>$skill->id])}}">
  @csrf
    <div class="col-sm-12">
      <label class="form-label" for="basicFullname">اسم المهاره</label>
      <div class="input-group input-group-merge">
        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
      <input name="name" value="{{$skill->name}}" type="text" id="basicFullname" class="form-control dt-full-name" name="basicFullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
      </div> 
    </div>
    <div class="col-sm-12">
      <label class="form-label" for="rateSkill">النسبة</label>
      <div class="input-group input-group-merge" style="gap: 10px">
        <input type="range" class="flex-grow-1" onchange="updateTextInput(this.value);"  min="1" max="100" id="rateSkill">
      <input name="rate" type="text" style="width: 13%; border-radius:30%" id="textInput" value="{{$skill->rate}}">
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