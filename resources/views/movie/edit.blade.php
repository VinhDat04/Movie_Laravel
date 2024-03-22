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
                        <form action="{{ route('movie.update', $movies->id) }}" method="post">
                            @csrf
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <td scope="row">
                                            <div class="form-group">
                                                <label for="name">image: </label>
                                                <input type="text" name="image" id="" class="form-control"
                                                    placeholder="Nha" aria-describedby="" value="{{ $movies->image }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="price">title: </label>
                                                <input type="text" name="title" id="" class="form-control"
                                                    placeholder="" aria-describedby="" value="{{ $movies->title }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="name">long: </label>
                                                <input type="text" name="long" id="" class="form-control"
                                                    placeholder="Nha" aria-describedby="" value="{{ $movies->long }}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <div class="form-group">
                                                <label for="name">year: </label>
                                                <input type="text" name="year" id="" class="form-control"
                                                    placeholder="Nha" aria-describedby="" value="{{ $movies->year }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="price">star: </label>
                                                <input type="text" name="star" id="" class="form-control"
                                                    placeholder="" aria-describedby="" value="{{ $movies->star }}">
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
