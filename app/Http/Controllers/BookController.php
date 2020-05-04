<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Rate;
use Validator;
use Auth;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $take = config('setting.take-book');
        $listbook = Book::paginate($take);
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
        $book = [
            'name_book' => $req->name_book,
            'status' => 1,
            'page_nunmber' => $req->page_nunmber,
            'image' => $req->image,
            'description' => $req->description,
            'id_categoty' => $req->id_categoty,
            'id_publisher' => $req->id_publisher,
            'id_author' => $req->id_author,
        ];
        $book = Book::create($book);
        return redirect()->route('books.index')->with('success','New book added successfully!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thisbook = Book::findOrFail($id);
        $cmt = DB::table('rates')->where('id_book', '='.$thisbook)->get();
        // $bookid = Book::findOrFail($id)->get('id');
        // $thisbook = DB::table('books')
        //     ->join('rates', 'rates.id_book', '='.$bookid)
        //     ->select('rates.comment')
        //     ->get();
        return view('books.book_detail', compact('thisbook'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idbook = Book::findOrFail($id);
        return view('books.edit_book', compact('idbook'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $req, Book $idbook)
    {
        $idbook->update($req->all());
        return redirect()->route('books.index')->with('success','Update successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::destroy($id);
        return redirect('books');
    }
}
