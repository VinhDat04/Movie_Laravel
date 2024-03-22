@extends('../layout')

@section('content')
    <div class="container-fluid" style="background-color: #11272c">
        <div class="body">
            <div class="box1">
                <div class="row">
                    @foreach ($carosels as $carosel)
                        <div class="col-md-4 pl-5">
                            <div class="card c1" style="background-color: #0a171a;">
                                <img src="/images/img/banner/{{ $carosel->image }}" alt="">
                                <div class="card-footer text-muted " style="background-color: black;">
                                    <h5 style="color: white;">{{ $carosel->title }}</h5>
                                    <p>{{ $carosel->star }}<i class="fa fa-star" aria-hidden="true"></i>
                                        {{ $carosel->year }}. {{ $carosel->long }}</p>
                                    <a href="{{ route('productdetails', $carosel->id) }}" style="color: white"><button
                                            type="button" class="btn"
                                            style="width: 100%; background-color: #0d1d21;color: white">Watch</button></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- -----------------------------------------------box2---------------------------------------------- -->
            <div class="box2 mt-5 pt-5">
                <h4 class="p-3">Recommended</h4>
                <div class="row">
                    @foreach ($movies as $movie)
                        @if ($movie->id <= $i)
                            <div class="col-md-2 mb-3 pl-4">
                                <div class="c2">
                                    <img src="/images/img/{{ $movie->image }}" alt="" style="height: 320px">
                                    <div class="card-footer text-muted" style="height: 150px;">
                                        <div style="height: 90px">
                                            <b style="color: white;">{{ $movie->title }}</b>
                                            <p>{{ $movie->star }}<i class="fa fa-star" aria-hidden="true"></i>
                                                {{ $movie->year }}. {{ $movie->long }}</p>
                                        </div>
                                        <a href="{{ route('productdetails', $movie->id) }}" style="color: white"><button
                                                type="button" class="btn"
                                                style="width: 100%; background-color: #0d1d21;color: white">Watch</button></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8 ads">
                        <img class="ads" src="{{ asset('/images/mangafire_7xx.gif') }}" alt="">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <!-- -------------------------------------------------box3--------------------------------------------- -->
                <h4 class="p-3">Top star</h4>

                <div class="row">
                    @foreach ($movies as $movie)
                        @if ($movie->star >= $star1 && $z < 12)
                            <div class="col-md-2 mb-3 pl-4">
                                <div class="c2">
                                    <img src="/images/img/{{ $movie->image }}" alt="" style="height: 320px">
                                    <div class="card-footer text-muted" style="height: 150px;">
                                        <div style="height: 90px">
                                            <b style="color: white;">{{ $movie->title }}</b>
                                            <p>{{ $movie->star }}<i class="fa fa-star" aria-hidden="true"></i>
                                                . {{ $movie->year }} . {{ $movie->long }} min</p>
                                        </div>
                                        <a href="{{ route('productdetails', $movie->id) }}" style="color: white"><button
                                                type="button" class="btn"
                                                style="width: 100%; background-color: #0d1d21;color: white">Watch</button></a>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="" value="{{ ++$z }}">
                        @endif
                    @endforeach
                </div>
                <div style="text-align: center" class="mt-5">
                    <a href="{{ route('all') }}" class="mt-5"><button type="button" class="btn btn-warning">ALL
                            MOVIE</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
