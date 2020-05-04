@extends('master')

@section('title_header', trans('books/book_detail.title_header'))

@section('main')

<!-- Detail book section -->
    <section class="book_detail_page">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="book_preview">
                        <img src="{{ $thisbook->image }}" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="gs_meta">
                        <h3 class="gs_title"><b>{{ $thisbook->name_book }}</b></h3>
                        <h3>{{ trans('books/book_detail.author') }}: {{ $thisbook->id_author }}</h3>
                        <h3>{{ trans('books/book_detail.status') }}: {{ BookHelper::getRole($thisbook->status) }}</h3>
                        <h3>{{ trans('books/book_detail.page_number') }}:{{ $thisbook->page_number }}</h3>
                        <div class="row">
                            <div class="col-3">
                                <h2>{{ trans('books/book_detail.rating') }}</h2>
                            </div>
                            <div class="col-9 st_star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <h3>{{ trans('books/book_detail.like') }} : {{-- {{ $cmt->id_book }} --}}</h3>
                        <a href="{{-- {{ route('borrows.show') }} --}}"><button type="button" class="btn_borrow">{{ trans('books/book_detail.btn_borrow') }}</button></a>
                    </div>
                </div>
            </div>
            {{-- description --}}
            <div class="row">
                <div class="col-xl-12 col-lg-8 col-md-7 book_content">
                    <h3 class="font_h3">{{ trans('books/edit_book.description') }}</h3>
                    <p>{{ $thisbook->description }}</p>
                </div>
            </div>
            {{-- list comment --}}
            <div class="row">
                <div class="col-12">
                    <h3 class="font_h3">{{ trans('books/book_detail.comment') }}</h3>
                    {{-- @foreach() --}}
                    <div class="col-md-12 mt-50">
                        <div class="py-2">
                            <p class="mb-0 text-primary">
                                Admin - <span class="text-dark">20:20 20/2/220</span>
                            </p>
                            <p class="mb-0">Hello it's so cool</p>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </div>
            {{-- comment --}}
            <form method="POST" action="">
                @csrf
                <div class="form-group">
                    <textarea class="form-control mt-3" name="" id="" rows="7"></textarea>
                </div>
                <button type="submit" class="genric-btn success mb-3">{{ trans('books/book_detail.comment') }}</button>
            </form>
        </div>
    </section>
    <!-- Detail book end-->
@endsection
