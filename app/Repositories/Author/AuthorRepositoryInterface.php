<?php 

namespace App\Repositories\Author;

interface AuthorRepositoryInterface
{
	public function getAuthorBySearchName($filters = [], $paginate);
}
