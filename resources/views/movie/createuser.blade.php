@extends('../layoutadmin')


@section('content')
    <h2>Create User</h2>
    <form action="{{ route('movie.storeuser') }}" method="post">
        @csrf
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Name:</label>
                        <input type="text" name="name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="text" name="email" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="text" name="password" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <select class="form-control" name="role" id="">
                            <option value="1">Admin</option>
                            <option value="2">Manage</option>
                            <option value="3">User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </div>
        </div>
    </form>
@endsection
