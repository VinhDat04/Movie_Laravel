@extends('../layout')

@section('content')
    <div style="background-color: #0a171a">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="box mt-5 mb-5 p-5">
                    <div class="m-5">
                        <form action="" method="post">
                            <h3 style="color: white" class="mb-5">Register your account</h3>
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control input mb-3"
                                    placeholder="Username" aria-describedby="helpId">
                                <input type="text" name="" id="" class="form-control input mb-3"
                                    placeholder="Email" aria-describedby="helpId">
                                <input type="text" name="" id="" class="form-control input mb-5"
                                    placeholder="Your password  " aria-describedby="helpId">
                            </div>
                            <a href="{{ route('loginuser') }}" style="color: white"><button type="button"
                                    class="btn btn-warning button mb-2" style="width: 100%;">Login</button></a>
                            <button type="submit" class="btn btn-danger button mb-2" style="width: 100%;">Register</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection
