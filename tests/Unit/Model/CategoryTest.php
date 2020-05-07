<?php

namespace Tests\Unit\Model;

use App\Models\Book;
use App\Models\Category;

use Tests\ModelTestCase;

class CategoryTest extends ModelTestCase
{
    public function test_model_configuration()
    {
        $this->runConfigurationAssertions(new Category(), [
            'name_category',
            'id_parent',
        ],[
            'created_at', 'updated_at'
        ]);
    }

    //test relation
    public function test_category_relation_with_book()
    {
        $m = new Category();
        $r = $m->books();
        $this->assertHasManyRelation($r, $m, new Book(), 'id_category');
    }

    public function test_book_relation_with_category_children()
    {
        $m = new Category();
        $r = $m->children();
        $this->assertHasManyRelation($r, $m, new Category(), 'id_parent');
    }
}
