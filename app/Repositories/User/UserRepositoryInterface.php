<?php 

namespace App\Repositories\User;

interface UserRepositoryInterface
{
	public function getUserBySearchName($filters = [], $paginate);
}
