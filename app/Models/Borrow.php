<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'borrows';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filllable = [
        'date_pay',
        'accept',
        'id_user',
        'id_book',
    ];

    /**
     * Enable timestamps
     */
    public $timestamps = true;

    /**
     * Relationships
     */
    public function users(){
        return $this->hasOne(User::class);
    }

    public function books(){
        return $this->hasOne(Book::class);
    }

}
