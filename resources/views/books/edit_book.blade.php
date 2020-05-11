@extends('master')

@section('title_header', trans('books/edit_book.title_header'))

@section('main')

<section class="book_section">
    <div class="container ">
        <div class="page_info">
            <h2>{{ trans('books/edit_book.edit_book') }}</h2>
        </div>
        <form action="{{ route('books.update',$idbook->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group edit_book">
                <label >{{ trans('books/edit_book.name_book') }}</label>
                <input class="form-control" name="name_book" value="{{ $idbook->name_book }}">
                <label>{{ trans('books/edit_book.upload_image') }}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">{{ trans('books/edit_book.upload') }}</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                      aria-describedby="inputGroupFileAddon01" name="image" value="{{ $idbook->image }}">
                        <label class="custom-file-label" for="inputGroupFile01">{{ trans('books/edit_book.choosefile') }}</label>
                    </div>
                </div>
                <label >{{ trans('books/edit_book.category') }}</label>
                <input class="form-control" name="id_category" value="{{ $idbook->category->name_category }}">
                <label >{{ trans('books/edit_book.page_number') }}</label>
                <input class="form-control" name="page_number" value="{{ $idbook->page_number }}">
                <label >{{ trans('books/edit_book.publisher') }}</label>
                <input class="form-control" name="id_publisher" value="{{ $idbook->publisher->name_publisher }}">
                <label >{{ trans('books/edit_book.author') }}</label>
                <input class="form-control" name="id_author" value="{{ $idbook->id_author }}">
                <label >{{ trans('books/add_book.description') }}</label>
                <input class="form-control" name="description" value="{{ $idbook->description }}">
                <div class="form-group edit_btn">
                    <a href="{{ route('books.index')}}" class="btn_book_cancel">{{ trans('books/edit_book.cancel') }}</a>
                    <a class="btn_book_edit" type="submit" class="btn-primary">{{ trans('books/edit_book.edit') }}</a>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
