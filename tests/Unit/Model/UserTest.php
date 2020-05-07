<?php

namespace Tests\Unit\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Tests\ModelTestCase;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Follow;
use App\Models\Rate;
use App\User;
use Mockery as m;
class UserTest extends ModelTestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_model_configuration()
    {
   		$this->runConfigurationAssertions(new User(), [
   			'name',
        'email',
        'password',
        'role',
        'birth',
        'address',
        'gender',
        'phone',
   		],[
   			'password',
   			'remember_token',
   		],[
   			'id' => 'int',
	   		'email_verified_at' => 'datetime',
   		]);
    }

    public function test_relation_comment(){
        $m = new User();
        $r = $m->comments();
        $this->assertHasManyRelation($r, $m, new Comment(), 'id_user');
    }

    public function test_relation_follow(){
        $m = new User();
        $r = $m->follows();
        $this->assertHasManyRelation($r, $m, new Follow(), 'id_user');
    }

    public function test_relation_like(){
        $m = new User();
        $r = $m->likes();
        $this->assertHasManyRelation($r, $m, new Like(), 'id_user');
    }

    public function test_relation_rate(){
        $m = new User();
        $r = $m->rates();
        $this->assertHasManyRelation($r, $m, new Rate(), 'id_user');
    }
}
