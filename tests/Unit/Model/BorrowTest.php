<?php

namespace Tests\Unit\Model;

use App\Models\Borrow;
use App\Models\User;
use App\Models\Book;

use Tests\ModelTestCase;

class BorrowTest extends ModelTestCase
{
    public function test_model_configuration()
    {
        $this->runConfigurationAssertions(new Borrow(), [
        'date_pay',
        'accept',
        'id_user',
        'id_book',
        ],[
            'created_at', 'updated_at'
        ]);
    }

    //test relation
    public function test_borrow_relation_with_user()
    {
        $m = new Borrow();
        $r = $m->user();
        $this->assertBelongsToRelation($r, $m, new User(), 'id_user');
    }

    public function test_borrow_relation_with_book()
    {
        $m = new Borrow();
        $r = $m->book();
        $this->assertBelongsToRelation($r, $m, new Book(), 'id_book');
    }
}
