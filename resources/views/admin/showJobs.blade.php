@extends('layout.admin.menu')
@section('content')
        <div class="content-wrapper">

          <!-- Content -->
          <div class="card">
  <h5 class="card-header">Book</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>نوع الوظيفة</th>
          <th>مفعل</th>
          <th>جارية</th>
          <th>اسم الشركة </th>
          <th>اسم الوظيفة</th>
         
          <th> الراتب</th>
          <th> العمليات</th>
         
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
         @foreach ($jobs as $job )
           
       
          
         <tr>
         <td> <strong>{{$job->name}}</strong></td>
         
         
          <td>

          @if ($job->is_active==1)
                 
           <a href={{ route('activity_job', ['id'=>$job->job_id ,"active"=>0]) }}> <span class="badge bg-label-success me-1">مفعل</span></a>
              
          @else
          <a href={{ route('activity_job', ['id'=>$job->job_id ,"active"=>0]) }}> <span class="badge bg-label-danger me-1">موقف</span></a> 
          @endif
            
            </td>

            <td>

              @if ($job->is_complete==1)
                     
                <span class="badge bg-label-success me-1">مكتمل </span>
                  
              @else
              <span class="badge bg-label-danger me-1">مستمرة</span> 
              @endif
                
                </td>

          
            
          <td> <strong>{{$job->name_com}}</strong></td>
          {{-- <td>
          <img class="img-fluid rounded" height="150px" width="150px" src={{ asset('logo/'$job->logo) }}>
          </td> --}}
        <td> <strong>{{$job->Job_title}}</strong></td>
        <td> <strong>{{$job->salary}}</strong></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href={{ route('show_update_job', ['id'=> $job->job_id ]) }}><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href={{ route('delete_job', ['id'=> $job->job_id ]) }}><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
       
     
      </tbody>
      @endforeach
    </table>
  </div>
</div>


@stop


  
</body>


<!--  , Sat, 26 Mar 2022 16:46:23 GMT -->

</html>