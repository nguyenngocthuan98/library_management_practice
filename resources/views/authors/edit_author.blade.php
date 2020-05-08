@extends('master')

@section('title_header', trans('authors/edit_author.title_header'))

@section('main')

<section class="book_section">
    <div class="container ">
        <div class="page_info">
            <h2>{{ trans('authors/edit_author.btn_edit') }}</h2>
        </div>
        <form method="POST" action="{{ route('authors.update', ['author' => $author->id]) }}">
            @csrf
            @method('PUT')
            @if (session('success'))
                <div class="alert alert-success mb-0 mt-2" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="form-group edit_book">
                <label >{{ trans('authors/edit_author.name') }}</label>
                <input class="form-control" name="name_author" type="text" value="{{ $author->name_author }}" >
                @error('name_author')
                    <span class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="form-group edit_btn">
                    <a href="{{ route('authors.index') }}" class="btn btn-success">Cancel</a>
                    <button class="btn_book_add" type="submit">{{ trans('authors/edit_author.edit') }}</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
