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
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <br>
                        @endif --}}
                        <form action="{{ route('movie.updatedetailsmovies', $detailsmovies->id) }}" method="post">
                            @csrf
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <td scope="row">
                                            <div class="form-group">
                                                <label for="name">image: </label>
                                                <input type="text" name="image" id="" class="form-control"
                                                    placeholder="Nha" aria-describedby=""
                                                    value="{{ $detailsmovies->image }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="price">details1: </label>
                                                <input type="text" name="details1" id="" class="form-control"
                                                    placeholder="" aria-describedby=""
                                                    value="{{ $detailsmovies->details1 }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="name">title: </label>
                                                <input type="text" name="title" id="" class="form-control"
                                                    placeholder="Nha" aria-describedby=""
                                                    value="{{ $detailsmovies->title }}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            <div class="form-group">
                                                <label for="name">year: </label>
                                                <input type="text" name="year" id="" class="form-control"
                                                    placeholder="Nha" aria-describedby=""
                                                    value="{{ $detailsmovies->year }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="price">details2: </label>
                                                <input type="text" name="details2" id="" class="form-control"
                                                    placeholder="" aria-describedby=""
                                                    value="{{ $detailsmovies->details2 }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="price">genres1: </label>
                                                <input type="text" name="genres1" id="" class="form-control"
                                                    placeholder="" aria-describedby=""
                                                    value="{{ $detailsmovies->genres1 }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="price">genres2: </label>
                                                <input type="text" name="genres2" id="" class="form-control"
                                                    placeholder="" aria-describedby=""
                                                    value="{{ $detailsmovies->genres2 }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="price">audio: </label>
                                                <input type="text" name="audio" id="" class="form-control"
                                                    placeholder="" aria-describedby="" value="{{ $detailsmovies->audio }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="price">subtitle: </label>
                                                <input type="text" name="subtitle" id="" class="form-control"
                                                    placeholder="" aria-describedby=""
                                                    value="{{ $detailsmovies->subtitle }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="price">actor: </label>
                                                <input type="text" name="actor" id="" class="form-control"
                                                    placeholder="" aria-describedby=""
                                                    value="{{ $detailsmovies->actor }}">
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
