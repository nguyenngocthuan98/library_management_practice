@extends('master')

@section('title_header', trans('admin/adminmanage.title_header'))

@section('main')

<!-- Item -->
    <section class="book_section">
    <div class="container">
        <div class="row">
        <!-- list admin manage-->
            <div class="container list_book">
                <h1>{{ trans('admin/adminmanage.lib_manage')}}</h1>
                <table class="table table-striped text_table">
                    <thead>
                        <tr>
                            <th scope="col">{{ trans('admin/adminmanage.directory') }}</th>
                            <th scope="col">{{ trans('admin/adminmanage.total') }}</th>
                            <th scope="col">{{ trans('admin/adminmanage.option') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">{{ trans('admin/adminmanage.user') }}</td>
                            <td scope="row">{{ $userTotal }}</td>
                            <td scope="row">
                                <a href="{{ route('users.index') }}">
                                    <button class="btn btn-info" title="Edit" type="button"> {{ trans('borrows/borrow.option') }} </button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">{{ trans('admin/adminmanage.book') }}</td>
                            <td scope="row">{{ $bookTotal }}</td>
                            <td scope="row">
                                <a href="{{ route('books.index') }}">
                                    <button class="btn btn-info" title="Edit" type="button"> {{ trans('borrows/borrow.option') }} </button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">{{ trans('admin/adminmanage.borrow') }}</td>
                            <td scope="row">{{ $borrowTotal }}</td>
                            <td scope="row">
                                <a href="{{ route('admin.borrow.index') }}">
                                    <button class="btn btn-info" title="Edit" type="button"> {{ trans('borrows/borrow.option') }} </button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">{{ trans('admin/adminmanage.author') }}</td>
                            <td scope="row">{{ $authorTotal }}</td>
                            <td scope="row">
                                <a href="{{route('authors.index')}}">
                                    <button class="btn btn-info" title="Edit" type="button"> {{ trans('borrows/borrow.option') }} </button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">{{ trans('admin/adminmanage.category') }}</td>
                            <td scope="row">{{ $categoryTotal }}</td>
                            <td scope="row">
                                <a href="#">
                                    <button class="btn btn-info" title="Edit" type="button"> {{ trans('borrows/borrow.option') }} </button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">{{ trans('admin/adminmanage.publisher') }}</td>
                            <td scope="row">{{ $publisherTotal }}</td>
                            <td scope="row">
                                <a href="{{ route('publishers.index') }}">
                                    <button class="btn btn-info" title="Option" type="button"> {{ trans('borrows/borrow.option') }} </button>
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
