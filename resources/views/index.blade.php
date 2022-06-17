


@extends('layout.common_template')
@section('content')



      <div class="position-relative  container-fluid hero" style="color:white; height: 500px; overflow: hidden;">
        
        <img src="assets/images/backindex.jpg"> 
       
        <div class="position-absolute top-0 "  style="background-color: rgb(0 0 0 / 40%); width: 100% ; height: 100%;">
          </div>
          <p class="h1 position-absolute top-50 start-50 translate-middle"> 
            مكان توجد فيه الفرص
          </p>
          <div class="row position-absolute start-50  translate-middle" style="top:75%;" >
          <div class="col-12 col-md-4 mb-1">
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="ختار الوظيفة">
            <datalist id="datalistOptions">
              <option value="San Francisco">
              <option value="New York">
              <option value="Seattle">
              <option value="Los Angeles">
              <option value="Chicago">
            </datalist>

              </div>

              
          <div class="col-12 col-md-4 mb-1">
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="ختار الوظيفة">
            <datalist id="datalistOptions">
              <option value="San Francisco">
              <option value="New York">
              <option value="Seattle">
              <option value="Los Angeles">
              <option value="Chicago">
            </datalist>

              </div>
              <div class="col-12 col-md-4">
           
                
                <button class=" btn btn-primary" type="button">بحث</button>
              
          </div>  



        </div> 
        </div> 


        <div class="container">
        <div class="row mt-4">
          <p class="h4 text-center"> وظائف ذات صلة</p>
          <div class="col-12">
              <div class="shadow-sm p-3 mb-5 bg-body rounded">
              <div class="row">
                  <div class="col-3">
                      <img src="assets/images/rel1.png">
                  </div>
                  <div class="col-7">
                      <p class="h5">مدير تسويق</p>
                      <p class="text-muted">تعز -اليمن -شركة اليمن السعيد</p>
                  </div>
                  <div class="col-2">
                      <p class="py-2 mt-3 ps-1" style="background-color: darkgoldenrod; border-radius: 3px;">دوام جزئي</p>
                  </div>
              </div>
              </div><!--end shadow-->
          </div><!--end single container col12-->

          <div class="col-12">
              <div class="shadow-sm p-3 mb-5 bg-body rounded">
              <div class="row">
                  <div class="col-3">
                      <img src="assets/iimages/rel2.png">
                  </div>
                  <div class="col-7">
                      <p class="h5">مدير تسويق</p>
                      <p class="text-muted">تعز -اليمن -شركة اليمن السعيد</p>
                  </div>
                  <div class="col-2">
                      <p class="py-2 mt-3 ps-1" style="background-color: darkgoldenrod; border-radius: 3px;">دوام جزئي</p>
                  </div>
              </div>
              </div><!--end shadow-->
          </div><!--end single container col12-->
          <div class="col-12">
              <div class="shadow-sm p-3 mb-5 bg-body rounded">
              <div class="row">
                  <div class="col-3">
                      <img src="assets/images/rel3.png">
                  </div>
                  <div class="col-7">
                      <p class="h5">مدير تسويق</p>
                      <p class="text-muted">تعز -اليمن -شركة اليمن السعيد</p>
                  </div>
                  <div class="col-2">
                      <p class="py-2 mt-3 ps-1" style="background-color: rgb(127, 211, 106); border-radius: 3px;">دوام كلي</p>
                  </div>
              </div>
              </div><!--end shadow-->
          </div><!--end single container col12-->
      </div> <!--end row that container relation jops-->    
  </div> <!--end row info jops col-8 -->
</div>
      
   

      <!--advertise start-->
     <!--
         <div class="container-fluid mt-1">

            <div class="row">
              <div class="col-6 col-md-3"> 
                <div class="toast align-items-center show" role="alert" aria-live="assertive" aria-atomic="true">
                  <button type="button" class="btn-close me-2 " data-bs-dismiss="toast" aria-label="Close"></button>
                    <div class="toast-body">
                      
                    <img src="unver.jpeg" class="img-fluid">
                   </div>
                </div>
              </div>

              <div class="col-6 col-md-3"> 
                <div class="toast align-items-center show" role="alert" aria-live="assertive" aria-atomic="true">
                  <button type="button" class="btn-close me-2 " data-bs-dismiss="toast" aria-label="Close"></button>
                    <div class="toast-body">
                      
                    <img src="unver.jpeg" class="img-fluid">
                   </div>
                </div>
              </div>


             
                <div class="col-6 col-md-3"> 
                  <div class="toast align-items-center show" role="alert" aria-live="assertive" aria-atomic="true">
                    <button type="button" class="btn-close me-2 " data-bs-dismiss="toast" aria-label="Close"></button>
                      <div class="toast-body">
                        
                      <img src="unver.jpeg" class="img-fluid">
                     </div>
                  </div>
                </div>
  
                <div class="col-6 col-md-3"> 
                  <div class="toast align-items-center show" role="alert" aria-live="assertive" aria-atomic="true">
                    <button type="button" class="btn-close me-2 " data-bs-dismiss="toast" aria-label="Close"></button>
                      <div class="toast-body">
                        
                      <img src="unver.jpeg" class="img-fluid">
                     </div>
                  </div>
                </div>


            </div>

         </div>

      advertise end-->
     <!--show or view the latest jops-->
     <!--
         <div class="container-fluid mt-2">
          <h2 class="text-center"> اخر الوظائف</h2>
            <div class="row">
               <div class="col-12 col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="unver.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title"> وظيفة إدارية بمجال خدمة العملاء </h5>
                        <p class="card-text">السعد للمقاولات العامة المحدوده</p>
                        <p class="card-text d-inline-block"> 
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                          </svg>
                          <small class="text-muted">وقت كامل</small>
                        </p>
                        <p class="card-text d-inline-block ms-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                          <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                          <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                        </svg>
                        
                        <small class="text-muted">منذ ساعتين</small>
                        </p>
                        <button type="button" class="btn btn-success d-block">تفاصيل اكثر</button>
                      </div>
                    </div>
                  </div>
                </div>

                
               </div>


               <div class="col-12 col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="unver.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title"> وظيفة إدارية بمجال خدمة العملاء </h5>
                        <p class="card-text">السعد للمقاولات العامة المحدوده</p>
                        <p class="card-text d-inline-block"> 
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                          </svg>
                          <small class="text-muted">وقت كامل</small>
                        </p>
                        <p class="card-text d-inline-block ms-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                          <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                          <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                        </svg>
                        
                        <small class="text-muted">منذ ساعتين</small>
                        </p>
                        <button type="button" class="btn btn-success d-block">تفاصيل اكثر</button>
                      </div>
                    </div>
                  </div>
                </div>

                
               </div>



               <div class="col-12 col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="unver.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title"> وظيفة إدارية بمجال خدمة العملاء </h5>
                        <p class="card-text">السعد للمقاولات العامة المحدوده</p>
                        <p class="card-text d-inline-block"> 
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                          </svg>
                          <small class="text-muted">وقت كامل</small>
                        </p>
                        <p class="card-text d-inline-block ms-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                          <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                          <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                        </svg>
                        
                        <small class="text-muted">منذ ساعتين</small>
                        </p>
                        <button type="button" class="btn btn-success d-block">تفاصيل اكثر</button>
                      </div>
                    </div>
                  </div>
                </div>

                
               </div>


               <div class="col-12 col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="unver.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title"> وظيفة إدارية بمجال خدمة العملاء </h5>
                        <p class="card-text">السعد للمقاولات العامة المحدوده</p>
                        <p class="card-text d-inline-block"> 
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                          </svg>
                          <small class="text-muted">وقت كامل</small>
                        </p>
                        <p class="card-text d-inline-block ms-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                          <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                          <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                        </svg>
                        
                        <small class="text-muted">منذ ساعتين</small>
                        </p>
                        <button type="button" class="btn btn-success d-block">تفاصيل اكثر</button>
                      </div>
                    </div>
                  </div>
                </div>

                
               </div>
                 
                 

            </div>

         </div>

     end show the latest jops-->

     <!--start the condidates newes-->

     <div class="container">
       <div class="row">
         <p class="h4 text-center"> المتقدمين الجدد</p>
        <div class="shadow  col-12 col-md-3 p-3 mb-5 bg-body rounded"> <!--start person-->
              
          <div class="card" style=>
            <img src="assets/images/canper.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">سفيان الراجحي</h5>
              <p class="card-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg> 
                <small class="text-mutid"> اليمن -تعز</small>
              </p>
              <p class="card-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              </svg>
              <small class="text-mutid">مدير مبيعات</small>
            </p>
            <div class="action text-center">
              <a href="#" class="btn btn-primary">البروفايل </a>
              <a href="#" class="btn btn-primary text-center mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                </svg>
                <small class="">CV</small>
                 </a>
                 </div>
            </div>
          </div>
           
          </div> <!--end person-->

          <div class="shadow col-12 col-md-3 p-3 mb-5 bg-body rounded"> <!--start person-->
              
            <div class="card" >
              <img src="assets/images/canper4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">سفيان الراجحي</h5>
                <p class="card-text">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg> 
                  <small class="text-mutid"> اليمن -تعز</small>
                </p>
                <p class="card-text">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                </svg>
                <small class="text-mutid">مدير مبيعات</small>
              </p>
              <div class="action text-center">
                <a href="#" class="btn btn-primary">البروفايل </a>
                <a href="#" class="btn btn-primary text-center mx-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                  </svg>
                  <small class="">CV</small>
                   </a>
                   </div>
              </div>
            </div>
             
            </div> <!--end person-->

            <div class="shadow col-12 col-md-3 p-3 mb-5 bg-body rounded"> <!--start person-->
              
              <div class="card">
                <img src="assets/images/canper3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">سفيان الراجحي</h5>
                  <p class="card-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                      <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                      <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg> 
                    <small class="text-mutid"> اليمن -تعز</small>
                  </p>
                  <p class="card-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                  </svg>
                  <small class="text-mutid">مدير مبيعات</small>
                </p>
                <div class="action text-center">
                  <a href="#" class="btn btn-primary">البروفايل </a>
                  <a href="#" class="btn btn-primary text-center mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                    </svg>
                    <small class="">CV</small>
                     </a>
                     </div>
                </div>
              </div>
               
              </div> <!--end person-->
              <div class="shadow col-12 col-lg-3 p-3 mb-5 bg-body rounded"> <!--start person-->
              
                <div class="card">
                  <img src="assets/images/canper2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">سفيان الراجحي</h5>
                    <p class="card-text">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                      </svg> 
                      <small class="text-mutid"> اليمن -تعز</small>
                    </p>
                    <p class="card-text">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                      <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                    <small class="text-mutid">مدير مبيعات</small>
                  </p>
                  <div class="action text-center">
                    <a href="#" class="btn btn-primary">البروفايل </a>
                    <a href="#" class="btn btn-primary text-center mx-auto">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                      </svg>
                      <small class="">CV</small>
                       </a>
                       </div>
                  </div>
                </div>
                 
                </div> <!--end person-->

       </div>
     </div>


     <!--strat our company relasionship -->
     <p class="h4 text-center mt-5">شركائنا</p>
     <div id="carouselExampleIndicators" class="carousel slide py-5  mb-5 text-center" style="background-color:rgb(0 0 0 / 50%) ;" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        
      </div>
      <div class="carousel-inner">
    
        <div class="carousel-item active">
          <div class="row" style="flex-wrap: nowrap;">
            <div class="col-4">
              
                <a href="/w3assets/images/nature.jpg" target="_blank">
                  <img src="assets/images/comlogo2.png" class="h-100 img-fluid img-thumbnail" alt="Nature" >
                  
                </a>
            
            </div>
            <div class="col-4">
             
                <a href="/w3assets/images/nature.jpg" target="_blank">
                  <img src="assets/images/comlogo1.png" class="h-100 img-fluid img-thumbnail" alt="Nature" >
                
                </a>
              
            </div>
    
            <div class="col-4">
              
                <a href="/w3assets/images/nature.jpg" target="_blank">
                  <img src="assets/images/comlogo6.png" class="h-100 img-fluid img-thumbnail" alt="Nature" >
                  
                </a>
              
            </div>
            </div><!--end row-->
        </div>
        <div class="carousel-item"> 
          <div class="row" style="flex-wrap: nowrap;">
          <div class="col-4">
            
              <a href="/w3assets/images/nature.jpg" target="_blank">
                <img src="assets/images/comlogo5.jpg" class="h-100 img-fluid img-thumbnail" alt="Nature" >
            
                  
                
              </a>
            </div>
          
  
  
          <div class="col-4 ">
            
              <a href="/w3assets/images/nature.jpg" target="_blank">
                <img src="assets/images/comlogo4.png" class="h-100 img-fluid img-thumbnail" alt="Nature" >
                
                  
            
              </a>
            </div>
          
  
          <div class="col-4 ">
            
              <a href="/w3assets/images/fjords.jpg" target="_blank">
                <img src="assets/images/comlogo1.png" class="h-100 img-fluid img-thumbnail" alt="Nature" >
              
              </a>
            
          </div>
        </div>
        </div> <!--end row-->
      </div>
     
    </div>

    <!--
     <div class="container mb-4 mt-3">
      <h2 class="text-center"> شركائنا </h2>
      
      <div class="row">
        <div class="col-md-4 col-sm-2 shadow bg-body rounded">
          <div class="thumbnail">
            <a href="/w3assets/images/lights.jpg" target="_blank">
              <img src="assets/images/comlogo6.png" class="img-fluid img-thumbnail" alt="Nature" >
              <div class="caption">
                
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4 col-sm-2">
          <div class="thumbnail">
            <a href="/w3assets/images/nature.jpg" target="_blank">
              <img src="assets/images/comlogo1.png" class="img-fluid img-thumbnail" alt="Nature" >
              <div class="caption">
                
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-4 col-sm-2">
          <div class="thumbnail">
            <a href="/w3assets/images/nature.jpg" target="_blank">
              <img src="assets/images/comlogo6.png" class="img-fluid img-thumbnail" alt="Nature" >
              <div class="caption">
                
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-4 col-sm-2">
          <div class="thumbnail">
            <a href="/w3assets/images/nature.jpg" target="_blank">
              <img src="assets/images/comlogo5.jpg" class="img-fluid img-thumbnail" alt="Nature" >
              <div class="caption">
                
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-4 col-sm-2">
          <div class="thumbnail">
            <a href="/w3assets/images/nature.jpg" target="_blank">
              <img src="assets/images/comlogo4.png" class="img-fluid img-thumbnail" alt="Nature" >
              <div class="caption">
                
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-4 col-sm-2">
          <div class="thumbnail">
            <a href="/w3assets/images/fjords.jpg" target="_blank">
              <img src="assets/images/comlogo1.png" class="img-fluid img-thumbnail" alt="Nature" >
              <div class="caption">
               
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    

       end our company relasionship -->

      
       <!-- Footer -->





       
       
       

     


      
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    

@endsection