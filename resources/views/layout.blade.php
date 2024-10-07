<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css" rel="stylesheet">
   <style>
        #sidebarMenu {
            background-color: #000; 
            min-height: 100vh; 
        }
        #sidebarMenu .nav-link {
            color: #fff; 
        }

        #sidebarMenu .nav-link:hover {
            background-color: #333; 
            color: #fff; 
        }

        #sidebarMenu .nav-link.active {
            background-color: #0056b3; 
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('user_form') ? 'active' : '' }}" href="{{ route('user_form') }}">
                                Users Add
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('user_list') ? 'active' : '' }}" href="{{ route('user_list') }}">
                                Users List
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('task_form') ? 'active' : '' }}" href="{{route('task_form')}}">
                                Tasks Add
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('task_list') ? 'active' : '' }}" href="{{route('task_list')}}">
                                Tasks List
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
    @yield('scripts')
</body>
</html>
