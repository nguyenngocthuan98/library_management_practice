@extends('master')

@section('title_header', trans('users/edit_user.title_header'))

@section('main')

<section class="book_section">
    <div class="container ">
        <div class="page_info">
            <h2>{{ trans('users/edit_user.edit_user') }}</h2>
        </div>
        <form method="GET" action="">
            <div class="form-group edit_book">
                <label >{{ trans('users/edit_user.name') }}</label>
                <input class="form-control"  placeholder="Name User">
                <label >{{ trans('users/edit_user.birth') }}</label>
                <input class="form-control" placeholder="Birth">
                <label >{{ trans('users/edit_user.gender') }}</label>
                <input class="form-control" placeholder="Gender">
                <label >{{ trans('users/edit_user.phone') }}</label>
                <input class="form-control" placeholder="Phone">
                <label >{{ trans('users/edit_user.email') }}</label>
                <input class="form-control" placeholder="Email">
                <label >{{ trans('users/edit_user.address') }}</label>
                <input class="form-control" placeholder="Address">
                <label >{{ trans('users/edit_user.role') }}</label>
                <input class="form-control" placeholder="Role">
                <div class="form-group edit_btn">
                    <button class="btn_book_cancel" type="submit" class="btn-primary">{{ trans('users/edit_user.cancel') }}</button>
                    <button class="btn_book_add" type="submit" class="btn-primary">{{ trans('users/edit_user.edit') }}</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection