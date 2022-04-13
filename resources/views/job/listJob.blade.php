

@extends('layout.admin.menu')
@section('content')

<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Tables /</span> All JOB 
  </h4>
  
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header"></h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>id</th>
            <th>name</th>
            <th>type</th>
            
            <th>Company logo</th>
            
            <th>Location</th>
            <th>City</th>
            <th>Salary</th>
            <th>company Name</th>
           
            
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
         
         @foreach ($categories as $category)

         <tr>
           <td>{{ $loop->iteration }}</td>
          <td>{{ $category->id }}</td>
          <td>{{ $category->name }}</td>
          <td>{{ $category->type }}</td>
          <td>
            <ul class="list-unstyled categorys-list m-0 avatar-group d-flex align-items-center">
              
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{ $category->logo }}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td>{{ $category->location }}</td>
          <td>{{ $category->city }}</td>
          <td>{{ $category->salary }}</td>
          <td>{{ $category->name }}</td>
         
         
           
            <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('edit_job',$category->id) }}"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="{{ route('toggle_job',$category->id) }}"><i class="bx bx-trash me-2"></i>toggle</a>
              </div>
            </div>
          </td>
        </tr>
             
         @endforeach
        
         
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->


@endsection