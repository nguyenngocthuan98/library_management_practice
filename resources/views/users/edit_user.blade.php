@extends('master')

@section('title_header', trans('users/edit_user.title_header'))

@section('main')

<section class="book_section">
    <div class="container ">
        <div class="page_info">
            <h2>{{ trans('users/edit_user.edit_user') }}</h2>
        </div>
        <form method="POST" action="{{ url('users/'.$user->id) }}">
            <div class="form-group edit_book">
                <label >{{ trans('users/edit_user.name') }}</label>
                <input class="form-control" name="username" value="{{ $user->name }}">
                <label >{{ trans('users/edit_user.birth') }}</label>
                <input class="form-control" value="{{ $user->birth }}">
                <label >{{ trans('users/edit_user.gender') }}</label>
                <select class="form-control" >
                      <option>{{ $user->gender }}</option>
                      <option>0</option>
                      <option>1</option>
                      <option>2</option>
                </select>
                <label >{{ trans('users/edit_user.phone') }}</label>
                <input class="form-control" value="{{ $user->phone }}">
                <label >{{ trans('users/edit_user.email') }}</label>
                <input class="form-control" value="{{ $user->email }}">
                <label >{{ trans('users/edit_user.address') }}</label>
                <input class="form-control" value="{{ $user->address }}">
                <label >{{ trans('users/edit_user.role') }}</label>
                <select class="form-control" >
                      <option>{{ $user->role }}</option>
                      <option>0</option>
                      <option>1</option>
                </select>
                <label >{{ trans('users/add_user.password') }}</label>
                <input class="form-control" type="password" value="{{ $user->password }}" >
                <div class="form-group edit_btn">
                    <button class="btn_book_cancel"><a href="{{ url()->previous() }}">{{ trans('users/edit_user.cancel') }}</a></button>
                    <button class="btn_book_add" type="submit" class="btn-primary">{{ trans('users/edit_user.edit') }}</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection