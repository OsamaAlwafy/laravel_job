<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('assets/css/auth/auth.css') }}>
    <title>تسجيل الدخول</title>
</head>
<body>

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 class="text-center">انشاء حساب</h3>
                        <p class="text-center">قم بتعبية البيانات التالية</p>
                        @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                    <form class="" method="POST" action="{{route('register')}}">
                     @csrf
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="الاسم" required>
                               <div class="valid-feedback">Username field is valid!</div>
                               <div class="invalid-feedback">Username field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="الايميل" required>
                                 <div class="valid-feedback">Email field is valid!</div>
                                 <div class="invalid-feedback">Email field cannot be blank!</div>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="password" name="password" placeholder="كلمة المرور" required>
                                
                             </div>
                             <div class="col-md-12">
                                <input class="form-control" type="password" name="comfirm_password" placeholder="تاكيد كلمة المرور" required>
                                
                             </div>
    

                           <div class="col-md-12">
                                <select name="type" class="form-select mt-3" required>
                                      <option selected disabled value="">نوع المستخدم</option>
                                      <option value="1">شركة</option>
                                      <option value="0">مستخدم</option>
                                    
                               </select>
                                <div class="valid-feedback">You selected a position!</div>
                                <div class="invalid-feedback">Please select a position!</div>
                           </div>


                          

                           
                      
                  

                            <div class="form-button mt-3 text-center">
                                <button id="submit" type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>