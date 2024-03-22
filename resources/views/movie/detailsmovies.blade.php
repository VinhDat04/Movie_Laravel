@extends('../layoutadmin')


@section('content')
    <h2>Details Movies</h2>

    <table class="table" border="1px">
        <thead>
            <tr>
                <th scope="col">ID</th>
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

            @foreach ($detailsmovies as $detailsmovie)
                <tr>
                    <td>{{ $detailsmovie->id }}</td>
                    <td>{{ $detailsmovie->image }}</td>
                    <td>{{ $detailsmovie->details1 }}</td>
                    <td>{{ $detailsmovie->title }}</td>
                    <td>{{ $detailsmovie->year }}</td>
                    <td>{{ $detailsmovie->details2 }}</td>
                    <td>{{ $detailsmovie->genres1 }}</td>
                    <td>{{ $detailsmovie->genres2 }}</td>
                    <td>{{ $detailsmovie->audio }}</td>
                    <td>{{ $detailsmovie->subtitle }}</td>
                    <td>{{ $detailsmovie->actor }}</td>



                    <td>
                        <a href="{{ route('movie.editdetailsmovies', $detailsmovie->id) }}" class="btn btn-primary">Sửa</a>
                        @if (Auth::user()->role == 1)
                            <a href="{{ route('movie.destroydetailsmovies', $detailsmovie->id) }}"
                                class="btn btn-danger">Xóa</a>
                        @endauth
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="row">

    <div class="col-md-12" style="font-size: 30px">

        <ul class="pagination  justify-content-center">
            <li class="page-item ">
                <a href="{{ $detailsmovies->previousPageUrl() }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                    </svg>
                </a>
            </li>

            @for ($i = 1; $i <= $detailsmovies->lastPage(); $i++)
                <li class="page-item border">
                    <a class="page-link" href="{{ $detailsmovies->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            <li class="page-item ">
                <a href="{{ $detailsmovies->nextPageUrl() }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
@endsection
