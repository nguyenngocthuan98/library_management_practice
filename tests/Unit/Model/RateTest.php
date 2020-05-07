<?php

namespace Tests\Unit\Model;

use App\Models\Rate;
use App\Models\Book;
use App\Models\User;

use Tests\ModelTestCase;

class RateTest extends ModelTestCase
{
    public function test_model_configuration()
    {
        $this->runConfigurationAssertions(new Rate(), [
            'rate',
            'id_user',
            'id_book',
        ],[
            'created_at', 'updated_at'
        ]);
    }

    //test relation
    public function test_rate_relation_with_user()
    {
        $m = new Rate();
        $r = $m->user();
        $this->assertBelongsToRelation($r, $m, new User(), 'id_user');
    }

    public function test_rate_relation_with_book()
    {
        $m = new Rate();
        $r = $m->book();
        $this->assertBelongsToRelation($r, $m, new Book(), 'id_book');
    }
}
