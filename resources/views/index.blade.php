
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

    <!---navbar-->
     <div class="container-fluid">
      <div class="row " style="background-color: #1d1d35;">
       

     <div class="col-6 col-lg-10">     
    <nav class=" navbar navbar-expand-lg navbar-light" style="background-color: #1d1d35;">
      <div class="container-fluid">
       

      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse  navbar-collapse" id="navbarNav">
          <ul class="navbar-nav p-0 w-100 position-lg-relative">
            <li class="nav-item">
              <a class="nav-link active " style="color: white; font-weight: bold;"  aria-current="page" href="#">الرئسية</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" style="color: white; font-weight: bold;" href="jops.html">الوظائف</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: white; font-weight: bold;" href="#">الخدمات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="color: white; font-weight: bold;" href="#" tabindex="-1" aria-disabled="true">الشركاء والشركات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  style="color: white; font-weight: bold;" href="about.html">من نحن</a>
            </li>

            <li class="nav-item"> 
              <a class="nav-link" style="color: white; font-weight: bold;" href="contact.html">تواصل معنا</a>
            </li>
          
            <li class="nav-item position-lg-absolute">
              <a class="nav-link active ms-2 " style=" color: white; font-weight: bold;" aria-current="page" href="profile.html">تسجيل الدخول</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" style="color: white; font-weight: bold;" aria-current="page" href="profile.html"> انشاء حساب</a>
            </li>
           
            
         <!--     
        <svg xmlns="http://www.w3.org/2000/svg" style="color: white;" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
        </svg>
      -->
       
       
       <!--  
          <svg xmlns="http://www.w3.org/2000/svg" style="color: white;" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
          </svg>
        -->
          
            

          </ul>
           <div>
             
           </div>
        </div>
      </div>
      
    </nav>
    </div>
    <div class="col-6 col-lg-2 text-start">
      <a class="navbar-brand   " href="#"><img class="ms-2" src="assets/images/logo.png"></a>
      </div>  
    </div>
  </div>
             
    <!--end navbar-->
   <!--start model login -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">اشترك معنا</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">الاسم:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">الايميل:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>

            <div class="mb-3">
              <label for="message-text" class="col-form-label">كلمة السر:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" style="width: 100%;" class="btn btn-light"><a href="profile.html"> ارسال</a></button>
        </div>
      </div>
    </div>
  </div>

   <!--end modul login -->

    <!--start model sing up -->
    <div class="modal fade" id="sign-up" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel"> تسجيل الدخول</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">الاسم:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              
  
              <div class="mb-3">
                <label for="message-text" class="col-form-label">كلمة السر:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" style="width: 100%;" class="btn btn-light"><a href="profile.html"> ارسال</a></button>
          </div>
        </div>

        
      </div>
    </div>
  
     <!--end modul sing up-->
<!-- dgg
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        Indicators/dots
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
        
         The slideshow/carousel
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/assets/images/img1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>We had such a great time in LA!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/assets/images/img2.jpg" alt="Chicago" class="d-block" style="width:100%">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div> 
          </div>
          <div class="carousel-item">
            <img src="assets/assets/images/img1.jpg" alt="New York" class="d-block" style="width:100%">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>  
          </div>
        </div>
        
         Left and right controls/icons
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
      -->

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
       
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">

        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg>
      </a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
          <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
        </svg></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </svg></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
          <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
        </svg></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
        </svg></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>سجل ليصلك كل جديد</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
            
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              تسجيل
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    
    <!-- Section: Text -->

    <!-- Section: Links -->
   
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  
    <a class="text-white text-muted text-decoration-none" href="https://github.com/OsamaAlwafy"> Osama Alwafy</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

     


      
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>