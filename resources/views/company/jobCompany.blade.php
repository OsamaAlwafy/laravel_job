@extends('layout.company.menu')
@section('content')

<div class="card-header flex-column flex-md-row">
  <div class="head-label text-center">
    <h5 class="card-title mb-0">قائمة الوظائف</h5>
  </div>
  <div class="dt-action-buttons text-end pt-3 pt-md-0">
    <div class="dt-buttons">
      
     <button class="dt-button create-new btn btn-primary" data-bs-toggle="modal"  data-bs-target="#create-job" tabindex="0" aria-controls="DataTables_Table_0" type="button">
         <span><i class="bx bx-plus me-sm-2">
         </i> <span class="d-none d-sm-inline-block">اضافة وظيفة جديدة جديد</span></span>
        </button>
       </div></div></div>
       @if ($jobs)
         
      
       @forelse ( $jobs->jobs as $job )
     
     
<div class="card">
<div class="card-datatable table-responsive">
  
  <table class="datatables-basic table mt-2 border-top">
    <thead>
      <tr>
        
        <th>id</th>
        <th>اسم</th>
        <th>نوع الوظيفة</th>
        <th> الراتب</th>
        <th> المقدمين</th>
        <th>الحالة</th>
      
        
        <th>العمليات</th>
      </tr>
    </thead>
    <tbody>
      
      <td>{{$job->id}}</td>
      <td>{{$job->name}}</td>
      <td>{{$job->job_detail->Job_title}}</td>
      <td>{{$job->job_detail->salary}}</td>
    <td>  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$job->id}}" aria-expanded="true" aria-controls="collapseOne">   المتقدمين   </button> <td>
      
      
        <td>
        @if ($job->is_active)
      <a href="{{route('activity_job_company',['id'=>$job->id,'active'=>0])}}"><button type="button" class="btn btn-success">مفعل</button></a>
        @else
      <a href="{{route('activity_job_company',['id'=>$job->id,'active'=>1])}}"><button type="button" class="btn btn-danger">موقف</button></a>
        
          
        @endif
      </td>
      <td>
        <div class="dropdown">
          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('edit_job_company',['id'=>$job->id])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
          <a class="dropdown-item" href="{{route('delete_job_company',['id'=>$job->id])}}"><i class="bx bx-trash me-1"></i> Delete</a>
          </div>
        </div>
      </td>
    </tr>
    
    
    


    </tbody>
  </table>
<div  id="collapseOne{{$job->id}}"  class="accordion-collapse ms-3 collapse  hide">
    
      
    
    <table class="datatables-basic table border-top">
      <thead>
        <tr>
          
          <th>id</th>
          <th>اسم</th>
          <th>CV</th>
          <th>تعين</th>

        </tr>
      </thead>
      
 <tbody>
   @forelse ($job->user as $user )
   <tr>
   <td>  {{$user->id}}  </td>
   <td>  {{$user->name}}  </td>
   <td>   <a href="{{route('show_cv',['id'=>$user->id])}}"><button type="button" class="btn btn-outline-success btn-sm">عرض CV</button> </a> </td>
   <td> <a href="{{route('complete_accept_user',['job_id'=>$job->id,"user_id"=>$user->id])}}"><button type="button" class="btn btn-outline-success btn-sm">قيول</button> </a>  </td>
  </tr>
  @empty
  <tr>
  <div class="alert alert-danger" role="alert">
   لا يوجد متقدمين على الوظيفة حتى الان
  </div>
  </tr>
   @endforelse 
  
  </tbody>
 </table>
  </div>
  
</div>
</div>
@empty
<div class="alert alert-danger" role="alert">
  لا يوجد وظائف قمت بنشرها في الموقع
</div>
@endforelse
@endif
<!-- Modal to add new record -->
<div class="modal fade" id="create-job" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
        
          <h3>اضافة وظيفة جديدة</h3>
            
         
          
        
          
        </div>
        <form id="editUserForm" class="row g-3" method="POST" action="{{route('store_job_company')}}">
          @csrf
         
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserFirstName">صنف الوظيفة </label>
            <select class="form-select" name="tag" aria-label="Default select example">
              @foreach ( $tags as $tag )
                
              
            <option value="{{$tag->id}}">{{$tag->name}}</option>
              @endforeach
              
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLastName">نوع الوظيفة </label>
            <input type="text"  id="modalEditUserLastName" name="Job_title" class="form-control" placeholder="Doe" />
          </div>
          <div class="col-6">
            <label class="form-label" for="modalEditUserName">الدوام</label>
            <input type="text" id="modalEditUserName" name="time_type" class="form-control" placeholder="john.doe.007" />
          </div>
          <div class="col-6">
            <label class="form-label" for="modalEditUserName">الفرع</label>
            <input type="text" id="modalEditUserName" name="branch" class="form-control" placeholder="john.doe.007" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail"> الراتب</label>
            <input type="text" id="modalEditUserEmail" name="salary" class="form-control" placeholder="example@domain.com" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">  مدة الخبرة المطلوبة</label>
            <input type="text" id="modalEditUserEmail" name="duration_experience" class="form-control" placeholder="example@domain.com" />
          </div>
          <div class="col-12 col-md-12">
            <label class="form-label" for="modalEditUserEmail"> المهارات المطلوبة</label>
            <input type="text" id="modalEditUserEmail" name="skill" class="form-control" placeholder="example@domain.com" />
          </div>
       
          <div class="col-12 col-md-12">
            <label class="form-label" for="modalEditUserEmail">وصف الوظيفة</label>
            <input type="text" id="modalEditUserEmail" name="descripe" class="form-control" placeholder="example@domain.com" />
          </div>
          <div class="col-12 col-md-12">
            <label class="form-label" for="modalEditUserEmail"> موسوليات العمل </label>
            <input type="text" id="modalEditUserEmail" name="W_responsible" class="form-control" placeholder="example@domain.com" />
          </div>
          <div class="col-12 col-md-12">
            <label class="form-label" for="modalEditUserEmail"> لماذا العمل معنا</label>
            <input type="text" id="modalEditUserEmail" name="why_w_us" class="form-control" placeholder="example@domain.com" />
          </div>
          {{-- <div class="col-12 col-md-6"> --}}
            {{-- <label class="form-label" for="modalEditUserStatus">Status</label>
            <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
              <option selected>Status</option>
              <option value="1">Active</option>
              <option value="2">Inactive</option>
              <option value="3">Suspended</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditTaxID">Tax ID</label>
            <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserPhone">Phone Number</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text">+1</span>
              <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111" />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLanguage">Language</label>
            <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select" multiple>
              <option value="">Select</option>
              <option value="english" selected>English</option>
              <option value="spanish">Spanish</option>
              <option value="french">French</option>
              <option value="german">German</option>
              <option value="dutch">Dutch</option>
              <option value="hebrew">Hebrew</option>
              <option value="sanskrit">Sanskrit</option>
              <option value="hindi">Hindi</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserCountry">Country</label>
            <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">
              <option value="">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>
          </div>
          <div class="col-12">
            <label class="switch">
              <input type="checkbox" class="switch-input">
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Use as a billing address?</span>
            </label>
          </div> --}}
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

  @endsection

  <script>
    function updateTextInput(val) {
          document.getElementById('textInput').value=val; 
        }
  </script>