<?php

namespace Tests\Unit\Model;

use App\Models\Like;
use App\Models\Book;
use App\Models\User;

use Tests\ModelTestCase;

class LikeTest extends ModelTestCase
{
    public function test_model_configuration()
    {
        $this->runConfigurationAssertions(new Like(), [
            'like',
            'id_user',
            'id_book',
        ],[
            'created_at', 'updated_at'
        ]);
    }

    //test relation
    public function test_like_relation_with_user()
    {
        $m = new Like();
        $r = $m->user();
        $this->assertBelongsToRelation($r, $m, new User(), 'id_user');
    }

    public function test_like_relation_with_book()
    {
        $m = new Like();
        $r = $m->book();
        $this->assertBelongsToRelation($r, $m, new Book(), 'id_book');
    }
}
