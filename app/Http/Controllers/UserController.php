<?php

namespace App\Http\Controllers;

use App\Models\carosel;
use App\Models\movie;
use App\Models\detailsmovie;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index()
    {
        $movies = movie::all();
        $carosels = carosel::all();
        $i = 12;
        $star1 = 8;
        $z = 0;
        return view('user.homepage', compact('movies', 'carosels', 'i', 'star1', 'z'));
    }
    public function show(string $id)
    {
        $movie = detailsmovie::findOrFail($id);
        $alls = detailsmovie::all();
        return view('user.details', compact('movie', 'alls'));
    }
    public function login()
    {

        return view('user.login');

    }

    public function register()
    {
        return view('user.register');
    }

    public function all()
    {
        $movies = movie::all();
        $carosels = carosel::all();
        return view('user.all', compact('movies', 'carosels'));
    }
    public function search(Request $request)
    {
        $movies = movie::all();
        $carosels = carosel::all();
        $validatedData = $request->title;
        return view('user.search', compact('movies', 'validatedData', 'carosels'));
    }
}
