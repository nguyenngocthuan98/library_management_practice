@extends('master')

@section('title_header', trans('books/book.title_header'))

@section('main')

<!-- Book item -->
    <section class="book_section">
    <div class="container">
        <div class="row">
        <!-- list book admin-->
            <div class="container list_book">
                <a href="{{route('books.create')}}"><button type="button" class="btn_new"> {{ trans('books/book.add_new') }} </button></a>
                <table class="table table-striped text_table">
                    <thead>
                        <tr>
                            <th scope="col"> {{ trans('books/book.name') }} </th>
                            <th scope="col"> {{ trans('books/book.image') }} </th>
                            <th scope="col"> {{ trans('books/book.category') }} </th>
                            <th scope="col"> {{ trans('books/book.author') }} </th>
                            <th scope="col"> {{ trans('books/book.publisher') }} </th>
                            <th scope="col"> {{ trans('books/book.status') }} </th>
                            <th scope="col"> {{ trans('books/book.option') }} </th>
                        </tr>
                    </thead>
                    {{-- data below --}}
                    @foreach($listbook as $book)
                    <tbody>
                        <tr>
                            <td scope="row"><a class="book_detail" href="{{-- {{ route('books.show') }} --}}">{{ $book->name_book }}</a></td>
                            <td scope="row"><image class="image_list" src="{{ $book->image }}" alt="#"></image></td>
                            <td scope="row">{{ $book->id_category }}</td>
                            <td scope="row">{{ $book->id_author }}</td>
                            <td scope="row">{{ $book->id_publisher }}</td>
                            <td scope="row">{{ BookHelper::getRole($book->name_book) }}</td>
                            <td>
                                <button class="btn_edit" title="Edit" type="submit" value="Edit"> {{ trans('books/book.edit') }} </button>
                                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn_delete" title="Delete" type="submit" value="Delete"> {{ trans('books/book.delete') }} </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                {{$listbook->links()}}
                {{-- pagination --}}
                {{-- <div class="col-xl-9 col-lg-8 col-md-7">
                    <div class="site-pagination">
                        <div class="content_center">
                        <a href="#" class="active">01</a>
                        <a href="#">02</a>
                        <a href="#">03</a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- list book end -->
        </div>
    </div>
</section>
    <!-- Book item -->

@endsection
