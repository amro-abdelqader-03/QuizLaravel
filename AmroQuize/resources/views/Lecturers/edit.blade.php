@extends('layout.layout')
     
@section('content')
<div class="card mt-5">
  <h2 class="card-header">Edit lecturer</h2>
  <div class="card-body">
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('lecturers.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
  
    <form action="{{ route('lecturers.update',$lecturer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
  
        <div class="mb-3">
            <label for="inputEmployeeNumber" class="form-label"><strong>Employee Number:</strong></label>
            <input 
                type="text" 
                name="employee_number" 
                value="{{ $lecturer->employee_number }}"
                class="form-control @error('employee_number') is-invalid @enderror" 
                id="inputEmployeeNumber" 
                placeholder="employee number">
            @error('employee_number')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
  
        <div class="mb-3">
            <label for="inputDepartment" class="form-label"><strong>Department:</strong></label>
            <input 
                type="text" 
                name="department" 
                value="{{ $lecturer->department }}"
                class="form-control @error('department') is-invalid @enderror" 
                id="inputDepartment" 
                placeholder="department">
            @error('department')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputOfficeRoom" class="form-label"><strong>Office Room:</strong></label>
            <input 
                type="text" 
                name="office_room" 
                value="{{ $lecturer->office_room }}"
                class="form-control @error('location') is-invalid @enderror" 
                id="inputOfficeRoom" 
                placeholder="office room">
            @error('office_room')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputPhoto" class="form-label"><strong>Photo:</strong></label>
            <input 
                type="file" 
                name="photo" 
                class="form-control @error('photo') is-invalid @enderror" 
                id="inputPhoto">
            <img src="/images/{{ $lecturer->photo }}" width="300px">
            @error('image')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
    </form>
  
  </div>
</div>
@endsection