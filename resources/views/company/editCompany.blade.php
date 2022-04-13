

@extends('layout.admin.menu')
@section('content')

<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Forms /</span> Basic Inputs
  </h4>
  
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <h5 class="card-header">Default</h5>
        <div class="card-body">
          @if ($errors->any())
          @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
              
          @endforeach
              
          @endif
          
          
          <form method="POST" action="{{ route('update_company',$category->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="row g-3">
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">  name</label>
                <div class="col-sm-9">
                  <input type="text"  value="{{ $category->name }}" name="name" id="formtabs-first-name" class="form-control" placeholder="John" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">  type</label>
                <div class="col-sm-9">
                  <input type="text" name="type" value="{{ $category->type }}" id="formtabs-last-name" class="form-control" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">  Location</label>
                <div class="col-sm-9">
                  <input type="text" name="location" value="{{ $category->location }}" id="formtabs-last-name" class="form-control" />
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">  City</label>
                <div class="col-sm-9">
                  <input type="text" name="city" value="{{ $category->city }}" id="formtabs-last-name" class="form-control" />
                </div>
              </div>
            </div>
            <!-- <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">is active</label>
                <div class="col-sm-9">
                  <select  name="is_active" id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                    
                    <option @if($category->is_active==1) selected @endif value="1">مفعل</option>
                    <option  @if($category->is_active==-1) selected @endif value="-1">معطل</option>
                  </select>
                </div>
              </div>
            </div> -->
            
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">image</label>
                <div class="col-sm-9">
                  <input type="file" name="image" id="formtabs-birthdate" class="form-control dob-picker" />
                </div>
              </div>
            </div>
           
          </div>



          
        </div>
        <div class="card-footer">
          <input type="submit" name="submit" id="formtabs-first-name"  value="تعديل"class="form-control" placeholder="John" />

        </form>


        </div>
      </div>
    </div>
    
  
  
  
  
  
  </div>
@endsection