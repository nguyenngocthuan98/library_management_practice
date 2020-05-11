<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;


    class CommentController extends Controller
    {
        public function __construct()
        {
        $this->middleware('auth');
        }

        public function comment(CommentRequest $request, $id)
        {
        try {
            $book = Book::findOrFail($id);
            Comment::Create([
            'comment' => $request->comment,
            'id_user' => Auth::user()->id,
            'id_book' => $id, 
        ]);

        return redirect()->back();
        } catch (ModelNotFoundException $e) {
            throw new Exception($e->getMessages());
        }
    }
}
