<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'authors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filllable = [
        'name_author',
    ];

    /**
     * Disable timestamps
     */
    public $timestamps = false;

    /**
     * Relationships
     */
    public function book(){
        return $this->belongsto(Book::class);
    }

    public function follow(){
        return $this->belongsto(Follow::class);
    }
}
