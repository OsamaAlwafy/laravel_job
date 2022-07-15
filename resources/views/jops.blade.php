
@extends('layout.common_template')
@section('content')

  <div class="container mt-4 px-4 py-4">
    <form action="{{route('fullter-jobs')}}" method="get">
       <div class="row">
          <div class="col-6 col-lg-3 col-md-4 mb-2">
           
            <input type="text" name="name" class="form-control" id="input-search" placeholder="ابحث عن اسم الوظيفة">

          </div><!--end column-->
          <div class="col-6 col-lg-3 col-md-4 mb-2">
           
            <input type="text" name="city" class="form-control" id="input-search" placeholder="ابحث عن المدينة">

          </div><!--end column-->
          <div class="col-6 col-lg-2 col-md-4 mb-2">
           
            <select class="form-select" aria-label="Default select example">
              <option selected value=""> نوع الدوام</option>
              <option value="1">كامل</option>
              <option value="2">جزئي</option>
             
            </select>
          </div><!--end column-->

          <div class="col-6  col-lg-2 col-md-4 mb-2">
           
            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
            <label class="form-check-label" for="flexCheckIndeterminate">
              عن بعد
            </label>
          </div><!--end column-->
         

         

       
          <div class="col-12 col-lg-2 col-md-4 d-grid gap-2  ">
           
                
                <button class=" btn btn-outline-primary" id="serach-btn" type="submit">بحث</button>
              
          </div>  
        





       </div> <!--end row-->
    </form>  
  </div> <!--end container search-->

  <!--start search advance-->
  {{-- <div class="container mt-3">
      <div class="row">
          <div class="col-4 col-md-2">
            <div class="btn-group"  style="width: 100%; display: inline-block;"  role="group">
                <button id="btnGroupDrop1" style="width: 100%; display: inline-block;" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  عن بعد
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                  <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                </ul>
              </div>

              
          </div> <!--end column -->
          
        </div> <!--end column -->

        <div class="col-4 col-md-2"> 
            <div class="btn-group" style="width: 100%; display: inline-block;"  role="group">
              <button id="btnGroupDrop1" style="width: 100%; display: inline-block;" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                الدوام
              </button>
              <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
              </ul>
            </div>
          </div> <!--end column -->

         

          <div class="col-4 col-md-2"> 
            <div class="btn-group"  style="width: 100%; display: inline-block;"  role="group">
              <button id="btnGroupDrop1" style="width: 100%; display: inline-block;" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                المدينة
              </button>
              <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
              </ul>
            </div>
          </div> <!--end column -->

     

      </div> <!--end row--> 
  </div> <!--end container advanced search--> --}}
 <!--
  <div class="container mt-3 "> 
      <div class="row align-items-center ">
          <div class="col-12 col-md-6 col-lg-5 ">
               
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img src="assets/images/jops1.jpg" class="img-fluid rounded-start" alt="...">
                    <p class="card-text text-center"><small class="text-muted"> شركة اجودا</small></p>
                    
                  </div>
                  <div class="col-md-9">
                    <div class="card-body position-relative ">
                      <h5 class="card-title">منسق مشروعات</h5>
                    

                      <p class="card-text d-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg>
                          <small class="text-muted">صنعاء اليمن</small>
                          
                    
                    </p>
                     
                      <p class="card-text d-inline-block position-absolute top-0 end-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                            <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                            <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                          </svg>
                          <small class="text-muted ">منذ يومين</small>
                        </p>
                      <p class="card-text d-inline-block text-left">

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                          </svg>
                          <small class="text-muted ">عدد المتقدمين</small>
                        </p>
                        <button type="button" class="btn btn-secondary btn-lg d-inline-block mx-auto"><a style="text-decoration: none; color: white;" href="details.html">تفاصيل اكثر</a></button>
                    </div>
                  </div>
                </div>
              </div>

          </div> end column



          <div class="col-12 col-md-6 col-lg-5">
               
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img src="assets/images/jops2.jpg" class="img-fluid rounded-start" alt="...">
                    <p class="card-text text-center"><small class="text-muted"> شركة اجودا</small></p>
                    
                  </div>
                  <div class="col-md-9">
                    <div class="card-body position-relative ">
                      <h5 class="card-title">منسق مشروعات</h5>
                    

                      <p class="card-text d-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg>
                          <small class="text-muted">صنعاء اليمن</small>
                          
                    
                    </p>
                     
                      <p class="card-text d-inline-block position-absolute top-0 end-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                            <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                            <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                          </svg>
                          <small class="text-muted ">منذ يومين</small>
                        </p>
                      <p class="card-text d-inline-block text-left">

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                          </svg>
                          <small class="text-muted ">عدد المتقدمين</small>
                        </p>
                        <button type="button" class="btn btn-secondary btn-lg d-inline-block mx-auto"><a style="text-decoration: none; color: white;" href="details.html">تفاصيل اكثر</a></button>
                    </div>
                  </div>
                </div>
              </div>

          </div> end column



          <div class="col-12 col-md-6 col-lg-5">
               
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img src="assets/images/jops2.jpg" class="img-fluid rounded-start" alt="...">
                    <p class="card-text text-center"><small class="text-muted"> شركة اجودا</small></p>
                    
                  </div>
                  <div class="col-md-9">
                    <div class="card-body position-relative ">
                      <h5 class="card-title">منسق مشروعات</h5>
                    

                      <p class="card-text d-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg>
                          <small class="text-muted">صنعاء اليمن</small>
                          
                    
                    </p>
                     
                      <p class="card-text d-inline-block position-absolute top-0 end-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                            <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                            <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                          </svg>
                          <small class="text-muted ">منذ يومين</small>
                        </p>
                      <p class="card-text d-inline-block text-left">

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                          </svg>
                          <small class="text-muted ">عدد المتقدمين</small>
                        </p>
                        <button type="button" class="btn btn-secondary btn-lg d-inline-block mx-auto"><a style="text-decoration: none; color: white;" href="details.html">تفاصيل اكثر</a></button>
                    </div>
                  </div>
                </div>
              </div>

          </div> end column


          <div class="col-12 col-md-6 col-lg-5">
               
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img src="assets/images/jops1.jpg" class="img-fluid rounded-start" alt="...">
                    <p class="card-text text-center"><small class="text-muted"> شركة اجودا</small></p>
                    
                  </div>
                  <div class="col-md-9">
                    <div class="card-body position-relative ">
                      <h5 class="card-title">منسق مشروعات</h5>
                    

                      <p class="card-text d-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg>
                          <small class="text-muted">صنعاء اليمن</small>
                          
                    
                    </p>
                     
                      <p class="card-text d-inline-block position-absolute top-0 end-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                            <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                            <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                          </svg>
                          <small class="text-muted ">منذ يومين</small>
                        </p>
                      <p class="card-text d-inline-block text-left">

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                          </svg>
                          <small class="text-muted ">عدد المتقدمين</small>
                        </p>
                        <button type="button" class="btn btn-secondary btn-lg d-inline-block mx-auto"><a style="text-decoration: none; color: white;" href="details.html">تفاصيل اكثر</a></button>
                    </div>
                  </div>
                </div>
              </div>

          </div>nd column
                
      </div> end row

  </div> end container display jops
-->

<div class="container" id="all-job">
  <div class="row mt-4">
    <p class="h4 text-center"> وظائف ذات صلة</p>
    @forelse ($jobs as $job )
     
        
     
    
    <div class="col-12 parent">
        <div class="shadow-sm p-3 mb-5 bg-body rounded">
        <div class="row">
            <div class="col-3">
            <a href="{{route('details_job',['id'=>$job->id])}}"><img src="assets/images/rel1.png"></a> 
            </div>
            <div class="col-6">
                <p class="h5 name-job">{{$job->name}} </p>
                <p class="text-muted"><span class="name-city">{{$job->company->user->city}}</span>
                  <span class="name-company" ></span> {{$job->company->user->name}}
                </p>
            </div>
            <div class="col-3 col-md-2 text-center">
                <p class="py-2 mt-3 ps-1" style="background-color: darkgoldenrod; border-radius: 3px;">{{$job->job_detail->time_type}} </p>
            </div>
        </div>
        </div><!--end shadow-->
    </div><!--end single container col12-->
   
    @empty
      
    @endforelse

    {{-- <div class="col-12 parent">
        <div class="shadow-sm p-3 mb-5 bg-body rounded">
        <div class="row">
            <div class="col-3">
              <a href="/details"> <img src="assets/images/rel2.png"></a> 
            </div>
            <div class="col-7">
                <p class="h5 name-job">مبرمج </p>
                <p class="text-muted"> <span class="name-city">تعز</span>
                   <span class="name-company" ></span> شركة اليمن السعيد</p>
            </div>
            <div class="col-2">
                <p class="py-2 mt-3 ps-1" style="background-color: darkgoldenrod; border-radius: 3px;">دوام جزئي</p>
            </div>
        </div>
        </div><!--end shadow-->
    </div><!--end single container col12-->
    <div class="col-12 parent">
        <div class="shadow-sm p-3 mb-5 bg-body rounded">
        <div class="row">
            <div class="col-3">
              <a href="/details"><img src="assets/images/rel3.png"></a> 
            </div>
            <div class="col-7">
                <p class="h5 name-job">  مبرمج</p>
                <p class="text-muted">   <span class="name-city">صنعاء</span>
                  <span class="name-company" ></span> شركة اليمن السعيد</p></p>
            </div>
            <div class="col-2">
                <p class="py-2 mt-3 ps-1" style="background-color: rgb(127, 211, 106); border-radius: 3px;">دوام كلي</p>
            </div>
        </div>
        </div><!--end shadow-->
    </div><!--end single container col12--> --}}
</div> <!--end row that container relation jops-->    
</div> <!--end row info jops col-8 -->

<!--result search -->
<div class="container" id="search-result">
    قثسسبب
</div>
      

@endsection