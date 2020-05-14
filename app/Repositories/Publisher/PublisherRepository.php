<?php

namespace App\Repositories\Publisher;

use App\Models\Publisher;
use App\Repositories\BaseRepository;

class PublisherRepository extends BaseRepository implements PublisherRepositoryInterface
{
	public function getModel()
	{
		return Publisher::class;
	}
	public function getPublisherBySearchName($filters = [], $pagi)
	{
        return Publisher::where('name_publisher', 'like', '%'.$filters.'%')
    		->orderBy('id','DESC')->paginate($pagi);
	}
}
