@extends('master')

@section('title_header', trans('books/book_detail.title_header'))

@section('main')

<!-- Detail book section -->
    <section class="book_detail_page">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="book_preview">
                        <img src="image/9.jpg" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="gs_meta">
                        <h3 class="gs_title">Final Appocalipse 2.1</h3>
                        <h3>{{ trans('books/book_detail.author') }}: Gai Gao</h3>
                        <h3>{{ trans('books/book_detail.status') }}: AAAAAA</h3>
                        <h3>{{ trans('books/book_detail.page_number') }}:123123</h3>
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
                        <h3>{{ trans('books/book_detail.like') }} : 2356616</h3>
                        <button type="button" class="btn_borrow">Borrow</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-8 col-md-7 book_content">
                    <h3 class="font_h3">Book</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum posuere porttitor justo id pellentesque. Proin id lacus feugiat, posuere erat sit amet, commodo ipsum. Donec pellentesque vestibulum metus.</p>
                    <h3 class="font_h3">Conclusion</h3>
                    <p>Nulla ut maximus mauris. Sed malesuada at sapien sed euismod. Vestibulum pharetra in sem id laoreet. Cras metus ex, placerat nec justo quis, luctus posuere ex. Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincidunt sit amet sem id varius. Donec ele-mentum aliquet tortor. Curabitur justo mi, efficitur sed eros aliquet, dictum molestie eros. Nullam scelerisque convallis gravida. Morbi id lorem accumsan, scelerisque enim laoreet, sollicitudin neque. Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincidunt sit amet sem id varius. Donec ele-mentum aliquet tortor. Curabitur justo mi, efficitur sed eros aliqueDonec vitae tellus sodales, congue augue at, biben-dum justo. Pellentesque non dolor et magna volutpat pharetra eget vel ligula. Maecenas facilisis vestibulum mattis. Sed sagittis gravida urna. Cras nec mi risus.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3 class="font_h3">{{ trans('books/book_detail.comment') }}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3 class="gs_title">{{ trans('books/book_detail.other') }}</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="book_item">
                                <img src="image/9.jpg" alt="#">
                                <h5>Conan - thám tử lừng danh đại danh đỉnh đỉnh</h5>
                                
                                <a href="" class="read_more">{{ trans('books/book_detail.read_more') }}  <img src="image/double-arrow.png" alt="#"/></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="book_item">
                                <img src="image/9.jpg" alt="#">
                                <h5>Dooms Day</h5>
                                <a href="" class="read_more">{{ trans('books/book_detail.read_more') }}  <img src="image/double-arrow.png" alt="#"/></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="book_item">
                                <img src="image/9.jpg" alt="#">
                                <h5>The Huricane</h5>
                                <a href="" class="read_more">{{ trans('books/book_detail.read_more') }}  <img src="image/double-arrow.png" alt="#"/></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="book_item">
                                <img src="image/9.jpg" alt="#">
                                <h5>Star Wars</h5>
                                <a href="" class="read_more">{{ trans('books/book_detail.read_more') }}  <img src="image/double-arrow.png" alt="#"/></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="book_item">
                                <img src="image/9.jpg" alt="#">
                                <h5>Star Wars</h5>
                                <a href="" class="read_more">{{ trans('books/book_detail.read_more') }}  <img src="image/double-arrow.png" alt="#"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <!-- Detail book end-->
@endsection