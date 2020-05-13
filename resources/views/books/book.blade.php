@extends('master')

@section('title_header', trans('books/book.title_header'))

@section('main')

<!-- Book item base-->
    <section class="book_section">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <div class="row">
                        {{-- item --}}
                        @foreach($bookhomes as $book)
                        <div class="col-lg-4 col-md-6">
                            <div class="book_item">
                                <a href="{{ route('books.show',$book->id) }}"><img src="{{ $book->image }}" alt="#"></a>
                                <h5><a class="text_book" href="{{ route('books.show',$book->id) }}">{{ $book->name_book }}</a></h5>
                                <div class="row">
                                    <div class="col-6">
                                        <a type="button" href="{{ route('borrow.show', ['id' => $book->id]) }}" class="btn_borrow">Borrow</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ route('books.show',$book->id) }}" class="read_more">{{ trans('books/book.read_more') }}<img src="image/double-arrow.png" alt="double arrow"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- item end--}}
                    </div>
                    <div class="site-pagination">
                        <div class="content_center">
                        <a href="#" class="active">01</a>
                        <a href="#">02</a>
                        <a href="#">03</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 sidebar book_page_sideber">
                    <div id="stickySidebar">
                        {{-- Search --}}
                        <div class="widget_item search-user">
                            <form class="search_widget" action="{{ url('books') }}" method="GET">
                                <input type="hidden" name="action" value="{{ trans('books/book.search') }}">
                                <input type="text" name="key" id="input" class="form-control" placeholder="{{ trans('books/book.searchbook') }}">
                                <button> {{ trans('books/book.search') }} </button>
                            </form>
                        </div>
                        {{-- End Search --}}
                        <div class="widget_item">
                            <div class="categories_widget">
                                <h4 class="widget_title"> {{ trans('books/book.category') }} </h4>
                                <ul>
                                    <li><a href="">Games</a></li>
                                    <li><a href="">Gaming Tips & Tricks</a></li>
                                    <li><a href="">Online Games</a></li>
                                    <li><a href="">Team Games</a></li>
                                    <li><a href="">Community</a></li>
                                    <li><a href="">Uncategorized</a></li>
                                    <li><a href="">Team Games</a></li>
                                    <li><a href="">Community</a></li>
                                    <li><a href="">Uncategorized</a></li>
                                    <li><a href="">Gaming Tips & Tricks</a></li>
                                    <li><a href="">Online Games</a></li>
                                    <li><a href="">Team Games</a></li>
                                    <li><a href="">Community</a></li>
                                    <li><a href="">Uncategorized</a></li>
                                    <li><a href="">Team Games</a></li>
                                    <li><a href="">Community</a></li>
                                    <li><a href="">Uncategorized</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Book item base end-->

@endsection
