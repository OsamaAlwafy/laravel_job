
@extends('userProfile.profile')
@section('content')

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

                        @endsection