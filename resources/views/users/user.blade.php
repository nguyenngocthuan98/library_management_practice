@extends('master')

@section('title_header', trans('users/user.title_header'))

@section('main')

<section class="book_section">
     <div class="container list_book">
        <div class="row">
            <div class="col-9">
                <button type="button" class="btn_new">{{ trans('users/user.add_new') }}</button>
            </div>
            <div class="col-3">
                <div id="stickySidebar">
                    <div class="widget_item">
                        <form class="search_widget">
                            <input type="text">
                            <button> {{ trans('users/user.search') }} </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <table class="table table-striped text_table">
                <thead>
                    <tr>
                        <th scope="col">{{ trans('users/user.id') }}</th>
                        <th scope="col">{{ trans('users/user.name') }}</th>
                        <th scope="col">{{ trans('users/user.birth') }}</th>
                        <th scope="col">{{ trans('users/user.gender') }}</th>
                        <th scope="col">{{ trans('users/user.phone') }}</th>
                        <th scope="col">{{ trans('users/user.email') }}</th>
                        <th scope="col">{{ trans('users/user.address') }}</th>
                        <th scope="col">{{ trans('users/user.role') }}</th>
                        <th scope="col">{{ trans('users/user.option') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td scope="row"><a class="book_detail" href="">Gao</a></td>
                        <td scope="row">02/02/2020</td>
                        <td scope="row">Nam</td>
                        <td scope="row">02022002</td>
                        <td scope="row">Gao@gao.com</td>
                        <td scope="row">16 Gao, Gao Tiger, city Gao</td>
                        <td scope="row">Amin</td>
                        <td>
                            <button class="btn_edit" title="Edit" type="submit" value="Edit">{{ trans('users/user.edit') }}</button>
                            <button class="btn_delete" title="Delete" type="submit" value="Delete">{{ trans('users/user.delete') }}</button>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">1</td>
                        <td scope="row"><a class="book_detail" href="">Gao</a></td>
                        <td scope="row">02/02/2020</td>
                        <td scope="row">Nam</td>
                        <td scope="row">02022002</td>
                        <td scope="row">Gao@gao.com</td>
                        <td scope="row">16 Gao, Gao Tiger, city Gao</td>
                        <td scope="row">Amin</td>
                        <td>
                            <button class="btn_edit" title="Edit" type="submit" value="Edit">{{ trans('users/user.edit') }}</button>
                            <button class="btn_delete" title="Delete" type="submit" value="Delete">{{ trans('users/user.delete') }}</button>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">1</td>
                        <td scope="row"><a class="book_detail" href="">Gao</a></td>
                        <td scope="row">02/02/2020</td>
                        <td scope="row">Nam</td>
                        <td scope="row">02022002</td>
                        <td scope="row">Gao@gao.com</td>
                        <td scope="row">16 Gao, Gao Tiger, city Gao</td>
                        <td scope="row">Amin</td>
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