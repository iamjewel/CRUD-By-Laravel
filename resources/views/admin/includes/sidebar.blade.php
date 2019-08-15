<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{asset('/')}}assets/img/BrandLogo.png" alt="Brand Logo" class="brand-image"
             style="opacity: .8">
        <span class="brand-text font-weight-light">CRUD</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Admin Info -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('/')}}assets/img/Admin.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">


                <!-- Department -->
                <li class="nav-item has-treeview" style="margin-top: 10px">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-university"></i>
                        <p>
                            Department
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Department </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Manage Department</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <!-- Course -->
                <li class="nav-item has-treeview" style="margin-top: 10px">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Course
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Course </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Manage Course</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Student -->
                <li class="nav-item has-treeview" style="margin-top: 10px">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Student
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Student </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Manage Student</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <!-- LogOut -->
                <li class="nav-item" style="margin-top: 10px">

                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">

                        <i class="nav-icon fa fa-sign-out" style="color: #cc2010"></i>
                        <p>
                            {{ __('Logout') }}
                        </p>

                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </li>


            </ul>
        </nav>

    </div>
    <!-- /.sidebar -->
</aside>
