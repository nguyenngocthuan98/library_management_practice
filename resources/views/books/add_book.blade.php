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
            <div class="form-group edit_book">
                <label >{{ trans('books/add_book.name_book') }}</label>
                <input class="form-control"  placeholder="" name="name_book" value="{{ old('name_book') }}">
                <label>{{ trans('books/add_book.upload_image') }}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                      aria-describedby="inputGroupFileAddon01" name="image" value="{{ old('image') }}">
                        <label class="custom-file-label" for="inputGroupFile01">Chooser file</label>
                    </div>
                </div>
                <label >{{ trans('books/add_book.category') }}</label>
                <input class="form-control" placeholder="" name="id_category" value="{{ old('id_category') }}">
                <label >{{ trans('books/add_book.page_number') }}</label>
                <input class="form-control" placeholder="" name="page_number" value="{{ old('page_number') }}">
                <label >{{ trans('books/add_book.publisher') }}</label>
                <input class="form-control" placeholder="" name="id_publisher" value="{{ old('id_publisher') }}">
                <label >{{ trans('books/add_book.author') }}</label>
                <input class="form-control" placeholder="" name="id_author" value="{{ old('id_author') }}">
                <label >{{ trans('books/add_book.description') }}</label>
                <input class="form-control" placeholder="" name="description" value="{{ old('description') }}">
                <div class="form-group edit_btn">
                    <button class="btn_book_add" type="submit" class="btn-primary">{{ trans('books/add_book.add') }}</button>
                </div>
            </div>
        </form>
        <a href="{{ route('books.index')}}"><button class="btn_book_cancel">{{ trans('books/add_book.cancel') }}</button></a>
    </div>
</section>

@endsection
