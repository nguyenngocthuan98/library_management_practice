<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Author;

class AuthorComposer
{
    public $authors;

    public function __construct()
    {
        $this->authors = Author::all();
    }

    public function compose(View $view)
    {
        $view->with('authors', end($this->authors));
    }
}
