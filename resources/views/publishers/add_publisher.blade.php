@extends('master')

@section('title_header', trans('publishers/add_publisher.title_header'))

@section('main')

<section class="book_section">
    <div class="container ">
        <div class="page_info">
            <h2>{{ trans('publishers/add_publisher.btn_add') }}</h2>
        </div>
        <form method="GET" action="">
            <div class="form-group edit_book">
                <label >{{ trans('publishers/add_publisher.name') }}</label>
                <input class="form-control" placeholder="{{ trans('publishers/add_publisher.ex_name') }}">
                <label >{{ trans('publishers/add_publisher.email') }}</label>
                <input class="form-control" placeholder="{{ trans('publishers/add_publisher.ex_email') }}">
                <label >{{ trans('publishers/add_publisher.address') }}</label>
                <input class="form-control" placeholder="{{ trans('publishers/add_publisher.ex_address') }}">
                <div class="form-group edit_btn">
                    <button class="btn_book_cancel" type="submit" class="btn-primary">{{ trans('publishers/add_publisher.cancel') }}</button>
                    <button class="btn_book_add" type="submit" class="btn-primary">{{ trans('publishers/add_publisher.add') }}</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection