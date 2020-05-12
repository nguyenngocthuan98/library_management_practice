@extends('master')

@section('title_header', trans('Admin/adminmanage.title_header'))

@section('main')

<!-- Item -->
    <section class="book_section">
    <div class="container">
        <div class="row">
        <!-- list admin manage-->
            <div class="container list_book">
                <table class="table table-striped text_table">
                    <thead>
                        <tr>
                            <th scope="col"> Directory </th>
                            <th scope="col"> Total </th>
                            <th scope="col"> Option </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">User</td>
                            <td scope="row">{{ $userTotal }}</td>
                            <td scope="row">
                                <a href="{{ route('users.index') }}">
                                    <button class="btn_edit" title="Edit" type="button"> {{ trans('books/book.edit') }} </button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Book</td>
                            <td scope="row">{{ $bookTotal }}</td>
                            <td scope="row">
                                <a href="{{ route('books.index') }}">
                                    <button class="btn_edit" title="Edit" type="button"> {{ trans('books/book.edit') }} </button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Borrow</td>
                            <td scope="row">{{ $borrowTotal }}</td>
                            <td scope="row">
                                <a href="#">
                                    <button class="btn_edit" title="Edit" type="button"> {{ trans('books/book.edit') }} </button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Author</td>
                            <td scope="row">{{ $authorTotal }}</td>
                            <td scope="row">
                                <a href="{{route('authors.index')}}">
                                    <button class="btn_edit" title="Edit" type="button"> {{ trans('books/book.edit') }} </button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Category</td>
                            <td scope="row">{{ $categoryTotal }}</td>
                            <td scope="row">
                                <a href="#">
                                    <button class="btn_edit" title="Edit" type="button"> {{ trans('books/book.edit') }} </button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Publisher</td>
                            <td scope="row">{{ $publisherTotal }}</td>
                            <td scope="row">
                                <a href="{{ route('publishers.index') }}">
                                    <button class="btn_edit" title="Edit" type="button"> {{ trans('books/book.edit') }} </button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- list end -->
        </div>
    </div>
</section>
    <!-- Item -->

@endsection
