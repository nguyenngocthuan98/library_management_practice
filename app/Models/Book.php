<?php

namespace App\Models;

use App\Models\Author;
use App\Models\Rate;
use App\Models\Category;
use App\Models\Like;
use App\Models\Publisher;
use App\Models\Comment;
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
     * Enable timestamps
     */
    public $timestamps = true;

    /**
     * Relationships
     */
    public function author(){
        return $this->belongsTo(Author::class, 'id_author');
    }

    public function publisher(){
        return $this->belongsTo(Publisher::class, 'id_publisher');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function rates(){
        return $this->hasMany(Rate::class, 'id_book');
    }

    public function likes(){
        return $this->hasMany(Like::class, 'id_book');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'id_book');
    }
}
