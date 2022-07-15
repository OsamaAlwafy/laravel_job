
@extends('layout.company.menu')
@section('content')
                        
<div class=" " id="create-job" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
     
         
          <h3> ادخل البيانات عن الشركة </h3>
         
        
          
        </div> 
      <form id="editUserForm" method="POST" class="row g-3" action="{{route('update_company_data')}}">
        @csrf
        <div class="col-12 col-md-6">
          <label class="form-label" for="modalEditUserFirstName">الاسم </label>
        <input type="text" value="{{$companyData->name}}" name="name" id="modalEditUserFirstName"  class="form-control" placeholder="John" />
        </div>
        
        <div class="col-6">
          <label class="form-label" for="modalEditUserName">المدينة</label>
          <input type="text" value="{{$companyData->city}}" id="modalEditUserName" name="city" class="form-control" placeholder="john.doe.007" />
        </div>
        <div class="col-6">
          <label class="form-label" for="modalEditUserName">الدولة</label>
          <input type="text" value="{{$companyData->country}}" id="modalEditUserName" name="country" class="form-control" placeholder="john.doe.007" />
        </div>
        <div class="col-12 col-md-12">
          <label class="form-label" for="modalEditUserLastName"> الوصف </label>
          <textarea  value="{{$companyData->describe}}" id="modalEditUserLastName" name="describe" class="form-control" placeholder="Doe" >{{$companyData->describe}}</textarea>
        </div>
        {{-- <div class="col-12 col-md-6">
          <label class="form-label" for="modalEditUserEmail"> الراتب</label>
          <input type="text" value="{{$companyData->salary}}" id="modalEditUserEmail" name="salary" class="form-control" placeholder="example@domain.com" />
        </div>
        <div class="col-12 col-md-6">
          <label class="form-label" for="modalEditUserEmail">  مدة الخبرة المطلوبة</label>
          <input type="text" value="{{$companyData->duration_experience}}" id="modalEditUserEmail" name="duration_experience" class="form-control" placeholder="example@domain.com" />
        </div>
        <div class="col-12 col-md-12">
          <label class="form-label" for="modalEditUserEmail"> المهارات المطلوبة</label>
          <input type="text" value="{{$companyData->skill}}" id="modalEditUserEmail" name="skill" class="form-control" placeholder="example@domain.com" />
        </div>
     
        <div class="col-12 col-md-12">
          <label class="form-label" for="modalEditUserEmail">وصف الوظيفة</label>
          <input type="text" value="{{$companyData->descripe}}" id="modalEditUserEmail" name="descripe" class="form-control" placeholder="example@domain.com" />
        </div>
        <div class="col-12 col-md-12">
          <label class="form-label" for="modalEditUserEmail"> موسوليات العمل </label>
          <input type="text" value="{{$companyData->W_responsible}}" id="modalEditUserEmail" name="W_responsible" class="form-control" placeholder="example@domain.com" />
        </div>
        <div class="col-12 col-md-12">
          <label class="form-label" for="modalEditUserEmail"> لماذا العمل معنا</label>
          <input type="text" value="{{$companyData->why_w_us}}" id="modalEditUserEmail" name="why_w_us" class="form-control" placeholder="example@domain.com" />
        </div> --}}
        {{-- <div
          {{-- <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserStatus">Status</label>
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
          </div>
        --}}
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

