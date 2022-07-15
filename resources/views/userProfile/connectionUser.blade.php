@extends('layout.userProfile.menu')
@section('content')
@php ($connection_define = ['google','github','facebook','twitter'])
 <div class="card" style="align-items: center">
    <h5 class="card-header">Connected Accounts</h5>
    <div class="card-body">
       <div class="row">
        <div class="col-9 ">
          <p>Display content from your connected accounts on your site</p>
        </div>
        <div class="col-3 text-end">
          <button class="dt-button create-new btn btn-primary" data-bs-toggle="modal"  data-bs-target="#qualification" tabindex="0" aria-controls="DataTables_Table_0" type="button">
            <span><i class="bx bx-plus me-sm-2">
            </i> <span class="d-none d-sm-inline-block"></span></span>
           </button>
        </div>
       </div>
     
   @forelse ($connectionData as $connection )
     
  
      
    
    <div class="card mb-3">
     <div class="card-body">  

      <form action="{{route('connection_data_user')}}" method="POST">
        @csrf
      <div class="row mb-3">
        <div class="col-4 col-md-3 flex-shrink-0">
         
        <input type="text" class="form-control border-0 " readonly  name="name" value="{{$connection->name}}" id="">
        </div>
        <div class="col-8 col-md-5 flex-grow-1 row">
          <div class="col-12 mb-sm-0 mb-2">
            
            <input type="email" class="form-control  " value="{{$connection->url}}" name="url" id="">
          </div>
        </div>
          <div class="col-6 col-md-2 text-end " style="text-align:left !important">
            <label class="switch me-0">
              @if ($connection->is_active==1)
              <input type="checkbox" name="is_active" class="switch-input" checked />
              @else
              <input type="checkbox" name="is_active" class="switch-input"  />
              @endif
             
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
          {{-- <a href="{{route('connection_data_user_edit',['id'=>$connection->id])}}"> update</a> --}}
          <a href=""><button class="btn btn-outline-primary" type="submit"> update</button></a>

          </div>
        
      </div>
      </form>
     </div>
    </div> 
    @empty
     
    @endforelse

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
 
      <div class="card mb-3">
        <div class="card-body">  
   
         <form action="{{route('connection_data_user')}}" method="POST">
           @csrf
         <div class="row mb-3">
           <div class="col-4 col-md-3 flex-shrink-0">
            
            <select class="form-select" aria-label="Default select example" name="name">
            <option value="{{$connection_define[0]}}" selected>{{$connection_define[0]}}</option>
              @for($i=1;$i<count($connection_define) ; $i++ )
                <option  value="{{$connection_define[$i]}}" >{{$connection_define[$i]}}</option>
                @endfor
            </select>
           </div>
           <div class="col-8 col-md-5 flex-grow-1 row">
             <div class="col-12 mb-sm-0 mb-2">
               
               <input type="email" class="form-control  " value="url" name="url" id="">
             </div>
           </div>
             <div class="col-6 col-md-2 text-end " style="text-align:left !important">
               <label class="switch me-0">
                
                 <input type="checkbox" name="is_active" class="switch-input" checked />
                
                 <input type="checkbox" name="is_active" class="switch-input"  />
               
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
             {{-- <a href="{{route('connection_data_user_edit',['id'=>$connection->id])}}"> update</a> --}}
             <a href=""><button class="btn btn-outline-primary" type="submit"> update</button></a>
   
             </div>
           
         </div>
         </form>
        </div>
       </div> 
    </div>
    </div>
        </div>
      </div>
    
    

    


   
    
  
     
    </div>
  </div>
  <!-- /Connected Accounts -->

  <!-- Social Accounts -->

<!-- /Social Accounts -->

@endsection