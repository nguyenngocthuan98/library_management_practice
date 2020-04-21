<?php
use App\Enums\Book;
/**
 *
 */
class BookHelper
{
    public static function getRole($key)
    {
        switch ($key) {
            case Book::Borrowed:
                return 'Borrowed';
                break;
            case Book::Still:
                return 'Still';
                break;
            default:
                return 'Unknown';
                break;
        }
    }
    public static function getOptionRole(){
        return array(
            Book::Borrowed => trans('books/book.borrowed'),
            Book::Still => trans('books/book.still'),
        );
    }
    // count numerical order
    public static function increment($i , $perPage, $currentPage){
        return $i + $perPage * ($currentPage - 1);
    }
}

?>
