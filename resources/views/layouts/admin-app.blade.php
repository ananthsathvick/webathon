<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

        .compcontent table {
            width: 100%
        }

        .compcontent table tr {
            display: table-row;
            align-items: center
        }

        .compcontent table tr td,
        .compcontent table tr th {
            display: table-cell;
            text-align: left;
            padding: 10px;
            width: 25%
        }

        .compcontent tr:nth-child(even)section>h2+p {
            margin-top: 10px
        }

        .sugg {
            display: inline-block;
            margin: 20px;
        }


        .tab-content>.tab-pane {
            display: block;
            visibility: hidden;
        }

        .tab-content>.tab-pane.active {
            visibility: visible;
        }

        .tab-content {
            position: relative;
        }

        .tab-pane:not(:first-child) {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .test_drive_form {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        /* ::-webkit-input-placeholder {
        color: red;
        font-weight: 800;
    }

    :-moz-placeholder {
        Firefox 18- 
        color: red;
        font-weight: 800;
    }

    ::-moz-placeholder {
        /* Firefox 19+ 
        color: red;
        font-weight: 800;
    }

    :-ms-input-placeholder {
        color: red;
        font-weight: 800;
    } */



        .panel-heading {
            position: relative;
        }




        .panel-heading[data-toggle="collapse"]:after {
            font-family: FontAwesome;
            content: "\f078";
            /* "play" icon */
            position: absolute;
            color: #00000;
            font-size: 18px;
            line-height: 22px;
            right: 20px;
            top: calc(50% - 10px);



        }

        .panel-heading[aria-expanded="true"]:after {
            /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg);
        }
    </style>

     <!-- Icons -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                        @auth

                        <a href="{{ url('/admin') }}" class="navbar-brand btn-outline-light px-2">
                            <i class="fas fa-bell mr-1"></i>Feed
                        </a>


                        @endauth

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
