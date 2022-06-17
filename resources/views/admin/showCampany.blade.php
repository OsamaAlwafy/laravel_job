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
          <th>logo </th>
          <th>اسم الشركة </th>
          <th>المدينة </th>
          <th> موقعها الرئسي </th>
          <th> المجال</th>
          <th>الجالة</th>
          <th> العمليات</th>
         
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
         @foreach ($companies as $company )
           
       
          
         <tr>
         <td>
          <img class="img-fluid rounded" height="50px" width="50px" src={{ asset('company/logo/').'/'.$company->logo }}>
          </td>
         <td> <strong>{{$company->name_com}}</strong></td>
         
           

          
            
          <td> <strong>{{$company->city}}</strong></td>
          {{-- <td>
          <img class="img-fluid rounded" height="150px" width="150px" src={{ asset('logo/'$company->logo) }}>
          </td> --}}
        <td> <strong>{{$company->location}}</strong></td>
        <td> <strong>{{$company->type}}</strong></td>
        <td>

          @if ($company->is_active==1)
                 
        <a href={{ route('activity_company', ['id'=>$company->id ,"active"=>0]) }}> <span class="badge bg-label-success me-1">مفعل</span></a>
              
          @else
          <a href={{ route('activity_company', ['id'=>$company->id,"active"=>1]) }}><span class="badge bg-label-danger me-1">موقف</span></a> 
          @endif
            
            </td>

          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href={{route("show_update_company",["id"=>$company->id])}}><i class="bx bx-edit-alt me-1"></i> تعديل</a>
                <a class="dropdown-item" href={{route("delete_company",["id"=>$company->id])}}><i class="bx bx-trash me-1"></i> حذف</a>
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