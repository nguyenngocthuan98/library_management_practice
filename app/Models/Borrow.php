<?php

namespace App\Models;

use App\Models\User;
use App\Models\Book;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    const WAITING = 0;
    const BORROWING = 1;
    const DECLINED = 2;
    const RETURN = 3;

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
    protected $fillable = [
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
    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function book(){
        return $this->belongsTo(Book::class, 'id_book');
    }

}
