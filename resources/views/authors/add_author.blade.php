@extends('master')

@section('title_header', trans('authors/add_author.title_header'))

@section('main')

<section class="book_section">
    <div class="container ">
        <div class="page_info">
            <h2>{{ trans('authors/add_author.btn_add') }}</h2>
        </div>
        <form method="GET" action="">
            <div class="form-group edit_book">
                <label >{{ trans('authors/add_author.name') }}</label>
                <input class="form-control"  placeholder="{{ trans('authors/add_author.add_name') }}">
                <div class="form-group edit_btn">
                    <button class="btn_book_cancel" type="submit" >{{ trans('authors/add_author.cancel') }}</button>
                    <button class="btn_book_add" type="submit">{{ trans('authors/add_author.add') }}</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection