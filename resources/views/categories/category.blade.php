@extends('master')

@section('title_header', trans('categories/category.title_header'))

@section('main')

<section class="book_section">
     <div class="container list_book">
        <div class="row">
            <div class="col-9">
                <button type="button" class="btn_new">{{ trans('categories/category.btn_add') }}</button>
            </div>
            <div class="col-3">
                <div id="stickySidebar">
                    <div class="widget_item">
                        <form class="search_widget">
                            <input type="text">
                            <button> {{ trans('categories/category.search') }} </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <table class="table table-striped text_table">
                <thead>
                    <tr>
                        <th scope="col">{{ trans('categories/category.id') }}</th>
                        <th scope="col">{{ trans('categories/category.name') }}</th>
                        <th scope="col">{{ trans('categories/category.id_parent') }}</th>
                        <th scope="col">{{ trans('categories/category.path') }}</th>
                        <th scope="col">{{ trans('categories/category.option') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td scope="row"><a class="book_detail" href="">Gao</a></td>
                        <td scope="row">02</td>
                        <td scope="row">12/12/12</td>
                        <td>
                            <button class="btn_edit" title="Edit" type="submit" value="Edit">{{ trans('categories/category.edit') }}</button>
                            <button class="btn_delete" title="Delete" type="submit" value="Delete">{{ trans('categories/category.delete') }}</button>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">1</td>
                        <td scope="row"><a class="book_detail" href="">Gao</a></td>
                        <td scope="row">02/02/2020</td>
                        <td scope="row">Nam</td>
                        <td>
                            <button class="btn_edit" title="Edit" type="submit" value="Edit">{{ trans('categories/category.edit') }}</button>
                            <button class="btn_delete" title="Delete" type="submit" value="Delete">{{ trans('categories/category.delete') }}</button>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">1</td>
                        <td scope="row"><a class="book_detail" href="">Gao</a></td>
                        <td scope="row">02/02/2020</td>
                        <td scope="row">Nam</td>
                        <td>
                            <button class="btn_edit" title="Edit" type="submit" value="Edit">{{ trans('categories/category.edit') }}</button>
                            <button class="btn_delete" title="Delete" type="submit" value="Delete">{{ trans('categories/category.delete') }}</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    
@endsection