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
                @if (session('create_success'))
                    <div class="alert alert-success mb-0 mt-2" role="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('create_success') }}
                    </div>
                @endif
                {{-- name --}}
                <label for="name" >{{ trans('users/add_user.name') }}</label>
                @error('name')
                    <span class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="{{ trans('users/add_user.ex_name') }}" required autocomplete="name" autofocus>
                {{-- birth --}}
                <label for="birth" >{{ trans('users/add_user.birth') }}</label>
                @error('birth')
                    <span class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="birth" type="date" value="{{ old('birth') }}" class="form-control @error('birth') is-invalid @enderror" name="birth" placeholder="{{ trans('users/add_user.ex_birth') }}" autofocus>
                {{-- gender --}}
                <label >{{ trans('users/add_user.gender') }}</label>
                <select class="form-control" name="gender" value="{{ old('gender') }}">
                      <option>0</option>
                      <option>1</option>
                      <option>2</option>
                </select>
                {{-- phone --}}
                <label >{{ trans('users/add_user.phone') }}</label>
                @error('phone')
                    <span class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input class="form-control" name="phone" value="{{ old('phone') }}" placeholder="{{ trans('users/add_user.ex_phone') }}">
                {{-- mail --}}
                <label >{{ trans('users/add_user.email') }}</label>
                @error('email')
                    <span class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ trans('users/add_user.ex_email') }}">
                {{-- address --}}
                <label >{{ trans('users/add_user.address') }}</label>
                @error('address')
                    <span class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input class="form-control" name="address" value="{{ old('address') }}" placeholder="{{ trans('users/add_user.ex_address') }}">
                {{-- role --}}
                <label >{{ trans('users/add_user.role') }}</label>
                @error('role')
                    <span class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <select class="form-control" name="role" >
                      <option>0</option>
                      <option>1</option>
                </select>
                {{-- password --}}
                <label for="password" >{{ trans('users/add_user.password') }}</label>
                @error('password')
                    <span class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ trans('users/add_user.ex_password') }}" name="password" required autocomplete="new-password">
                {{-- confirm_password --}}
                <label for="password-confirm" >{{ trans('users/add_user.confirm_password') }}</label>
                @error('confirm_password')
                    <span class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input class="form-control" id="password-confirm" type="password" name="password_confirmation" placeholder="{{ trans('users/add_user.ex_confirm_password') }}" required autocomplete="new-password">
                {{-- submit --}}
                <div class="form-group edit_btn">
                    <button class="btn_book_cancel" > <a href="{{ route('users.index') }}">{{ trans('users/add_user.cancel') }}</a></button>
                    <button class="btn_book_add" type="submit">{{ trans('users/add_user.add') }}</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection