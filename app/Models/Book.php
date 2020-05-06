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
    public function author(){
        return $this->belongsto(Author::class, 'id_author');
    }

    public function publisher(){
        return $this->belongsto(Publisher::class, 'id_publisher');
    }

    public function category(){
        return $this->belongsto(Category::class, 'id_category');
    }

    public function rates(){
        return $this->hasMany(Rate::class, 'id_book');
    }

    public function likes(){
        return $this->hasMany(Rate::class, 'id_book');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'id_book');
    }
}
