<?php

namespace App\Models;

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
    protected $filllable = [
        'name_category',
        'id_parent',
        'path',
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

    public function children(){
        return $this->hasMany(Category::class, 'id_parent');
    }

}
