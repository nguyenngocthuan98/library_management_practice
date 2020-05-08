<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthorController;
use App\Http\Requests\AuthorRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = config('setting.paginate');
        $filters = request()->only('key');

        if($filters){
            // for search
            $author = Author::where('name_author', 'like', '%'.$filters['key'].'%')->orderBy('id','DESC')->paginate($paginate);
        }
        else{
            $author = Author::orderBy('id','DESC')->paginate($paginate);
        }

        return view('authors.author', compact('author'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.add_author');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorRequest $req)
    {
        $author = [
            'name_author' => $req->name_author,
        ];
        Author::create($author);

        return redirect()->back()->with(['success'=> 'Success' ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $author = Author::where('id', $id)->first();

            return view('authors.edit_author', ['author' => $author]);
        } catch (ModelNotFoundException $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorRequest $req, $id)
    {
        $author = [
            'name_author' => $req->name_author,
        ];
        Author::where('id', '=', $id)->update($author);

        return redirect()->back()->with(['success'=> 'Success' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = Author::destroy($id);
        return redirect('authors');
    }
}
