@extends('master')

@section('title_header', trans('borrows/list_borrow.title_header'))

@section('main')
<section class="group_section">
    <div class="container borrow_lb">
        <div class="row">
            <div class="col-9 page_info_b">
                <h2>{{ trans('borrows/list_borrow.name_list') }}</h2>
            </div>
            <div class="col-3">
                <div class="search-author">
                    <form class="search_widget" action="" method="GET">
                        <input type="hidden" name="action" value="search">
                        <input type="text" name="key" id="input" class="form-control" value="" placeholder="Search Computer ...">
                        <button type="submit">{{ trans('borrows/list_borrow.search') }}</button>
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-striped text_table group_table">
            <thead>
                <tr>
                    <th scope="col">{{ trans('borrows/list_borrow.id') }}</th>
                    <th scope="col">{{ trans('borrows/list_borrow.name_book') }}</th>
                    <th scope="col">{{ trans('borrows/list_borrow.date_borrow') }}</th>
                    <th scope="col">{{ trans('borrows/list_borrow.date_pay') }}</th>
                    <th scope="col">{{ trans('borrows/list_borrow.name_user') }}</th>
                    <th scope="col">{{ trans('borrows/list_borrow.status') }}</th>
                    <th class="witdth_lb" scope="col">{{ trans('authors/author.option') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td scope="row">au</td>
                    <td scope="row">au</td>
                    <td scope="row">au</td>
                    <td scope="row">au</td>
                    <td scope="row">1</td>
                    <td>
                        <button class="btn_accept" title="Accept" type="submit"><a href="">{{ trans('borrows/list_borrow.accept') }}</a></button>
                        <button class="btn_reject" title="Reject" type="submit"><a href="">{{ trans('borrows/list_borrow.reject') }}</a></button>
                        <button class="btn_pay" title="Pay" type="submit"><a href="">{{ trans('borrows/list_borrow.pay') }}</a></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection