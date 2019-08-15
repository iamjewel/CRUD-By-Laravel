@extends('admin.app')

@section('title')
    Update Student
@endsection

@section('content')

    <div class="card card-info" style="height: auto; width: 1000px; margin-left: 50px;margin-top: 20px">

        <!-- Card Header-->
        <div class="card-header row">
            <h1 class="card-title text-center col-8" style="margin-left: 130px">Update Student</h1>
        </div>

        <!-- Success Msg-->
        <h3 class="text-center text-success"> {{Session::get('message')}}</h3>

        <!-- Card Body-->
        <form action="{{route('student.update',['student'=>$student->id])}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method("PATCH")

            <div class="card-body">

                <div class="form-group ml-5 row">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input value="{{$student->name}}" type="text" name="name" class="form-control"/>
                        <span class="text-danger"> {{$errors->has('name') ? $errors->first('name'):''}} </span>

                    </div>
                </div>


                <div class="form-group ml-5 row">
                    <label class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" accept="image/*"/>
                        <img src="{{asset($student->image)}}"  height="50" width="50">
                        <br>
                        <span class="text-danger"> {{$errors->has('image') ? $errors->first('image'):''}} </span>

                    </div>
                </div>


                <div class="form-group ml-5 row">
                    <label class="col-sm-2 control-label">Department</label>
                    <div class="col-sm-10">

                        <select class="form-control" name="department_id">

                            @if($student->department)
                                <option value="{{$student->department->id}}">{{$student->department->department_code}}</option>
                            @endif

                            @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->department_code}}</option>
                            @endforeach


                        </select>
                        <span class="text-danger"> {{$errors->has('department_id') ? $errors->first('department_id'):''}} </span>

                    </div>
                </div>


                <div class="form-group ml-5 row">
                    <label class="col-sm-2 control-label">Semester</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="semester_id">

                            @if($student->semester)
                                <option value="{{$student->semester->id}}">{{$student->semester->semester_name}}</option>
                            @endif

                            @foreach($semesters as $semester)
                                <option value="{{$semester->id}}">{{$semester->semester_name}}</option>
                            @endforeach

                        </select>
                        <span class="text-danger"> {{$errors->has('semester_id') ? $errors->first('semester_id'):''}} </span>

                    </div>
                </div>


                <div class="form-group ml-5 row">
                    <label class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                        <input value="{{$student->address}}" type="text" name="address" class="form-control"/>
                        <span class="text-danger"> {{$errors->has('address') ? $errors->first('address'):''}} </span>

                    </div>
                </div>

            </div>

            <!-- Card Footer-->
            <div class="card-footer">
                <button type="submit" class="btn btn-info" style="margin-left: 380px">Update Student Info</button>
            </div>
            <a href="{{route('student.create')}}" class="btn" style="margin-left: 450px;background-color: #841b0f; color: #eaf3ce" >Return</a>

        </form>

    </div>

@endsection

