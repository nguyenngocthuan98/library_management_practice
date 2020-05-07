<?php

namespace Tests\Unit\Model;

use App\Models\Book;
use App\Models\Author;
use App\Models\Follow;

use Tests\ModelTestCase;

class AuthorTest extends ModelTestCase
{
    public function test_model_configuration()
    {
        $this->runConfigurationAssertions(new Author(), [
            'name_author',
        ],[
            'created_at', 'updated_at'
        ]);
    }

    //test relation
    public function test_author_relation_with_book()
    {
        $m = new Author();
        $r = $m->books();
        $this->assertHasManyRelation($r, $m, new Book(), 'id_author');
    }

    public function test_author_relation_with_follow()
    {
        $m = new Author();
        $r = $m->follows();
        $this->assertHasManyRelation($r, $m, new Follow(), 'id_author');
    }
}
