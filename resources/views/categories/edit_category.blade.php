@extends('master')

@section('title_header', trans('categories/edit_category.title_header'))

@section('main')

<section class="group_section">
    <div class="container ">
        <div class="page_info">
            <h2>{{ trans('categories/edit_category.btn_edit') }}</h2>
        </div>
        <form method="GET" action="">
            <div class="form-group edit_book">
                <label >{{ trans('categories/edit_category.name') }}</label>
                <input class="form-control">
                <label >{{ trans('categories/edit_category.id_parent') }}</label>
                <input class="form-control" >
                <label >{{ trans('categories/edit_category.path') }}</label>
                <input class="form-control">
                <div class="form-group edit_btn">
                    <button class="btn_book_cancel" type="submit" class="btn-primary">{{ trans('categories/edit_category.cancel') }}</button>
                    <button class="btn_book_add" type="submit" class="btn-primary">{{ trans('categories/edit_category.edit') }}</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection