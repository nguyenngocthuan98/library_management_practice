<?php

namespace Tests\Unit\Model;

use App\Models\Publisher;
use App\Models\Book;

use Tests\ModelTestCase;

class PublisherTest extends ModelTestCase
{
    public function test_model_configuration()
    {
        $this->runConfigurationAssertions(new Publisher(), [
            'name_publisher',
            'email',
            'address',
        ],[
            'created_at', 'updated_at'
        ]);
    }

    //test relation
    public function test_publisher_relation_with_book()
    {
        $m = new Publisher();
        $r = $m->books();
        $this->assertHasManyRelation($r, $m, new Book(), 'id_publisher');
    }
}
