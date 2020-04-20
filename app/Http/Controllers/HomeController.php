<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $take = config('setting.take-book');
        $find = request()->only('action', 'key');

        if ($find && $find['action'] == 'search') {
            //search
            $bookhomes = DB::table('books')->where('name_book' ,'like', '%'.$find['key'].'%')->orderBy('name_book','ASC')->take($take)->get();
        } else {
            $bookhomes = Book::orderBy('name_book','ASC')->take($take)->get();
        }
        return view('home', ['bookhomes' => $bookhomes]);
    }
}
