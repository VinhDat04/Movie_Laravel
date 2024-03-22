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
    <link rel="stylesheet" href="{{ asset('/css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/productdetails.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid" style="background-color: #11272c">
        <div class="header">
            <div class="row">
                <div class="col-md-3 logo">
                    <a href="{{ route('homepage') }}"><img src="{{ asset('/images/logo2.png') }}" alt=""></a>
                </div>
                <div class="col-md-6 searchbar">
                    <form action="{{ route('search') }}" method="get">
                        <div class="row">
                            <div class="col-1 mr-0 p-0">
                                <button class="search-button" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                            <div class="col-11 ml-0 p-0">
                                <input type="text" placeholder="Search Movies" name="title">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-3 login ">
                    @if (Route::has('login'))
                        <div>
                            @auth


                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <h4 style="margin-top: 3%"> Welcome back, {{ Auth::user()->name }} </h4>

                                    <button type="submit" class="btn btn-#0a171a"
                                        style="color: white; font-size: 50%; margin-top: -10%">Logout</button>

                                </form>


                                @if (Auth::user()->role == 1 || Auth::user()->role == 2)
                                    <a href="{{ route('movie.index') }}" class=""
                                        style="color: white;font-size: 20px">ADMIN PAGE</a>
                                @endif
                            @else
                                <a href="{{ route('loginuser') }}" style="color: white"><i class="fa fa-user-circle"
                                        aria-hidden="true"></i></a>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div>
        @yield('content')
    </div>
    <div class="container-fluid" style="background-color: #11272c">
        <div class="footer pt-5">
            <div class="row">
                <div class="col-md-3">
                    <img src="./logo2.png" alt="">
                </div>
                <div class="col-md-2 list1">
                    <ul>
                        <li>
                            <a href="">Movies</a>
                        </li>
                        <li>
                            <a href="">TV-Shows</a>
                        </li>
                        <li>
                            <a href="">Trending</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 list1">
                    <ul>
                        <li>
                            <a href="">A to Z List</a>
                        </li>
                        <li>
                            <a href="">New Release</a>
                        </li>
                        <li>
                            <a href="">Recently updated</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <p class="text1">Experience the ultimate in free movie streaming with FlixTor. <br>
                        Watch movies online for free and indulge in a cinematic journey like never before.</p>
                </div>
            </div>
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6">
                        &#9400;Flixtor
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="">Contact</a>&nbsp;&nbsp;
                        <a href="">Request</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

</html>
