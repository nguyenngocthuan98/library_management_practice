<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Publisher;

class PublisherComposer
{
    public $publishers;

    public function __construct()
    {
        $this->publishers = Publisher::all();
    }

    public function compose(View $view)
    {
        $view->with('publishers', end($this->publishers));
    }
}
