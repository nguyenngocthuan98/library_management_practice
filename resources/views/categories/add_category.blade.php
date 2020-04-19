@extends('master')

@section('title_header', trans('categories/add_category.title_header'))

@section('main')

<section class="group_section">
    <div class="container ">
        <div class="page_info">
            <h2>{{ trans('categories/add_category.btn_add') }}</h2>
        </div>
        <form method="GET" action="">
            <div class="form-group edit_book">
                <label >{{ trans('categories/add_category.name') }}</label>
                <input class="form-control"  placeholder="{{ trans('categories/add_category.name') }}">
                <label >{{ trans('categories/add_category.id_parent') }}</label>
                <input class="form-control"  placeholder="{{ trans('categories/add_category.ex_parent') }}">
                <label >{{ trans('categories/add_category.path') }}</label>
                <input class="form-control"  placeholder="{{ trans('categories/add_category.path') }}">
                <div class="form-group edit_btn">
                    <button class="btn_book_cancel" type="submit" class="btn-primary">{{ trans('categories/add_category.cancel') }}</button>
                    <button class="btn_book_add" type="submit" class="btn-primary">{{ trans('categories/add_category.add') }}</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection