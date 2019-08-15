@extends('admin.app')

@section('title')
    Update Course
@endsection

@section('content')

    <div class="card card-info" style="height: auto; width: 1000px; margin-left: 50px;margin-top: 20px">

        <!-- Card Header-->
        <div class="card-header row">
            <h1 class="card-title text-center col-8" style="margin-left: 130px">Update Course</h1>

        </div>

        <!-- Success Msg-->
        <h3 class="text-center text-success"> {{Session::get('message')}}</h3>

        <!-- Card Body-->
        <form action="{{route('course.update',['course'=>$course->id])}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            @method("PATCH")
            <div class="card-body">


                <div class="form-group ml-5 row">
                    <label class="col-sm-2 control-label">Department</label>
                    <div class="col-sm-10">

                        <select class="form-control" name="department_id">


                            @if($course->department)
                                <option value="{{$course->department->id}}">{{$course->department->department_code}}</option>
                            @endif

                            @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->department_code}}</option>
                            @endforeach

                        </select>
                        <span class="text-danger"> {{$errors->has('department_id') ? $errors->first('department_id'):''}} </span>

                    </div>
                </div>


                <div class="form-group ml-5 row">
                    <label class="col-sm-2 control-label">Course Name</label>
                    <div class="col-sm-10">
                        <input value="{{$course->course_name}}" type="text" name="course_name" class="form-control"/>
                        <span class="text-danger"> {{$errors->has('course_name') ? $errors->first('course_name'):''}} </span>

                    </div>
                </div>

            </div>

            <!-- Card Footer-->
            <div class="card-footer">
                <button type="submit" class="btn btn-info" style="margin-left: 380px">Update Course Info</button>
            </div>
            <a href="{{route('course.index')}}" class="btn"
               style="margin-left: 435px;background-color: #841b0f; color: #eaf3ce">Return</a>


        </form>

    </div>

@endsection
