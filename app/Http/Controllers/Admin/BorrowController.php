<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Borrow;
use App\Models\User;
use App\Models\Book;

use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function index()
    {
        $take = config('setting.paginate');
        $listborrow = Borrow::orderBy('id', 'DESC')->paginate($take);
        return view('admin.borrows.list_borrow', compact('listborrow'));
    }
}
