@extends('layout.userProfile.menu')
@section('content')
@php ($connection = ['google','github','facebook','twitter'])
 <div class="card" style="align-items: center">
    <h5 class="card-header">Connected Accounts</h5>
    <div class="card-body">
      <p>Display content from your connected accounts on your site</p>
    @for($i=0;$i<count($connection) ; $i++ )
      
    
    <div class="card mb-3">
     <div class="card-body">  

      <form action="{{route('connection_data_user')}}" method="POST">
        @csrf
      <div class="row mb-3">
        <div class="col-4 col-md-3 flex-shrink-0">
         
        <input type="text" class="form-control border-0 " readonly  name="name" value="{{$connection[$i]}}" id="">
        </div>
        <div class="col-8 col-md-5 flex-grow-1 row">
          <div class="col-12 mb-sm-0 mb-2">
            
            <input type="email" class="form-control  " name="url" id="">
          </div>
        </div>
          <div class="col-6 col-md-2 text-end " style="text-align:left !important">
            <label class="switch me-0">
              <input type="checkbox" name="is_active" class="switch-input" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on">
                  <i class="bx bx-check"></i>
                </span>
                <span class="switch-off">
                  <i class="bx bx-x"></i>
                </span>
              </span>
              <span class="switch-label"></span>
            </label>
          </div>
          <div class="col-6 col-md-2 mb-sm-0 mb-2">
            <a href=""><button class="btn btn-outline-primary" type="submit"> update</button></a>
          </div>
        
      </div>
      </form>
     </div>
    </div> 
    @endfor
    
    

    


   
    
  
     
    </div>
  </div>
  <!-- /Connected Accounts -->

  <!-- Social Accounts -->

<!-- /Social Accounts -->

@endsection