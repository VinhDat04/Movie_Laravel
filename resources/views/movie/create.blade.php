@extends('../layoutadmin')


@section('content')
    <h2>Movie List</h2>
    <form action="{{ route('movie.store') }}" method="get">
        <table class="table" border="1px">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Time</th>
                    <th scope="col">Year</th>
                    <th scope="col">Star</th>
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
                        <input type="text" name="long" id="">
                    </td>
                    <td>
                        <input type="text" name="year" id="">
                    </td>
                    <td>
                        <input type="text" name="star" id="">
                    </td>
                </tr>
            </tbody>
            <footer>
                <button type="submit" class="btn btn-success">Thêm mới</button>
            </footer>
        </table>
    </form>
@endsection
