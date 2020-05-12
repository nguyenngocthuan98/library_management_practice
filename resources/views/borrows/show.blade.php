@extends('master')

@section('title_header', trans('borrows/borrow.title_header'))

@section('main')

<section class="group_section borrow_lb">
    <div class="container">
        @if(session('borrow-success'))
            <div class="alert alert-success" role="alert">
                {{session('borrow-success')}}
            </div>
        @elseif(session('borrow-error'))
            <div class="alert alert-danger" role="alert">
                {{session('borrow-error')}}
            </div>
        @endif
        <div class="page_info_b">
            <h2>{{ trans('borrows/borrow.borrow') }}</h2>
        </div>
        <div class="row">
            <div class="col-5">
                <div class="book_preview">
                    <img src="{{ $book->image }}" alt="">
                </div>
            </div>
            <div class="col-7">
                <form method="POST" action="{{ route('borrow.confirm', ['id' => $book->id]) }}">
                    @csrf
                    <div class="form-group">
                        <label >{{ trans('borrows/borrow.name_book') }}</label>
                        <input type="text" name="name_book" class="form-control @error('name_book') is-invalid @enderror" id="exampleInputEmail1" value="{{ $book->name_book }}" disabled>

                        @error('name_book')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="birth" class="col-md-4 ">{{ trans('borrows/borrow.date_borrow') }}</label>
                        <input type="date" class="form-control" value="{{ date("Y-m-d") }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="birth" class="col-md-4 ">{{ trans('borrows/borrow.date_pay') }}</label>
                        <input type="date" name="date_pay" class="form-control @error('date_pay') is-invalid @enderror" type="date">

                        @error('date_pay')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label >{{ trans('borrows/borrow.name_user') }}</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
                    </div>
                    	<button type="submit" class="btn_borrow_b">{{ trans('borrows/borrow.btn_borrow') }}</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-8 col-md-7">
                <h3>{{ $book->name_book }}</h3>
            </div>
            <div class="col-xl-12 col-lg-8 col-md-7 book_content">
                <p>{{$book->description}}</p>
            </div>
        </div>
    </div>
</section>
@endsection
