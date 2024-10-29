<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * 映画一覧を表示する。
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // 映画の全リストを取得する
        $movies = Movie::all();

        return view('getMovies', ['movies' => $movies]);
    }
}
