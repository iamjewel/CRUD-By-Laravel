@extends('admin.app')

@section('title')
    Manage Department
@endsection

@section('content')


    <div class="card card-info mt-5" style="height: auto; width: 1000px; margin-left: 60px">

        <div class="card-header row">
            <h1 class="card-title text-center col-9" style="margin-left: 100px">Manage Department</h1>

            <a class="btn btn-success" href="{{route('department.create')}}" style="margin-top:-5px">Add Department</a>
        </div>


        <!-- Success Msg-->
        <h3 class="text-center text-success"> {{Session::get('message')}}</h3>


        <!-- Card Body-->
        <div class="card-body table-responsive p-0 text-center">
            <table class="table table-hover">
                <tbody>


                <tr>
                    <th>SL</th>
                    <th>Department Name</th>
                    <th>Department Code</th>
                    <th>Download Routine</th>
                    <th>Action</th>

                </tr>


                @php($i=1)
                @foreach($departments as $department)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$department->department_name}}</td>
                        <td>{{$department->department_code}}</td>

                        <td>
                            <a href="{{asset($department->department_routine)}}">Download</a>
                        </td>

                        <td>

                            <div class="row">
                                <div class="col-sm-8" style="margin-top: 3px">
                                    <a href="{{route('department.edit',['department'=>$department->id])}}"
                                       class="fa fa-edit" style="margin-right: 5px"></a>
                                </div>

                                <div class="col-sm-4" style="margin-left: -20px">
                                    <form action="{{route('department.destroy',['department'=>$department->id])}}"
                                          method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"><span class="fa fa-trash" style="color: red"></span>
                                        </button>

                                    </form>
                                </div>

                            </div>


                        </td>

                    </tr>
                @endforeach


                </tbody>

            </table>

            <div style="margin-left: 430px">
                {{ $departments->links() }}
            </div>

            <div style="margin-left: 430px">

            </div>

        </div>


    </div>

@endsection
