<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Author;
use App\Models\Book;
use App\Models\Borrow;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Publisher;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $authorTotal = Author::pluck('id')->count();
        $bookTotal = Book::pluck('id')->count();
        $borrowTotal = Borrow::pluck('id')->count();
        $categoryTotal = Category::pluck('id')->count();
        $publisherTotal = Publisher::pluck('id')->count();
        $userTotal = User::pluck('id')->count();

        return view('admin.home.index', [
            'authorTotal' => $authorTotal,
            'bookTotal' => $bookTotal,
            'borrowTotal' => $borrowTotal,
            'categoryTotal' => $categoryTotal,
            'publisherTotal' => $publisherTotal,
            'userTotal' => $userTotal,
        ]);
    }
}
