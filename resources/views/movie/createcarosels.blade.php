@extends('../layoutadmin')


@section('content')
    <h2>Create Carosel</h2>
    <form action="{{ route('movie.storecarosels') }}" method="get">
        <table class="table" border="1px">
            <thead>
                <tr>

                    <th scope="col">image</th>
                    <th scope="col">title</th>
                    <th scope="col">star</th>
                    <th scope="col">year</th>
                    <th scope="col">long</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" name="image" id="">
                    </td>
                    <td>
                        <input type="text" name="title" id="">
                    </td>
                    <td>
                        <input type="text" name="star" id="">
                    </td>
                    <td>
                        <input type="text" name="year" id="">
                    </td>
                    <td>
                        <input type="text" name="long" id="">
                    </td>
                </tr>
            </tbody>
            <footer>
                <button type="submit" class="btn btn-success">Thêm mới</button>
            </footer>
        </table>
    </form>
@endsection
