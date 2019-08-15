@extends('admin.app')

@section('title','Home')

@section('content')
    <h1 class="text-center" style="margin-bottom: 30px">Welcome To CRUD By LARAVEL</h1>


    <div class="row" style="margin-left: 90px; margin-top: 150px">


        <div class="col-lg-4">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3 style="margin-left: 135px">{{$studentCount}}</h3>

                    <p style="margin-left: 100px">Total Students</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('student.index')}}" class="small-box-footer">Check All Student <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>




        <div class="col-lg-4" style="margin-left: 150px">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3 style="margin-left: 138px">{{$departmentCount}}</h3>

                    <p style="margin-left: 100px">Total Department</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('department.index')}}" class="small-box-footer">Check All Department <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>


    </div>


@endsection
