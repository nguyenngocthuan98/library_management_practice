@extends('master')

@section('title_header', trans('authors/author.title_header'))

@section('main')

<section class="author_section">
    <div class="container list_author">
        <div class="row">
            <div class="col-9">
                <button class="btn_new">{{ trans('authors/author.add_new') }}</button>
            </div>
            <div class="col-3">
                <div id="stickySidebar">
                    <div class="widget_item">
                        <form class="search_widget">
                            <input type="text">
                            <button> {{ trans('authors/author.search') }} </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <table class="table table-striped text_table group_table">
            <thead>
                <tr>
                    <th scope="col">{{ trans('authors/author.id') }}</th>
                    <th scope="col">{{ trans('authors/author.name') }}</th>
                    <th scope="col">{{ trans('authors/author.option') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td scope="row"><a class="book_detail" href="">Gao Supper proooooooooooooooooooooooooo</a></td>
                    <td>
                        <button class="btn_edit" title="Edit" type="submit" value="Edit">{{ trans('authors/author.edit') }}</button>
                        <button class="btn_delete" title="Delete" type="submit" value="Delete">{{ trans('authors/author.delete') }}</button>
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td scope="row"><a class="book_detail" href="">Gao</a></td>
                    <td>
                        <button class="btn_edit" title="Edit" type="submit" value="Edit">{{ trans('users/user.edit') }}</button>
                        <button class="btn_delete" title="Delete" type="submit" value="Delete">{{ trans('users/user.delete') }}</button>
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td scope="row"><a class="book_detail" href="">Gao</a></td>
                    <td>
                        <button class="btn_edit" title="Edit" type="submit" value="Edit">{{ trans('users/user.edit') }}</button>
                        <button class="btn_delete" title="Delete" type="submit" value="Delete">{{ trans('users/user.delete') }}</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
    
@endsection