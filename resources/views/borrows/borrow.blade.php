@extends('master')

@section('title_header', trans('borrows/borrow.title_header'))

@section('main')

<section class="group_section borrow_lb">
    <div class="container">
        <div class="page_info_b">
            <h2>{{ trans('borrows/borrow.borrow') }}</h2>
        </div>
        <div class="row">
            <div class="col-5">
                <div class="book_preview">
                    <img src="image/9.jpg" alt="">
                </div>
            </div>
            <div class="col-7">
                <form>
                    <div class="form-group">
                        <label >{{ trans('borrows/borrow.name_book') }}</label>
                        <input type="name_book" class="form-control" id="exampleInputEmail1" value="">
                    </div>
                    <div class="form-group">
                        <label for="birth" class="col-md-4 ">{{ trans('borrows/borrow.date_borrow') }}</label>
                        <input class="form-control" value="get ngay">
                    </div>
                    <div class="form-group">
                        <label for="birth" class="col-md-4 ">{{ trans('borrows/borrow.date_pay') }}</label>
                        <input id="birth" type="date" class="form-control" name="birth" autofocus>
                    </div>
                    <div class="form-group">
                        <label >{{ trans('borrows/borrow.name_user') }}</label>
                        <input type="name_user" class="form-control" id="exampleInputPassword1" value="">
                    </div>
                    	<button type="submit" class="btn_borrow_b">{{ trans('borrows/borrow.btn_borrow') }}</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-8 col-md-7">
                <h3>Name Book</h3>
            </div>
            <div class="col-xl-12 col-lg-8 col-md-7 book_content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum posuere porttitor justo id pellentesque. Proin id lacus feugiat, posuere erat sit amet, commodo ipsum. Donec pellentesque vestibulum metus.</p>
                <p>Nulla ut maximus mauris. Sed malesuada at sapien sed euismod. Vestibulum pharetra in sem id laoreet. Cras metus ex, placerat nec justo quis, luctus posuere ex. Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincidunt sit amet sem id varius. Donec ele-mentum aliquet tortor. Curabitur justo mi, efficitur sed eros aliquet, dictum molestie eros. Nullam scelerisque convallis gravida. Morbi id lorem accumsan, scelerisque enim laoreet, sollicitudin neque. Vivamus volutpat nibh ac sollicitudin imperdiet. Donec scelerisque lorem sodales odio ultricies, nec rhoncus ex lobortis. Vivamus tincidunt sit amet sem id varius. Donec ele-mentum aliquet tortor. Curabitur justo mi, efficitur sed eros aliqueDonec vitae tellus sodales, congue augue at, biben-dum justo. Pellentesque non dolor et magna volutpat pharetra eget vel ligula. Maecenas facilisis vestibulum mattis. Sed sagittis gravida urna. Cras nec mi risus.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection