

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
              <a class="nav-link active " style="color: white; font-weight: bold;"  aria-current="page" href="/">الرئسية</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" style="color: white; font-weight: bold;" href='/jobs'>الوظائف</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: white; font-weight: bold;" href="#">الخدمات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="color: white; font-weight: bold;" href="#" tabindex="-1" aria-disabled="true">الشركاء والشركات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  style="color: white; font-weight: bold;" href="/about">من نحن</a>
            </li>

            <li class="nav-item"> 
              <a class="nav-link" style="color: white; font-weight: bold;" href="/contact">تواصل معنا</a>
            </li>
          
            <li class="nav-item position-lg-absolute">
              <a class="nav-link active ms-2 " style=" color: white; font-weight: bold;" aria-current="page" href="/profile">تسجيل الدخول</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" style="color: white; font-weight: bold;" aria-current="page" href="/profile"> انشاء حساب</a>
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
    


    
    