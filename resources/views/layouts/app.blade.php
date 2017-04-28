<!DOCTYPE html>
<html lang="{{ trans('layouts/app.language_iso') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name')}} - Laravel </title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script>
        window.SchoolBoardAdmin = <?php echo json_encode([
            'auth' => Auth::check(),
            'user_id' => Auth::check() ? Auth::user()->id : -1,
            'roles' => Config::get('enums.roles')
        ]); ?>

    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">trans('layouts/app.toggle_nav_title')</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name')  }} - Laravel 
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('students.list.view') }}">trans('layouts/app.students_list_title)</a></li>
                        <li><a href="{{ route('student.search.view') }}">trans('layouts/app.student_search_title')</a></li>
                        <li><a href="{{ route('courses.list.view') }}">trans('layouts/app.courses_list_title')</a></li>
                        <li><a href="{{ route('course.search.view') }}">trans('layouts/app.course_search_title')</a></li>                      
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">trans('layouts/app.login_title')</a></li>
                            <li><a href="{{ url('/register') }}">trans('layouts/app.register_title')</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} -- trans('tuition/test.days_remaining_txt'): {{ $days_remaining_int }} -- ('tuition/test.due_date_txt'): {{ $due_date }}<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                                                        
                                    <li><a href="{{ route('student.profile.view', [ 'id' => Auth::user()->getKey() ]) }}"> trans('layouts/app.my_profile_view_title')</a></li>
                                    
                                    <li><a href="{{ route('student.profile.edit', [ 'id' => Auth::user()->getKey() ]) }}"> trans('layouts/app.my_profile_edit_title')</a></li>

                                    <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">trans('layouts/app.logout_title')</a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
