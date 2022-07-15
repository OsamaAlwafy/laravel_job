@extends('layout.userProfile.menu')
@section('content')

<div class="card-header flex-column flex-md-row">
  <div class="head-label text-center">
    <h5 class="card-title mb-0">قائمة الوظائف التي تم التقديم فيها</h5>
  </div>
   
<div class="card">
<div class="card-datatable table-responsive">
  <table class="datatables-basic table border-top">
    <thead>
      <tr>
        
        <th>id</th>
        <th> اسم الوظيفة</th>
        <th>نوع الوظيفة</th>
        <th> اسم الشركة</th>
        <th> الراتب</th>
        <th> عرض </th>
        
       
        <th>الحالة</th>
        
      
      </tr>
    </thead>
    <tbody>
      @forelse ( $jobs as $job )
      @foreach ($job->job as $oneJob )
        <tr>
     
      <td>{{$oneJob->id}}</td>
      
      <td>
       {{$oneJob->name}}
      </td>
      <td>
        {{$oneJob->job_detail->Job_title}}
       </td>
       <td>
        {{$oneJob->company->user->name}}
       </td>
        <td>
        {{$oneJob->job_detail->salary}}
       </td>
       <td>
        <a href="{{route('details_job',['id'=>$oneJob->job_detail->id,'active'=>0])}}">  عرض </a>
       </td>
      <td>
        @if ($oneJob->is_complete)
      <a href=""><button type="button" class="btn btn-danger">مكتملة</button></a>
        @else
      <a href=""><button type="button" class="btn btn-success">نشط</button></a>
        
          
      @endif
      </td>
      
    </tr>
      @endforeach
      @empty
      <div class="alert alert-danger"> لا يوجد تم التقديم لها </div>
      @endforelse
   

    </tbody>
  </table>
</div>
</div>
</div>


  @endsection

  