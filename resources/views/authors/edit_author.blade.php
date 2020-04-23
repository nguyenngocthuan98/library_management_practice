@extends('master')

@section('title_header', trans('authors/edit_author.title_header'))

@section('main')

<section class="book_section">
    <div class="container ">
        <div class="page_info">
            <h2>{{ trans('authors/edit_author.btn_edit') }}</h2>
        </div>
        <form method="GET" action="">
            <div class="form-group edit_book">
                <label >{{ trans('authors/edit_author.name') }}</label>
                <input class="form-control" value="{{ $author->name_author }}">
                <div class="form-group edit_btn">
                    <button class="btn_book_cancel" type="submit"><a href="{{ route('back') }}">{{ trans('authors/edit_author.cancel') }}</a></button>
                    <button class="btn_book_add" type="submit">{{ trans('authors/edit_author.edit') }}</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection