<?php

namespace App\Repositories\Author;

use App\Models\Author;
use App\Repositories\BaseRepository;

class AuthorRepository extends BaseRepository implements AuthorRepositoryInterface
{
	public function getModel()
	{
		return Author::class;
	}

	public function getAuthorBySearchName($filters = [], $paginate)
	{
        return Author::where('name_author', 'like', '%'.$filters.'%')
    		->orderBy('id','DESC')->paginate($paginate);
	}
}
