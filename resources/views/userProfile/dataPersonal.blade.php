
@extends('layout.userProfile.menu')
@section('content')
                        
                        <div class="col-12">

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
                              


                        </div>

@endsection

