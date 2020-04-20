@extends('master')

@section('title_header', trans('publishers/edit_publisher.title_header'))

@section('main')

<section class="book_section">
    <div class="container ">
        <div class="page_info">
            <h2>{{ trans('publishers/edit_publisher.btn_edit') }}</h2>
        </div>
        <form method="GET" action="">
            <div class="form-group edit_book">
                <label >{{ trans('publishers/edit_publisher.name') }}</label>
                <input class="form-control" >
                <label >{{ trans('publishers/edit_publisher.email') }}</label>
                <input class="form-control">
                <label >{{ trans('publishers/edit_publisher.address') }}</label>
                <input class="form-control">
                <div class="form-group edit_btn">
                    <button class="btn_book_cancel" type="submit" class="btn-primary">{{ trans('publishers/edit_publisher.cancel') }}</button>
                    <button class="btn_book_add" type="submit" class="btn-primary">{{ trans('publishers/edit_publisher.edit') }}</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection