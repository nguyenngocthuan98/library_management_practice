<?php
namespace App\Http\Controllers;

use Auth;
use App\Models\Book;
use App\Models\Rate;
use App\Http\Requests\BookRequest;
use App\Repositories\Book\BookRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;

class BookController extends Controller
{
    protected $bookRepo;

    public function __construct(BookRepositoryInterface $book)
    {
        $this->bookRepo = $book;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $take = config('setting.take-book');
        $listbook = $this->bookRepo->paginate('id','DESC',$take);

        return view('books.book_list' ,compact('listbook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.add_book');
    }

    /**
     * Store a newly created resource in storage.
     * Status have 3 state: 1 is Still, 0 is Borrowed, another is Unknown
     * Status auto create with 1: Still
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $req)
    {
        try {
            $book = [
                'name_book' => $req->name_book,
                'page_number' => $req->page_number,
                'image' => $req->image,
                'description'  => $req->description,
                'id_publisher' => $req->id_publisher,
                'id_category' => $req->id_category,
                'id_author' => $req->id_author,
            ];
            $this->bookRepo->create($book);

            return redirect()->back()->with(['success' => trans('books/book.success') ]);
        } catch (ModelNotFoundException $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $thisbook = $this->bookRepo->findOrFail($id);

            return view('books.book_detail', compact('thisbook'));
        } catch (ModelNotFoundException $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idbook = $this->bookRepo->findOrFail($id);

        return view('books.edit_book', compact('idbook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $req, $id)
    {
        try {
            $book = [
                'name_book' => $req->name_book,
                'page_number' => $req->page_number,
                'image' => $req->image,
                'description'  => $req->description,
                'id_publisher' => $req->id_publisher,
                'id_category' => $req->id_category,
                'id_author' => $req->id_author,
            ];
            $this->bookRepo->update($id, $book);

            return redirect()->back()->with(['success' => trans('books/book.success') ]);
        } catch (ModelNotFoundException $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $book = $this->bookRepo->delete($id);

            return redirect('books');
        } catch (ModelNotFoundException $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
