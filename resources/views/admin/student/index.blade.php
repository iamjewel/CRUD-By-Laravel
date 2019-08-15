@extends('admin.app')

@section('title')
    Manage Student
@endsection

@section('content')


    <div class="card card-info mt-5" style="height: auto; width: 1000px; margin-left: 60px">

        <div class="card-header row">
            <h1 class="card-title text-center col-9" style="margin-left: 100px">Manage Student</h1>

            <a class="btn btn-success" href="{{route('student.create')}}" style="margin-top:-5px">Add Student</a>
        </div>


        <!-- Success Msg-->
        <h3 class="text-center text-success"> {{Session::get('message')}}</h3>


        <!-- Card Body-->
        <div class="card-body table-responsive p-0 text-center">
            <table class="table table-hover">
                <tbody>


                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Department Name</th>
                    <th>Semester</th>
                    <th>Address</th>
                    <th>Routine</th>
                    <th>Action</th>

                </tr>

                @php($i=1)
                @foreach($students as $student)


                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$student->name}}</td>
                        <td>
                            <img src="{{asset($student->image)}}" height="50" width="50">
                        </td>

                        @if($student->department)
                            <td>{{$student->department->department_code}}</td>
                        @else
                            <td>Not Available</td>
                        @endif


                        @if($student->semester)
                            <td>{{$student->semester->semester_name}}</td>
                        @else
                            <td>Not Available</td>
                        @endif

                        <td>{{$student->address}}</td>

                        @if($student->department)
                            <td>
                                <a href="{{asset($student->department->department_routine)}}">Download</a>
                            </td>
                        @else
                            <td>Not Available</td>
                        @endif

                        <td>


                            <div class="row">
                                <div class="col-sm-8" style="margin-top: 3px">
                                    <a href="{{route('student.edit',['student'=>$student->id])}}"
                                       class="fa fa-edit" style="margin-right: 5px"></a>
                                </div>

                                <div class="col-sm-4" style="margin-left: -20px">
                                    <form action="{{route('student.destroy',['student'=>$student->id])}}"
                                          method="post">
                                        {{ csrf_field() }}
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
                {{ $students->links() }}
            </div>

            <div style="margin-left: 430px">

            </div>

        </div>


    </div>

@endsection
