<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Book;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_category',
        'id_parent',
    ];

    /**
     * Enable timestamps
     */
    public $timestamps = true;

    /**
     * Relationships
     */
    public function books(){
        return $this->hasMany(Book::class, 'id_category');
    }

    public function children(){
        return $this->hasMany(Category::class, 'id_parent');
    }

}
