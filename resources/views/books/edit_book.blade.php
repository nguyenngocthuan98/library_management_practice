@extends('master')

@section('title_header', trans('books/edit_book.title_header'))

@section('main')

<section class="book_section">

    <div class="container ">
        <div class="page_info">
            <h2><sup>{{ trans('books/edit_book.edit_book') }}</sup><i>{{ $idbook->name_book }}</i></h2>
        </div>
        <form action="{{ route('books.update',$idbook->id) }}" method="POST">
            @csrf
            @method('PUT')
            @if (session('success'))
                <div class="alert alert-success mb-0 mt-2" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="form-group edit_book">
                {{-- hidden id --}}
                <input class="form-control " type="hidden" name="id" value="{{ $idbook->id }}">
                {{-- name --}}
                <label>{{ trans('books/edit_book.name_book') }}</label>
                <input class="form-control @error('name_book') is-invalid @enderror" name="name_book" value="{{ $idbook->name_book }}">
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
                        <option value="{{ $category->id }}" @if($idbook->id_category == $category->id) selected @endif >
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
                <input class="form-control @error('page_number') is-invalid @enderror" name="page_number" value="{{ $idbook->page_number }}">
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
                        <option value="{{ $publisher->id }}" @if($idbook->id_author == $publisher->id) selected @endif >
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
                        <option value="{{ $author->id }}" @if($idbook->id_author == $author->id) selected @endif >
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
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5">{{ $idbook->description }}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                {{-- image --}}
                <label>{{ trans('books/edit_book.upload_image') }}</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" value="{{ $idbook->image }}">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                {{-- show image --}}
                <div class="img text-center">
                    <img class="w-25" src="{{ asset($idbook->image) }}" alt="{{ $idbook->name_book }}">
                </div>
                {{-- confirm --}}
                <div class="form-group edit_btn">
                    <a href="{{ route('books.index')}}" class="btn_book_cancel">{{ trans('books/edit_book.cancel') }}</a>
                    <button class="btn_book_edit" type="submit" class="btn-primary">{{ trans('books/edit_book.edit') }}</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
