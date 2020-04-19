@extends('master')

@section('title_header', trans('publishers/publisher.title_header'))

@section('main')

<section class="group_section">
    <div class="container list_author">
        <div class="row">
            <div class="col-9">
                <button class="btn_new">{{ trans('publishers/publisher.add_new') }}</button>
            </div>
            <div class="col-3">
                <div id="stickySidebar">
                    <div class="widget_item">
                        <form class="search_widget">
                            <input type="text">
                            <button> {{ trans('publishers/publisher.search') }} </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <table class="table table-striped text_table cent_table">
            <thead>
                <tr>
                    <th scope="col">{{ trans('publishers/publisher.id') }}</th>
                    <th scope="col">{{ trans('publishers/publisher.name') }}</th>
                    <th scope="col">{{ trans('publishers/publisher.address') }}</th>
                    <th scope="col">{{ trans('publishers/publisher.email') }}</th>
                    <th scope="col">{{ trans('publishers/publisher.option') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td scope="row"><a class="book_detail" href="">Gao Supper proooooooooooooooooooooooooo</a></td>
                    <td scope="row"><a class="book_detail" href="">Gao Supper </a></td>
                    <td scope="row"><a class="book_detail" href="">Gao Supper</a></td>
                    <td>
                        <button class="btn_edit" title="Edit" type="submit" value="Edit">{{ trans('publishers/publisher.edit') }}</button>
                        <button class="btn_delete" title="Delete" type="submit" value="Delete">{{ trans('publishers/publisher.delete') }}</button>
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td scope="row"><a class="book_detail" href="">Gao</a></td>
                    <td scope="row"><a class="book_detail" href="">Gao Supper </a></td>
                    <td scope="row"><a class="book_detail" href="">Gao Supper</a></td>
                    <td>
                        <button class="btn_edit" title="Edit" type="submit" value="Edit">{{ trans('publishers/publisher.edit') }}</button>
                        <button class="btn_delete" title="Delete" type="submit" value="Delete">{{ trans('publishers/publisher.delete') }}</button>
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td scope="row"><a class="book_detail" href="">Gao</a></td>
                    <td scope="row"><a class="book_detail" href="">Gao Supper </a></td>
                    <td scope="row"><a class="book_detail" href="">Gao Supper</a></td>
                    <td>
                        <button class="btn_edit" title="Edit" type="submit" value="Edit">{{ trans('publishers/publisher.edit') }}</button>
                        <button class="btn_delete" title="Delete" type="submit" value="Delete">{{ trans('publishers/publisher.delete') }}</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
    
@endsection