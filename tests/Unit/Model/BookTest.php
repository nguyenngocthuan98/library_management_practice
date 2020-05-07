<?php

namespace Tests\Unit\Model;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Rate;
use App\Models\Like;
use App\Models\Comment;

use Tests\ModelTestCase;


class BookTest extends ModelTestCase
{
    public function test_model_configuration()
    {
        $this->runConfigurationAssertions(new Book(), [
            'name_book',
            'status',
            'page_number',
            'image',
            'description',
            'id_category',
            'id_publisher',
            'id_author',
        ],[
            'created_at', 'updated_at'
        ]);
    }

    //test relation
    public function test_book_relation_with_author()
    {
        $m = new Book();
        $r = $m->author();
        $this->assertBelongsToRelation($r, $m, new Author(), 'id_author');
    }

    public function test_book_relation_with_publisher()
    {
        $m = new Book();
        $r = $m->publisher();
        $this->assertBelongsToRelation($r, $m, new Publisher(), 'id_publisher');
    }

    public function test_book_relation_with_category()
    {
        $m = new Book();
        $r = $m->category();
        $this->assertBelongsToRelation($r, $m, new Category(), 'id_category');
    }

    public function test_book_relation_with_rate()
    {
        $m = new Book();
        $r = $m->rates();
        $this->assertHasManyRelation($r, $m, new Rate(), 'id_book');
    }

    public function test_book_relation_with_like()
    {
        $m = new Book();
        $r = $m->rates();
        $this->assertHasManyRelation($r, $m, new Like(), 'id_book');
    }

    public function test_book_relation_with_comment()
    {
        $m = new Book();
        $r = $m->rates();
        $this->assertHasManyRelation($r, $m, new Comment(), 'id_book');
    }
}
