<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
	public function getModel()
	{
		return User::class;
	}

	public function getUserBySearchName($filters = [], $paginate)
	{
        return User::where('name', 'like', '%'.$filters.'%')
    		->orderBy('id','DESC')->paginate($paginate);
	}
}
