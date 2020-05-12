<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use App\Repositories\Book\BookRepositoryInterface;
use App\Repositories\Comment\CommentRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

    class CommentController extends Controller
    {
        
        protected $bookRepo;
        protected $commentRepo;

        public function __construct(BookRepositoryInterface $bookRepo, CommentRepositoryInterface $commentRepo )
        {
            $this->middleware('auth');
            $this->bookRepo = $bookRepo;
            $this->commentRepo = $commentRepo;
        }

        public function comment(CommentRequest $request, $id)
        {
        try {
            $this->bookRepo->findOrFail($id);
            $comment = [
            'comment' => $request->comment,
            'id_user' => Auth::user()->id,
            'id_book' => $id, 
        ];
        $this->commentRepo->create($comment);
    
        return redirect()->back();
        } catch (ModelNotFoundException $e) {
            throw new Exception($e->getMessages());
        }
    }
}
