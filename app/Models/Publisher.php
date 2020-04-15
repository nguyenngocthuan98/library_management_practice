<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'publishers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filllable = [
        'name_publisher',
        'email',
        'address',
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
}
