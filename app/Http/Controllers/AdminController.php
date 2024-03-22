<?php

namespace App\Http\Controllers;

use App\Models\movie;
use App\Models\User;
use App\Models\carosel;
use App\Models\detailsmovie;
use Illuminate\Support\Facades\Hash;



use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginadmin()
    {
        return view('loginadmin');
    }
    public function registeradmin()
    {
        return view('loginadmin');
    }
    public function index()
    {
        $movies = movie::paginate(8);

        return view('movie/index', compact('movies'));
    }
    public function userlist()
    {

        $users = User::paginate(8);
        return view('movie/userlist', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|max:255',
            'star' => 'required|alpha_num',
            'long' => 'required|alpha_num',
            'year' => 'required|alpha_num',
        ]);
        Movie::create($validatedData);
        return redirect('/movies')->with('success', 'Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies = Movie::findOrFail($id);
        return view('movie.edit', compact('movies'));
    }
    public function edituser($id)
    {
        $users = User::findOrFail($id);
        return view('movie.edituser', compact('users'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|max:255',
            'star' => 'required|alpha_num',
            'long' => 'required|alpha_num',
            'year' => 'required|alpha_num',
        ]);
        Movie::where('id', $id)->update($validatedData);
        return redirect('/movie')->with('update', 'Cập Nhật Thành Công!');
    }
    public function updateuser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->save();

        return redirect('movie/userlist')->with('success', 'Cập nhật thành công');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movies = Movie::findOrFail($id);
        // Nếu người dùng xác nhận xóa:
        $movies->delete();
        return redirect('/movies')->with('xoa', 'Xóa thành công!');
    }
    public function destroyuser($id)
    {
        $users = User::findOrFail($id);
        // Nếu người dùng xác nhận xóa:
        $users->delete();
        return redirect('/movie/userlist')->with('xoa', 'Xóa thành công!');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }


    //carosels
    public function carosels()
    {
        $carosels = carosel::paginate(8);

        return view('movie/carosels', compact('carosels'));
    }
    public function createcarosels()
    {
        return view('movie/createcarosels');
    }
    public function storecarosels(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|max:255',
            'title' => 'required|max:255',
            'star' => 'required|alpha_num',
            'year' => 'required|alpha_num',
            'long' => 'required|alpha_num',
        ]);
        carosel::create($validatedData);
        return redirect('/movie/carosels')->with('success', 'Thêm mới thành công');
    }
    public function editcarosels($id)
    {
        $carosels = carosel::findOrFail($id);
        return view('movie.editcarosels', compact('carosels'));
    }
    public function updatecarosels(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|max:255',
            'title' => 'required|max:255',
            'star' => 'required|alpha_num',
            'year' => 'required|alpha_num',
            'long' => 'required|alpha_num',
        ]);
        carosel::where('id', $id)->update($validatedData);
        return redirect('/movie/carosels')->with('update', 'Cập Nhật Thành Công!');
    }
    public function destroycarosels($id)
    {
        $carosels = carosel::findOrFail($id);
        // Nếu người dùng xác nhận xóa:
        $carosels->delete();
        return redirect('/movie/carosels')->with('xoa', 'Xóa thành công!');
    }
    //carosels
    //detailsmovies
    public function detailsmovies()
    {
        $detailsmovies = detailsmovie::paginate(8);

        return view('movie/detailsmovies', compact('detailsmovies'));
    }
    public function createdetailsmovies()
    {
        return view('movie/createdetailsmovies');
    }
    public function storedetailsmovies(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|max:255',
            'details1' => 'required|max:255',
            'title' => 'required|alpha_num',
            'year' => 'required|alpha_num',
            'details2' => 'required|alpha_num',
            'genres1' => 'required|alpha_num',
            'genres2' => 'required|alpha_num',
            'audio' => 'required|alpha_num',
            'subtitle' => 'required|alpha_num',
            'actor' => 'required|alpha_num',

        ]);
        detailsmovie::create($validatedData);
        return redirect('/movie/detailsmovies')->with('success', 'Thêm mới thành công');
    }
    public function editdetailsmovies($id)
    {
        $detailsmovies = detailsmovie::findOrFail($id);
        return view('movie.editdetailsmovies', compact('detailsmovies'));
    }
    public function updatedetailsmovies(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|max:255',
            'details1' => 'required|max:255',
            'title' => 'required|alpha_num',
            'year' => 'required|alpha_num',
            'details2' => 'required|alpha_num',
            'genres1' => 'required|alpha_num',
            'genres2' => 'required|alpha_num',
            'audio' => 'required|alpha_num',
            'subtitle' => 'required|alpha_num',
            'actor' => 'required|alpha_num',
        ]);
        detailsmovie::where('id', $id)->update($validatedData);
        return redirect('/movie/detailsmovies')->with('update', 'Cập Nhật Thành Công!');
    }
    public function destroydetailsmovies($id)
    {
        $detailsmovies = detailsmovie::findOrFail($id);
        // Nếu người dùng xác nhận xóa:
        $detailsmovies->delete();
        return redirect('/movie/detailsmovies')->with('xoa', 'Xóa thành công!');
    }
    //detailsmovies
    public function createuser()
    {
        return view('movie.createuser');
    }

    public function storeuser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required|in:1,2,3',
        ]);

        // Tạo người dùng mới
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->role = $validatedData['role'];
        $user->save();

        return redirect('/movie/userlist')->with('success', 'Thêm user thành công!');
    }



}
