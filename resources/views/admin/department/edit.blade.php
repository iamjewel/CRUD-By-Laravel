@extends('admin.app')

@section('title')
    Update Department
@endsection

@section('content')

    <div class="card card-info" style="height: auto; width: 1000px; margin-left: 50px;margin-top: 60px">

        <!-- Card Header-->
        <div class="card-header ">
            <h3 class="card-title text-center">Update Department</h3>
        </div>

        <!-- Success Msg-->
        <h3 class="text-center text-success"> {{Session::get('message')}}</h3>

        <!-- Card Body-->
        <form action="{{route('department.update',['department'=>$department->id])}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method("PATCH")

            <div class="card-body">

                <div class="form-group ml-5 row">
                    <label class="col-sm-2 control-label">Department Name</label>
                    <div class="col-sm-10">
                        <input value="{{$department->department_name}}" type="text" name="department_name" class="form-control"/>
                        <span class="text-danger"> {{$errors->has('department_name') ? $errors->first('department_name'):''}} </span>

                    </div>
                </div>


                <div class="form-group ml-5 row">
                    <label class="col-sm-2 control-label">Department Code</label>
                    <div class="col-sm-10">
                        <input value="{{$department->department_code}}" type="text" name="department_code" class="form-control"/>
                        <span class="text-danger"> {{$errors->has('department_code') ? $errors->first('department_code'):''}} </span>

                    </div>
                </div>

                <div class="form-group ml-5 row">
                    <label class="col-sm-3 control-label">Department Routine</label>
                    <div class="col-sm-9">
                        <input type="file" name="department_routine" accept="application/pdf"/>
                        <br>
                        <span class="text-danger"> {{$errors->has('department_routine') ? $errors->first('department_routine'):''}} </span>

                    </div>
                </div>

            </div>

            <!-- Card Footer-->
            <div class="card-footer">
                <button type="submit" class="btn btn-info" style="margin-left: 385px">Update Department Info</button>
            </div>
            <a href="{{route('department.index')}}" class="btn" style="margin-left: 455px;background-color: #841b0f; color: #eaf3ce" >Return</a>

        </form>

    </div>

@endsection
