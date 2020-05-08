@extends('master')

@section('title_header', trans('authors/add_author.title_header'))

@section('main')

<section class="book_section">
    <div class="container ">
        <div class="page_info">
            <h2>{{ trans('authors/add_author.btn_add') }}</h2>
        </div>
        <form method="POST" action="{{ route('authors.store') }}">
            @csrf
            @if (session('success'))
                <div class="alert alert-success mb-0 mt-2" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="form-group edit_book">
                <label >{{ trans('authors/add_author.name') }}</label>
                <input class="form-control" type="text" name="name_author" class="form-control @error('name_author') is-invalid @enderror" id="name_author" value="{{  old('name_author') }}">
                @error('name_author')
                    <span class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group edit_btn">
                <a href="{{ route('authors.index') }}" class="btn btn-success">Cancel</a>
                <button class="btn_book_add" type="submit">{{ trans('authors/add_author.add') }}</button>
            </div>
        </form>
    </div>
</section>

@endsection
