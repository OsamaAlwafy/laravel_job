<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href={{ asset('assets/css/plugins/themify-icons/themify-icons.css') }}>
    
  
    <!-- Main Stylesheet -->
    <link href={{ asset('assets/css/css/style.css') }} rel="stylesheet">
</head>
<body>
    <section class="page-title-alt bg-primary position-relative">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="text-white font-tertiary">About Me</h1>
            </div>
          </div>
        </div>
        <!-- background shapes -->
        <img src={{ asset('assets/images/images/illustrations/leaf-bg-top.png') }} alt="illustrations" class="bg-shape-1 w-100">
        <img src={{ asset('assets/images/images/illustrations/dots-group-sm.png') }} alt="illustrations" class="bg-shape-2">
        <img src={{ asset('assets/images/images/illustrations/leaf-yellow.png') }} alt="illustrations" class="bg-shape-3">
        <img src={{ asset('assets/images/images/illustrations/leaf-orange.png') }} alt="illustrations" class="bg-shape-4">
        <img src={{ asset('assets/images/images/illustrations/dots-group-cyan.png') }} alt="illustrations" class="bg-shape-5">
        <img src={{ asset('assets/images/images/illustrations/leaf-cyan-lg.png') }} alt="illustrations" class="bg-shape-6">
      </section>
      <section class="section pt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
            <p>{{$userData->describe}}</p>
            </div>
            <div class="col-md-4 text-center drag-lg-top">
              <div class="shadow-down mb-4">
                <img src={{ asset('assets/images/images/about/author.jpg') }} alt="author" class="img-fluid w-100 rounded-lg border-thick border-white">
              </div>
              <img src={{ asset('assets/images/images/about/signature.png') }} alt="signature" class="img-fluid">
              <h4>{{$userData->name}}</h4>
            </div>
          </div>
        </div>
      </section>

<!-- skills -->
<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Skills</h2>
        </div>
        @forelse ($userData->skill as $userSkill )
          
       
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">

          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#fdb157">
            <div class="wave" data-progress={{$userSkill->rate}}"%"></div>
            </div>
            <div class="card-footer bg-white">
            <h4 class="card-title">{{$userSkill->name}} ({{$userSkill->rate}})</h4>
            </div>
          </div>
          @empty
          <div class="alert alert-danger" role="alert">{{$userData->name}} لا يوجد مهارات لدي المستخدم </div>
        </div>
        
        @endforelse
      </div>
    </div>
  </section>
  <!-- /skills -->
  <section class="section">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Experience</h2>
        </div>
        @forelse ($userData->experience as $userExperience )
        <div class="col-lg-3 col-md-4 text-center">
          <img src={{ asset('assets/images/images/experience/icon-1.png') }} alt="icon">
        <p class="mb-0"> {{$userExperience->start_date}}- {{$userExperience->end_date}}</p>
          <h4>{{$userExperience->name}}</h4>
          <h6 class="text-light"><a href="{{$userExperience->campany_url}}"> {{$userExperience->campany_name}}</a></h6>
        </div>  
        @empty
        <div class="alert alert-danger" role="alert"> {{$userData->name}} لا يوجد خبر لدي المستخدم </div>
        @endforelse
      </div>
    </div>
  </section>

  <!-- education -->
<section class="section position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Education</h2>
        </div>
        @forelse ($userData->qualification as $userQualification )
        <div class="col-lg-6 col-md-6 mb-80">
          <div class="d-flex">
            <div class="mr-lg-5 mr-3">
              <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
            </div>
            <div>
            <p class="text-dark mb-1">{{$userQualification->date}}</p>
              <h4>Marters in UX Design</h4>
            <p class="mb-0 text-light">{{$userQualification->describe}}</p>
            </div>
          </div>
        </div>
        @empty
        <div class="alert alert-danger" role="alert">{{$userData->name}} لا يوجد لدية موهلات تعلمية</div>
        @endforelse
       
        
    
        </div>
      </div>
    </div>
    <!-- bg image -->
    <img class="img-fluid edu-bg-image w-100" src={{ asset('assets/images/images/backgrounds/education-bg.png') }} alt="bg-image">
  </section>
  <!-- /education -->
  <!-- portfolio -->
<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Portfolio</h2>
        </div>
      </div>
      <div class="row shuffle-wrapper">
        @forelse ( $userData->previous_work as $userProject )
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src={{ asset('assets/images/images/portfolio/item-1.png') }} alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="{{$userProject->project_url}}">عرض المشروع </a>
              </div>
              
            </div>
          </div>
          <div class="">
            <p> {{$userProject->name}}</p>
         </div>
        </div>
        @empty
         <div class="alert alert-danger"> {{$userData->name}}  لا يوجد قائمة اعمال سابقة لدى المستخدم</div> 
        @endforelse
       
       
      </div>
    </div>
  </section>
  <!-- /portfolio -->
  <!-- contact -->
<section class="section section-on-footer" data-background="images/backgrounds/bg-dots.png">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Contact Info</h2>
        </div>
        <div class="col-lg-8 mx-auto">
          <div class="bg-white rounded text-center p-5 shadow-down">
            <h4 class="mb-80">Contact Form</h4>
            <form action="#" class="row">
              <div class="col-md-6">
                <input type="text" id="name" name="name" placeholder="Full Name" class="form-control px-0 mb-4" required>
              </div>
              <div class="col-md-6">
                <input type="email" id="email" name="email" placeholder="Email Address" class="form-control px-0 mb-4" required>
              </div>
              <div class="col-12">
                <textarea name="message" id="message" class="form-control px-0 mb-4"
                  placeholder="Type Message Here" required></textarea>
              </div>
              <div class="col-lg-6 col-10 mx-auto">
                <button class="btn btn-primary w-100">send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact -->
  <!-- footer -->
<footer class="bg-dark footer-section">
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5 class="text-light">Email</h5>
            <p class="text-white paragraph-lg font-secondary">steve.fruits@email.com</p>
          </div>
          <div class="col-md-4">
            <h5 class="text-light">Phone</h5>
            <p class="text-white paragraph-lg font-secondary">+880 2544 658 256</p>
          </div>
          <div class="col-md-4">
            <h5 class="text-light">Address</h5>
            <p class="text-white paragraph-lg font-secondary">125/A, CA Commercial Area, California, USA</p>
          </div>
        </div>
      </div>
    </div>
    <div class="border-top text-center border-dark py-5">
      <p class="mb-0 text-light">Copyright &copy;<script>
          var CurrentYear = new Date().getFullYear()
          document.write(CurrentYear)
        </script> Designed &amp; Developed by <a class="text-white-50" href="Themefisher">Themefisher</a></p>
    </div>
  </footer>
  <!-- /footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>