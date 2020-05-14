<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Repositories\Book\BookRepositoryInterface;

class HomeController extends Controller
{
    protected $bookRepo;

    public function __construct(BookRepositoryInterface $book)
    {
        $this->bookRepo = $book;
    }

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
            $bookhomes = $this->bookRepo->where('name_book' ,'like', '%'.$find['key'].'%')->paginate('id', 'DESC', $take);
        } else {
            //View all
            $bookhomes = $this->bookRepo->paginate('id', 'DESC', $take);
        }
        return view('home', ['bookhomes' => $bookhomes]);
    }
}
