@extends('../layoutadmin')


@section('content')
    <h2>Create Details Movies</h2>
    <form action="{{ route('movie.storedetailsmovies') }}" method="get">
        <table class="table" border="1px">
            <thead>
                <tr>


                    <th scope="col">image</th>
                    <th scope="col">details1</th>
                    <th scope="col">title</th>
                    <th scope="col">year</th>
                    <th scope="col">details2</th>
                    <th scope="col">genres1</th>
                    <th scope="col">genres2</th>
                    <th scope="col">audio</th>
                    <th scope="col">subtitle</th>
                    <th scope="col">actor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" name="image" id="">
                    </td>
                    <td>
                        <input type="text" name="details1" id="">
                    </td>
                    <td>
                        <input type="text" name="title" id="">
                    </td>
                    <td>
                        <input type="text" name="year" id="">
                    </td>
                    <td>
                        <input type="text" name="details2" id="">
                    </td>
                    <td>
                        <input type="text" name="genres1" id="">
                    </td>
                    <td>
                        <input type="text" name="genres2" id="">
                    </td>
                    <td>
                        <input type="text" name="audio" id="">
                    </td>
                    <td>
                        <input type="text" name="subtitle" id="">
                    </td>
                    <td>
                        <input type="text" name="actor" id="">
                    </td>
                </tr>
            </tbody>
            <footer>
                <button type="submit" class="btn btn-success">Thêm mới</button>
            </footer>
        </table>
    </form>
@endsection
