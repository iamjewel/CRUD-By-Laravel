@extends('admin.app')

@section('title')
    Add Department
@endsection

@section('content')

    <div class="card card-info" style="height: auto; width: 1000px; margin-left: 50px;margin-top: 60px">

        <!-- Card Header-->
        <div class="card-header row">
            <h1 class="card-title text-center col-8" style="margin-left: 130px">Add Department</h1>

            <a class="btn btn-success" href="{{route('department.index')}}" style="margin-top:-5px;margin-left: 31px">Manage
                Department</a>
        </div>

        <!-- Success Msg-->
        <h3 class="text-center text-success"> {{Session::get('message')}}</h3>

        <!-- Card Body-->
        <form action="{{route('department.store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data" >
            {{ csrf_field() }}

            <div class="card-body">

                <div class="form-group ml-5 row">
                    <label class="col-sm-3 control-label">Department Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="department_name" class="form-control"/>
                        <span class="text-danger"> {{$errors->has('department_name') ? $errors->first('department_name'):''}} </span>

                    </div>
                </div>


                <div class="form-group ml-5 row">
                    <label class="col-sm-3 control-label">Department Code</label>
                    <div class="col-sm-9">
                        <input type="text" name="department_code" class="form-control"/>
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
                <button type="submit" class="btn btn-info" style="margin-left: 400px">Add Department</button>
            </div>

        </form>

    </div>

@endsection
