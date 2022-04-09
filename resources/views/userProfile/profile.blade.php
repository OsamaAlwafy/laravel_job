<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS   "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"   integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous" -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>

<body>
 
      <!-- vertical menu -->
     <div class="container-fluid">
        <div class="row">

              <div  class="col-12 col-md-3 navbar navbar-expand-sm bg-dark navbar-dark text-center d-block " style="background-color: #1d1d35;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                 <div> 
                <div class="container-image-pro position-relative">
                <img src="assets/images/canper4.jpg" class=" d-block mx-auto pt-2 rounded" width="150"class="img-thumbnail rounded-circle" alt="...">
                <svg xmlns="http://www.w3.org/2000/svg" style="color: white; position:absolute; botton:1px" width="22" height="22" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                  <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                  <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                </svg>
                </div>  

                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                  
                    <div class="container-fluid "  style="background-color: inherit;">
                      <ul class="navbar-nav nav flex-column ">
                        <li class="nav-item">
                          <a class="nav-link disabled" >تسجيل الدخول</a>
                        </li>
                        <li class="nav-item ">
                         <a  style="background-color:#1d1d35; color:white" href="{{ url('/dataPerson') }}" class=" active border-0 mb-1"  role="tab" aria-controls="nav-home" aria-selected="true">البيانات الشخصية</a>
                        </li>

                        <li class="nav-item">
                        <a  style="background-color:#1d1d35; color:white" href="{{ url('/skill') }}" class=" active border-0 m-1"  role="tab" aria-controls="nav-home" aria-selected="true"> المهارات</a>
                        </li>
                        <li class="nav-item">
                        <a  style="background-color:#1d1d35; color:white" href="{{ url('/pre_work') }}" class="active border-0 m-1"  role="tab" aria-controls="nav-home" aria-selected="true"> الاعمال السابقة</a>
                        </li>

                        <li class="nav-item">
                        <a  style="background-color:#1d1d35; color:white" href="{{ url('/qualifications') }}" class=" active border-0 m-1"  role="tab" aria-controls="nav-home" aria-selected="true"> الموهلات والدورات</a>
                        </li>

                        <li class="nav-item">
                        <a  style="background-color:#1d1d35; color:white" href="{{ url('/experience') }}" class="active border-0 m-1"  role="tab" aria-controls="nav-home" aria-selected="true"> الخبرة</a>
                  
                        </li>

                       
                        <li class="nav-item">
                          <button  style="background-color:#1d1d35; color:white" class="border-0 m-1" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-qualifications" type="button" role="tab" aria-controls="nav-home" aria-selected="true">تسجيل الخروج</button>
                        </li>

                      </ul>
                    </div>
                    
                    
                  </nav>
                  </div>
                  </div>

              </div>
              <div class="backgroud-profile col-md-9 col-12  mt-1">
                  <img src="assets/images/bkpro.jpg"  class="d-none d-md-block"style="width: 100%; height: 200px;">

              
                


              
                <div class="tab-content col-12 mx-auto m-1" >

                         

                      <div class="container">
                          
                            <div class="row">
                            
                            </div>

                        
                        <!-- <div class="col-12">

                            <form onsubmit=" false">
                                <div class="mb-3 mt-3">
                                  <label for="email" class="form-label">الاسم</label>
                                  <input type="email" class="form-control data-persone" id="email" placeholder="ادخل الاسم"value=" اسامة محفوظ " name="email" readonly>
                                </div>

                                <div class="mb-3 mt-3">
                                  <label for="email" class="form-label data-persone">الايميل</label>
                                  <input type="email" class="form-control" id="email" placeholder="ادخل الايميل" value="alwafy0516@gmail.com" name="email" readonly>
                                </div>
                                <div class="mb-3">
                                  <label for="pwd" class="form-label">كلمة السر</label>
                                  <input type="password" class="form-control data-persone" id="pwd" placeholder="ادخل كلمة السر" value="1223455" name="pswd" readonly>
                                </div>
                                
                                <button  class="btn btn-primary" id="update-data">تعديل </button>
                                <button type="text" class="btn btn-primary " id="save-data" disabled>حفظ  </button>
                              </form>
                              


                        </div> -->
                        @yield('content');
                          

                    </div><!--end the container the data personal-->
                    </div>
                    </div>
           
                   
                    
                    
                    <div class=" col-12 col-md-8 mt-3 mx-auto mp-2 tab-pane fade position-relative"  id="nav-skill" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <small class="text-muted">اضافة مهاراة</small>
                      <svg  data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" xmlns="http://www.w3.org/2000/svg" style="position: absolute" width="30" height="30" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                      </svg>
                      <div class="collapse my-2 col-12" id="collapseExample">
                        <div class="card card-body">
                          <div class="mb-3">
                            <label for="exampleFormControlInput1"  class="form-label">اسم المهاراه</label>
                            <input type="email"  class="form-control" id="name-skill" placeholder="اسم المهاراه">
                          </div>

                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"> نسبة المهاراه %</label>
                            <input type="range" class="form-range" min="0" max="100" step="0.5" id="customRange3">
                          </div>
                         
                          <div class="mb-3">
                          
                            <button type="button" class="btn btn-success" id="add-skill">حفظ</button>
                          </div>

                        </div>
                      </div>
               
                      
                     
                      <div class="shadow p-3 mb-2 bg-body rounded mt-2  " >  
                      <div class="row">
                        
                       
                          <div class="col-2">
                                   تصميم انظمة
                          </div>
                          <div class="col-6">
                              <div class="progress" style="height: 3px;">
                                  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress" style="height: 20px;">
                                  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                          </div>
                          <div class="col-4">
                                    
                                  <small class="text-muted">حفظ</small>
                                  <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                      <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                    </svg>
                                   <span class="d-inline-block ms-1">حذف</span>
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                    
                                    <span class="d-inline-block ms-1">تعديل</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
                                      <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                                    </svg>


                                    
                                </div>
                          </div>
                          </div>
                       



                      
                          <div class="shadow  mb-2 p-3  bg-body rounded">  
                          <div class="row">
                            
                           
                              <div class="col-2">
                                       تصميم انظمة
                              </div>
                              <div class="col-6">
                                  <div class="progress" style="height: 3px;">
                                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress" style="height: 20px;">
                                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                              </div>
                              <div class="col-4">
                                        
                                      <small class="text-muted">حفظ</small>
                                      <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                          <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                        </svg>
                                       <span class="d-inline-block ms-1">حذف</span>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                        
                                        <span class="d-inline-block ms-1">تعديل</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
                                          <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                                        </svg>


                                        
                                    </div>
                              </div>
                              </div>
                          


                        
                              <div class="shadow p-3 mb-2 bg-body rounded">  
                              <div class="row">
                                
                               
                                  <div class="col-2">
                                           تصميم انظمة
                                  </div>
                                  <div class="col-6">
                                      <div class="progress" style="height: 3px;">
                                          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress" style="height: 20px;">
                                          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                  </div>
                                  <div class="col-4">
                                            
                                          <small class="text-muted">حفظ</small>
                                          <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                              <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                            </svg>
                                           <span class="d-inline-block ms-1">حذف</span>
                                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                            
                                            <span class="d-inline-block ms-1">تعديل</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
                                              <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                                            </svg>


                                            
                                        </div>
                                  </div>
                                  </div>
                             

                            
                                  <div class="shadow p-3 mb-2  bg-body rounded">  
                                  <div class="row">
                                    
                                   
                                      <div class="col-2">
                                               تصميم انظمة
                                      </div>
                                      <div class="col-6">
                                          <div class="progress" style="height: 3px;">
                                              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress" style="height: 20px;">
                                              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                      </div>
                                      <div class="col-4">
                                                
                                              <small class="text-muted">حفظ</small>
                                              <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                                  <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                                </svg>
                                               <span class="d-inline-block ms-1">حذف</span>
                                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                                
                                                <span class="d-inline-block ms-1">تعديل</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
                                                  <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                                                </svg>
  
  
                                                
                                            </div>
                                      </div>
                                      </div>
                                  

                                  
                                      <div class="shadow p-3 mb-2  bg-body rounded">  
                                      <div class="row">
                                        
                                       
                                          <div class="col-2">
                                                   تصميم انظمة
                                          </div>
                                          <div class="col-6">
                                              <div class="progress" style="height: 3px;">
                                                  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress" style="height: 20px;">
                                                  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                </div>
                                          </div>
                                          <div class="col-4">
                                                    
                                                  <small class="text-muted">حفظ</small>
                                                  <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                                      <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                                    </svg>
                                                   <span class="d-inline-block ms-1">حذف</span>
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                    </svg>
                                                    
                                                    <span class="d-inline-block ms-1">تعديل</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
                                                      <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                                                    </svg>
      
      
                                                    
                                                </div>
                                          </div>
                                          </div>
                                   
                                     

                                        
                                 
                                 
                       
                      


                  </div> <!--end the skill-->

                  <div class=" col-12 mt-3 mp-2 tab-pane fade position-relative"  id="nav-exprience" role="tabpanel" aria-labelledby="nav-profile-tab">
                       <p class="h4 text-center">الخبرات السابقة</p>

                       <small class="text-muted">اضافة مهاراة</small>
                       <svg  data-bs-toggle="collapse" href="#experienc" role="button" aria-expanded="false" aria-controls="collapseExample" xmlns="http://www.w3.org/2000/svg" style="position: absolute" width="30" height="30" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                         <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                       </svg>
                       <div class="collapse my-2 col-12 w-50 mx-auto" id="experienc">
                         <div class="card card-body">
                           <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">اسم الخبره</label>
                             <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="جافا">
                           </div>
 
                           <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">  مدة الخبرة</label>
                             <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder=" 2015-2018">
                           </div>

                           <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">شرح موجز </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="شرح موجز">
                          </div>
                          
                           <div class="mb-3">
                           
                             <button type="button" class="btn btn-success">حفظ</button>
                           </div>
 
                         </div>
                       </div>
                       
                          <div class=" border-end w-50 mx-auto  border-primary  text-center py-2 px-1 mt-5 mb-2">
                             <p class="h5 ">مطور تطبيقات الويب  <span class="text-muted me-5 "> 2016-2019</span> </p>
                             <p class="text-muted ">
                                مطور ويب عملت اكثر من خمس سنوات في عدد من الشركات والعمل الحرر 
                             </p>
                          </div>

                          <div class=" border-end w-50 mx-auto  border-primary  text-center py-2 px-1 mt-5 mb-2">
                            <p class="h5 ">مطور تطبيقات الويب  <span class="text-muted me-5 "> 2016-2019</span> </p>
                            <p class="text-muted ">
                               مطور ويب عملت اكثر من خمس سنوات في عدد من الشركات والعمل الحرر 
                            </p>
                         </div>

                         <div class=" border-end w-50 mx-auto  border-primary  text-center py-2 px-1 mt-5 mb-2">
                          <p class="h5 ">مطور تطبيقات الويب  <span class="text-muted me-5 "> 2016-2019</span> </p>
                          <p class="text-muted ">
                             مطور ويب عملت اكثر من خمس سنوات في عدد من الشركات والعمل الحرر 
                          </p>
                       </div>
                       
                      

                    </div> <!--end exprience-->
                  <!--start work previous-->
                  
                  <div class=" col-12 mt-3 mp-2 tab-pane fade position-relative"  id="nav-previous-work" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row mx-auto">
                    <div class="shadow col-12 col-md-6 col-lg-4 text-center p-3 mb-5 bg-body rounded"> <!--start person-->
              
                        <div class="card">
                          <img src="assets/images/pervious.jpg" class="card-img-top img-fluid" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-center">نظام برمجيات </h5>
                            
                          <div class="action text-center mt-4">
                           
                            <a href="#" class="btn btn-primary text-center mx-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                              </svg>
                              <small class="">الانتقال</small>
                               </a>
                               </div>
                          </div>
                        </div>
                         
                        </div> <!--end person-->

                        <div class="shadow col-12 col-md-6 col-lg-4 text-center p-3 mb-5 bg-body rounded"> <!--start person-->
              
                          <div class="card">
                            <img src="assets/images/pervious.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                              <h5 class="card-title text-center">نظام برمجيات </h5>
                              
                            <div class="action text-center mt-4">
                             
                              <a href="#" class="btn btn-primary text-center mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                                <small class="">الانتقال</small>
                                 </a>
                                 </div>
                            </div>
                          </div>
                           
                          </div> <!--end person-->


                          <div class="shadow col-12 col-md-6 col-lg-4 text-center p-3 mb-5 bg-body rounded"> <!--start person-->
              
                            <div class="card">
                              <img src="assets/images/pervious.jpg" class="card-img-top img-fluid" alt="...">
                              <div class="card-body">
                                <h5 class="card-title text-center">نظام برمجيات </h5>
                                
                              <div class="action text-center mt-4">
                               
                                <a href="#" class="btn btn-primary text-center mx-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                  </svg>
                                  <small class="">الانتقال</small>
                                   </a>
                                   </div>
                              </div>
                            </div>
                             
                            </div> <!--end person-->
                        </div> <!--end row previuos work-->

                        
                    </div>  

                     <!--start qualifications-->
                    <div class=" col-12 mt-3 mp-2 tab-pane fade position-relative"  id="nav-qualifications" role="tabpanel" aria-labelledby="nav-profile-tab">
                    
                         
                        <!-- الموهلات -->
                        <p class="h4 text-center mb-5"> الموهلات</p>
                        <small class="text-muted">اضافة مهاراة</small>
                       <svg  data-bs-toggle="collapse" href="#experienc" role="button" aria-expanded="false" aria-controls="collapseExample" xmlns="http://www.w3.org/2000/svg" style="position: absolute" width="30" height="30" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                         <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                       </svg>
                       <div class="collapse my-2 col-12 w-50 mx-auto" id="experienc">
                         <div class="card card-body">
                           <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">اسم الموهل</label>
                             <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="جافا">
                           </div>
 
                           <div class="mb-3">
                             <label for="exampleFormControlInput1" class="form-label">  سنة التاهيل</label>
                             <input type="text" class="form-control"  id="exampleFormControlInput1" placeholder=" 2015-2018">
                           </div>

                           <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"> مكان التاهيل </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="شرح موجز">
                          </div>
                          
                           <div class="mb-3">
                           
                             <button type="button" class="btn btn-success">حفظ</button>
                           </div>
 
                         </div>
                       </div>


                        <div class="mt-4 w-50 mx-auto" >
                          <ul class="nav flex-column">
                            <li class="nav-item h5 border-end border-primary px-2 mb-3">
                              بكالوريوس <small class="text-muted me-5">2009</small>
                              <p class="text-muted"> خريج جامعة تعز  </p>
                            </li>
                            <li class="nav-item h5 border-end border-primary mb-3 px-2">
                              بكالوريوس <small class="text-muted me-5">2009</small>
                              <p class="text-muted"> خريج جامعة تعز  </p>
                            </li>
                            <li class="nav-item h5 border-end border-primary px-2">
                              بكالوريوس <small class="text-muted me-5">2009</small>
                              <p class="text-muted"> خريج جامعة تعز  </p>
                            
                          </ul>

                        </div>
                        


                      </div> <!--end the qualifications-->


                  </div> <!--end background and skill container-->
                  </div>


                    </div><!--end row that hold all tap content-->

                    </div><!--end container that hold all page-->
                    

              
              <!--

              <div class="col-8">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">البيانات الشخصية</button>
                      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">المهارات</button>
                      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">الخبرات</button>
                      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-dorat" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">الموهلات والدورات</button>
                    </div>
                  </nav>

                  
                 <div class="container-fluid">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                             image profile personals

                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="assets/images/perprofile.jpg" class="img-fluid rounded mx-auto d-block" alt="">
                                    </div>
                                </div>

                            </div>
                            <div class="col-12">

                                <form action="/action_page.php">
                                    <div class="mb-3 mt-3">
                                      <label for="email" class="form-label">الاسم</label>
                                      <input type="email" class="form-control" id="email" placeholder="ادخل الاسم"value=" اسامة محفوظ " name="email" readonly>
                                    </div>

                                    <div class="mb-3 mt-3">
                                      <label for="email" class="form-label">الايميل</label>
                                      <input type="email" class="form-control" id="email" placeholder="ادخل الايميل" value="alwafy0516@gmail.com" name="email" readonly>
                                    </div>
                                    <div class="mb-3">
                                      <label for="pwd" class="form-label">كلمة السر</label>
                                      <input type="password" class="form-control" id="pwd" placeholder="ادخل كلمة السر" value="1223455" name="pswd" readonly>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">تعديل </button>
                                    <button type="text" class="btn btn-primary " disabled>حفظ  </button>
                                  </form>
                                  


                            </div>
                              

                        </div>
                        
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        
                            <div class="container-fluid mt-3 mp-2">
                                <div class="shadow p-3 mb-5 bg-body rounded">  
                                <div class="row">
                                  
                                 
                                    <div class="col-2">
                                             تصميم انظمة
                                    </div>
                                    <div class="col-6">
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <div class="progress" style="height: 20px;">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                          </div>
                                    </div>
                                    <div class="col-4">
                                              
                                            <small class="text-muted">حفظ</small>
                                            <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                                <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                              </svg>
                                             <span class="d-inline-block ms-1">حذف</span>
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                              </svg>
                                              
                                              <span class="d-inline-block ms-1">تعديل</span>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
                                                <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                                              </svg>


                                              
                                          </div>
                                    </div>
                                    </div>
                                </div> 



                                <div class="container-fluid mt-3 mp-2">
                                    <div class="shadow p-3 mb-5 bg-body rounded">  
                                    <div class="row">
                                      
                                     
                                        <div class="col-2">
                                                 تصميم انظمة
                                        </div>
                                        <div class="col-6">
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                              <div class="progress" style="height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                              </div>
                                        </div>
                                        <div class="col-4">
                                                  
                                                <small class="text-muted">حفظ</small>
                                                <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                                    <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                                  </svg>
                                                 <span class="d-inline-block ms-1">حذف</span>
                                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                  </svg>
                                                  
                                                  <span class="d-inline-block ms-1">تعديل</span>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
                                                    <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                                                  </svg>
    
    
                                                  
                                              </div>
                                        </div>
                                        </div>
                                    </div> 


                                    <div class="container-fluid mt-3 mp-2">
                                        <div class="shadow p-3 mb-5 bg-body rounded">  
                                        <div class="row">
                                          
                                         
                                            <div class="col-2">
                                                     تصميم انظمة
                                            </div>
                                            <div class="col-6">
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                  </div>
                                                  <div class="progress" style="height: 20px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                  </div>
                                            </div>
                                            <div class="col-4">
                                                      
                                                    <small class="text-muted">حفظ</small>
                                                    <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                                        <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                                      </svg>
                                                     <span class="d-inline-block ms-1">حذف</span>
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                      </svg>
                                                      
                                                      <span class="d-inline-block ms-1">تعديل</span>
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
                                                        <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                                                      </svg>
        
        
                                                      
                                                  </div>
                                            </div>
                                            </div>
                                        </div> 

                                        <div class="container-fluid mt-3 mp-2">
                                            <div class="shadow p-3 mb-5 bg-body rounded">  
                                            <div class="row">
                                              
                                             
                                                <div class="col-2">
                                                         تصميم انظمة
                                                </div>
                                                <div class="col-6">
                                                    <div class="progress" style="height: 3px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                      </div>
                                                      <div class="progress" style="height: 20px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                      </div>
                                                </div>
                                                <div class="col-4">
                                                          
                                                        <small class="text-muted">حفظ</small>
                                                        <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                                            <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                                          </svg>
                                                         <span class="d-inline-block ms-1">حذف</span>
                                                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                          </svg>
                                                          
                                                          <span class="d-inline-block ms-1">تعديل</span>
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
                                                            <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                                                          </svg>
            
            
                                                          
                                                      </div>
                                                </div>
                                                </div>
                                            </div> 

                                            <div class="container-fluid mt-3 mp-2">
                                                <div class="shadow p-3 mb-5 bg-body rounded">  
                                                <div class="row">
                                                  
                                                 
                                                    <div class="col-2">
                                                             تصميم انظمة
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="progress" style="height: 3px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                          </div>
                                                          <div class="progress" style="height: 20px;">
                                                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                          </div>
                                                    </div>
                                                    <div class="col-4">
                                                              
                                                            <small class="text-muted">حفظ</small>
                                                            <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                                                <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                                              </svg>
                                                             <span class="d-inline-block ms-1">حذف</span>
                                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                              </svg>
                                                              
                                                              <span class="d-inline-block ms-1">تعديل</span>
                                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
                                                                <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                                                              </svg>
                
                
                                                              
                                                          </div>
                                                    </div>
                                                    </div>
                                                </div> 
                                 
                                


                            </div> 
                            end tap skill
                             
                        
                        
                        
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">




                        </div>
                        <div class="tab-pane fade mt-2" id="nav-dorat" role="tabpanel" aria-labelledby="nav-contact-tab">

                           <div class="container">
                               <div class="row">
                                   <div class="col-12 col-md-6 col-4">
                                      
                                    <div class="card" style="width: 18rem;">
                               
                                        <div class="card-body">
                                          <h5 class="card-title">المهارات </h5>
                                           <img src="unver.jpeg">
                                          <p class="card-text"> مطور تطبيقات جوال</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <h5 class="card-title">اكتساب المهاراه</h5>
                                          <li class="list-group-item">تطبيقي خلال المرحلة الدراسية </li>
                                          <li class="list-group-item">مشاركة في ندوات </li>
                                          <li class="list-group-item">العمل التطوعي</li>
                                        </ul>
                                        <div class="card-body">
                                          <a href="#" class="card-link">عرض اعمالي</a>
                                          
                                        </div>
                                      </div>
                                   </div> end column
                                  
                               </div> end row

                           </div>
                              

                        </div>

                      </div>

                 </div>

                

                
            </div>


        </div>
      

     </div>
   
         
       
      end vertical men



























  






   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper    https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/profile.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>




