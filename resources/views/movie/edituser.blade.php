@extends('../layoutadmin')


@section('content')


    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card uper">
                    <div class="card-header">
                        <h3>Edit</h3>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <br>
                        @endif

                        <form action="{{ route('user.updateuser', $users->id) }}" method="post">
                            @csrf
                            @method('POST') <!-- Hoặc PATCH tùy thuộc vào cách bạn setup route -->
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td scope="row">
                                            <div class="form-group">
                                                <label for="name">Name: </label>
                                                <input type="text" name="name" id="" class="form-control"
                                                    placeholder="Nha" aria-describedby="" value="{{ $users->name }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="price">Email: </label>
                                                <input type="text" name="email" id="" class="form-control"
                                                    placeholder="" aria-describedby="" value="{{ $users->email }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="role">Role:</label>
                                                <select class="form-control" name="role" id="role">
                                                    <option value="1"{{ $users->role === '1' ? ' selected' : '' }}>
                                                        Admin
                                                    </option>
                                                    <option value="2"{{ $users->role === '2' ? ' selected' : '' }}>
                                                        Manage
                                                    </option>
                                                    <option value="3"{{ $users->role === '3' ? ' selected' : '' }}>User
                                                    </option>
                                                </select>
                                            </div>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-success">Cập nhật</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
