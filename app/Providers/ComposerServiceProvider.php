<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
                'books.edit_book',
                'books.add_book',
            ],
            'App\Http\ViewComposers\AuthorComposer'
        );

        view()->composer([
                'books.edit_book',
                'books.add_book',
            ],
            'App\Http\ViewComposers\PublisherComposer'
        );

        view()->composer([
                'books.edit_book',
                'books.add_book',
                'books.book'
            ],
            'App\Http\ViewComposers\CategoryComposer'
        );
    }
}
