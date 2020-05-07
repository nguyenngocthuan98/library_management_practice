<?php

namespace Tests\Unit\Model;

use App\Models\Comment;
use App\Models\Book;
use App\Models\User;

use Tests\ModelTestCase;

class CommentTest extends ModelTestCase
{
    public function test_model_configuration()
    {
        $this->runConfigurationAssertions(new Comment(), [
            'comment',
            'id_user',
            'id_book',
        ],[
            'created_at', 'updated_at'
        ]);
    }

    //test relation
    public function test_comment_relation_with_user()
    {
        $m = new Comment();
        $r = $m->user();
        $this->assertBelongsToRelation($r, $m, new User(), 'id_user');
    }

    public function test_comment_relation_with_book()
    {
        $m = new Comment();
        $r = $m->book();
        $this->assertBelongsToRelation($r, $m, new Book(), 'id_book');
    }
}
