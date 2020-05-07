<?php

namespace Tests\Unit\Model;

use App\Models\Follow;
use App\Models\Author;
use App\Models\User;

use Tests\ModelTestCase;

class FollowTest extends ModelTestCase
{
    public function test_model_configuration()
    {
        $this->runConfigurationAssertions(new Follow(), [
            'id_user',
            'id_author',
        ],[
            'created_at', 'updated_at'
        ]);
    }

    //test relation
    public function test_follow_relation_with_user()
    {
        $m = new Follow();
        $r = $m->user();
        $this->assertBelongsToRelation($r, $m, new User(), 'id_user');
    }

    public function test_follow_relation_with_author()
    {
        $m = new Follow();
        $r = $m->author();
        $this->assertBelongsToRelation($r, $m, new Author(), 'id_author');
    }
}
