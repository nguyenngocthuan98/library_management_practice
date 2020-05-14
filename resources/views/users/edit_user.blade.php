@extends('master')

@section('title_header', trans('users/edit_user.title_header'))

@section('main')

<section class="book_section">
    <div class="container ">
        <div class="page_info">
            <h2>{{ trans('users/edit_user.edit_user') }}</h2>
        </div>
        <form method="POST" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group edit_book">
                @if (session('update_success'))
                    <div class="alert alert-success mb-0 mt-2" role="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('update_success') }}
                    </div>
                @endif

                <label >{{ trans('users/edit_user.name') }}</label>
                <input class="form-control" name="name" id="" value="{{ $user->name }}">


                <label >{{ trans('users/edit_user.email') }}</label>
                <input class="form-control" name="email" value="{{ $user->email }}">

                <label >{{ trans('users/edit_user.role') }}</label>
                <select class="form-control" name="role" >
                      <option>{{ $user->role }}</option>
                      <option>0</option>
                      <option>1</option>
                </select>

                <label >{{ trans('users/edit_user.birth') }}</label>
                    <input id="birth" type="date" class="form-control @error('birth') is-invalid @enderror" name="birth" value="{{ $user->birth }}" autofocus>

                <label >{{ trans('users/edit_user.address') }}</label>
                <input class="form-control" name="address" value="{{ $user->address }}">

                <label >{{ trans('users/edit_user.gender') }}</label>
                <select class="form-control" name="gender">
                      <option>{{ $user->gender }}</option>
                      <option>0</option>
                      <option>1</option>
                      <option>2</option>
                </select>

                <label >{{ trans('users/edit_user.phone') }}</label>
                <input class="form-control" name="phone" value="{{ $user->phone }}">

                <div class="form-group edit_btn">
                    <a class="btn_book_cancel" href="{{ route('users.index') }}">{{ trans('users/edit_user.cancel') }}</a>
                    <button class="btn_book_add" type="submit" class="btn-primary">{{ trans('users/edit_user.edit') }}</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection