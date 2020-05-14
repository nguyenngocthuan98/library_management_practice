@extends('master')

@section('title_header', trans('books/add_book.title_header'))

@section('main')

<section class="book_section">
    <div class="container ">
        <div class="page_info">
            <h2>{{ trans('books/add_book.add_book') }}</h2>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                {{ trans('books/add_book.error_require') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('books.store') }}">
            @csrf
            @if (session('success'))
                <div class="alert alert-success mb-0 mt-2" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="form-group edit_book">
                {{-- name --}}
                <label>{{ trans('books/edit_book.name_book') }}</label>
                <input class="form-control @error('name_book') is-invalid @enderror" name="name_book" value="{{ old('name_book') }}">
                    @error('name_book')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                {{-- category --}}
                <label>{{ trans('books/edit_book.category') }}</label>
                <select class="custom-select" name="id_category">
                    <option></option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            @if( old('category'))
                                @if (old('category') == $category->id) selected @endif
                            @endif >
                            {{ $category->name_category }}
                        </option>
                    @endforeach
                </select>
                    @error('id_category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                {{-- page number --}}
                <label>{{ trans('books/edit_book.page_number') }}</label>
                <input class="form-control @error('page_number') is-invalid @enderror" name="page_number" value="{{ old('page_number') }}">
                    @error('page_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                {{-- publisher --}}
                <label>{{ trans('books/edit_book.publisher') }}</label>
                <select class="custom-select" name="id_publisher">
                    <option></option>
                    @foreach ($publishers as $publisher)
                         <option value="{{ $publisher->id }}"
                            @if( old('publisher'))
                                @if (old('publisher') == $publisher->id) selected @endif
                            @endif >
                            {{ $publisher->name_publisher }}
                        </option>
                    @endforeach
                </select>
                    @error('id_publisher')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                {{-- author --}}
                <label>{{ trans('books/edit_book.author') }}</label>
                <select class="custom-select" name="id_author">
                    <option></option>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}"
                            @if( old('author'))
                                @if (old('author') == $author->id) selected @endif
                            @endif >
                            {{ $author->name_author }}
                        </option>
                    @endforeach
                </select>
                    @error('id_author')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                {{-- description --}}
                <label>{{ trans('books/add_book.description') }}</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                {{-- image --}}
                <label>{{ trans('books/edit_book.upload_image') }}</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" value="{{ old('image') }}">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                {{-- confirm --}}
                <div class="form-group edit_btn">
                    <a href="{{ route('books.index')}}" class="btn_book_cancel">{{ trans('books/edit_book.cancel') }}</a>
                    <button class="btn_book_edit" type="submit" class="btn-primary">{{ trans('books/add_book.add') }}</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
