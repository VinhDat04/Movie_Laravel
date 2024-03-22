@extends('../layout')

@section('content')
    <div style="background-color: #0a171a">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="box mt-5 mb-5 p-5">
                    <div class="m-5">
                        <form action="" method="get">
                            @csrf
                            <h3 style="color: white" class="mb-5">Login to your account</h3>

                            <a href="{{ route('register') }}">
                                <button type="button" class="btn btn-info button mb-2"
                                    style="width: 100%;">Register </button>
                            </a>
                            <a href="{{ route('login') }}"><button type="button" class="btn btn-success button"
                                    style="width: 100%;">Login </button></a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection
