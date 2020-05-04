<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'books';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_book',
        'status',
        'page_number',
        'image',
        'description',
        'id_category',
        'id_publisher',
        'id_author',
    ];

    /**
     * Disable timestamps
     */
    public $timestamps = false;

    /**
     * Relationships
     */
    public function authors(){
        return $this->hasOne(Author::class);
    }

    public function publishers(){
        return $this->hasOne(Publisher::class);
    }

    public function categories(){
        return $this->hasOne(Category::class);
    }

    public function borrows(){
        return $this->hasOne(Borrow::class);
    }

    public function rate(){
        return $this->belongsto(Rate::class);
    }
}
