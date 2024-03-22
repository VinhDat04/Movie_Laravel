<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/css.css">
</head>

<body>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('xoa'))
        <div class="alert alert-danger">
            {{ session('xoa') }}
        </div>
    @endif
    @if (session()->has('update'))
        <div class="alert alert-primary">
            {{ session('update') }}
        </div>
    @endif
    @if (session()->has('updateuser'))
        <div class="alert alert-primary">
            {{ session('updateuser') }}
        </div>
    @endif
    @if (session()->has('storeuser'))
        <div class="alert alert-success">
            {{ session('storeuser') }}
        </div>
    @endif

    @if (Auth::user()->role == 1 || Auth::user()->role == 2)

        <main class="main">
            <aside class="sidebar">
                <nav class="nav">
                    <ul>
                        @if (Auth::user()->role == 1)
                            <li class="active"><a href="{{ route('movie.index') }}">Movie</a></li>
                            <li><a href="{{ route('movie.create') }}">Insert</a></li>
                            <li><a href="{{ route('movie.userlist') }}">userlist</a></li>
                            <li><a href="{{ route('movie.createcarosels') }}">create carosels</a></li>

                            <li><a href="{{ route('movie.carosels') }}">carosels</a></li>
                            <li><a href="{{ route('movie.detailsmovies') }}">detailsmovies</a></li>
                            <li><a href="{{ route('movie.createdetailsmovies') }}">create detailsmovies</a></li>
                            <i class="fa fa-user-circle" aria-hidden="true"></i></a>
                        @endauth
                        @if (Auth::user()->role == 2)
                            <li class="active"><a href="{{ route('movie.index') }}">Movie</a></li>
                            <li><a href="{{ route('movie.create') }}">Insert</a></li>
                            {{-- <li><a href="{{ route('movie.userlist') }}">userlist</a></li> --}}
                            <li><a href="{{ route('movie.createcarosels') }}">create carosels</a></li>

                            <li><a href="{{ route('movie.carosels') }}">carosels</a></li>
                            <li><a href="{{ route('movie.detailsmovies') }}">detailsmovies</a></li>
                            <li><a href="{{ route('movie.createdetailsmovies') }}">create detailsmovies</a></li>
                            <i class="fa fa-user-circle" aria-hidden="true"></i></a>
                        @endauth



                        {{-- // --}}
                        <div id="app" style="background-color:#312450 ">
                            <nav class="navbar navbar-expand-md  shadow-sm">


                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent" aria-expanded="false"
                                    aria-label="{{ __('Toggle navigation') }}">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <!-- Left Side Of Navbar -->
                                    <ul class="navbar-nav me-auto">

                                    </ul>

                                    <!-- Right Side Of Navbar -->
                                    <ul class="navbar-nav ms-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                            @if (Route::has('login'))
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li>
                                                <a href="#" role="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false" v-pre
                                                    style="color: blue">
                                                    {{ Auth::user()->name }}
                                                </a>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"
                                                    style="color: blue">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}"
                                                    method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        @endguest
                                    </ul>
                                </div>

                            </nav>
                        </div>
                        {{-- // --}}
            </ul>
        </nav>
    </aside>


    <div class="container twitter">
        @yield('content')
    </div>

</main>
@else
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('You are logged in!') }}
            <a class="nav-link" href="{{ route('homepage') }}">{{ __('Trở về trang chủ') }}</a>
        </div>
    </div>
</div>

@endif

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        window.setTimeout(() => {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
                $(this).remove();
            })
        }, 1000);
    })
</script>
