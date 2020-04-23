@extends('master')

@section('title_header', trans('users/add_user.title_header'))

@section('main')

<section class="book_section">
    <div class="container ">
        <div class="page_info">
            <h2>{{ trans('users/add_user.add_user') }}</h2>
        </div>
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="form-group edit_book">
                <label >{{ trans('users/add_user.name') }}</label>
                <input class="form-control"  placeholder="{{ trans('users/add_user.ex_name') }}">
                <label >{{ trans('users/add_user.birth') }}</label>
                <input class="form-control" placeholder="{{ trans('users/add_user.ex_birth') }}">
                <label >{{ trans('users/add_user.gender') }}</label>
                <select class="form-control" >
                      <option>0</option>
                      <option>1</option>
                      <option>2</option>
                </select>
                <label >{{ trans('users/add_user.phone') }}</label>
                <input class="form-control" placeholder="{{ trans('users/add_user.ex_phone') }}">
                <label >{{ trans('users/add_user.email') }}</label>
                <input class="form-control" placeholder="{{ trans('users/add_user.ex_email') }}">
                <label >{{ trans('users/add_user.address') }}</label>
                <input class="form-control" placeholder="{{ trans('users/add_user.ex_address') }}">
                <label >{{ trans('users/add_user.role') }}</label>
                <select class="form-control" >
                      <option>0</option>
                      <option>1</option>
                </select>
                <label >{{ trans('users/add_user.password') }}</label>
                <input class="form-control" placeholder="{{ trans('users/add_user.ex_password') }}">
                <label >{{ trans('users/add_user.confirm_password') }}</label>
                <input class="form-control" placeholder="{{ trans('users/add_user.ex_confirm_password') }}">
                <div class="form-group edit_btn">
                    <button class="btn_book_cancel" > <a href="{{url()->previous()}}">{{ trans('users/add_user.cancel') }}</a></button>
                    <button class="btn_book_add" type="submit">{{ trans('users/add_user.add') }}</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection