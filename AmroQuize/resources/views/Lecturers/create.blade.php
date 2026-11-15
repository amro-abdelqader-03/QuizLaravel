@extends('lecturers.layout')

@section('content')
    <div class="card mt-5">
        <h2 class="card-header">Add New lecturer</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('lecturers.index') }}"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>

            <form action="{{ route('lecturers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="inputUser" class="form-label"><strong>User:</strong></label>
                    <select id="user_id" name="user_id">
                        @foreach ($users as $user)
                            <option value={{ $user->id }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputEmployeeNumber" class="form-label"><strong>Employee Number:</strong></label>
                    <input type="text" name="employee_number"
                        class="form-control @error('employee_number') is-invalid @enderror" id="inputName"
                        placeholder="employee number">
                    @error('employee_number')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDepartment" class="form-label"><strong>Department:</strong></label>
                    <input type="text" name="department" class="form-control @error('department') is-invalid @enderror"
                        id="inputDepartment" placeholder="department">
                    @error('department')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputOfficeRoom" class="form-label"><strong>Office Room:</strong></label>
                    <input type="text" name="office_room" class="form-control @error('office_room') is-invalid @enderror"
                        id="inputOfficeRoom" placeholder="department">
                    @error('office_room')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputPhoto" class="form-label"><strong>Photo:</strong></label>
                    <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror"
                        id="inputPhoto">
                    @error('photo')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
            </form>

        </div>
    </div>
@endsection