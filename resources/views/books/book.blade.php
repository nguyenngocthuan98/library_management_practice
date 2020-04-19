@extends('master')

@section('title_header', trans('books/book.title_header'))

@section('main')

<!-- Book item -->
    <section class="book_section">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="book_item">
                                <img src="image/9.jpg" alt="#">
                                <h5>Conan - thám tử lừng danh đại danh đỉnh đỉnh</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn_borrow">Borrow</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="read_more">{{ trans('books/book.read_more') }}<img src="image/double-arrow.png" alt="#"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="book_item">
                                <img src="image/9.jpg" alt="#">
                                <h5>Dooms Day</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn_borrow">Borrow</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="read_more">{{ trans('books/book.read_more') }}<img src="image/double-arrow.png" alt="#"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="book_item">
                                <img src="image/9.jpg" alt="#">
                                <h5>The Huricane</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn_borrow">Borrow</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="read_more">{{ trans('books/book.read_more') }}<img src="image/double-arrow.png" alt="#"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="book_item">
                                <img src="image/9.jpg" alt="#">
                                <h5>Star Wars</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn_borrow">Borrow</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="read_more">{{ trans('books/book.read_more') }}<img src="image/double-arrow.png" alt="#"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="book_item">
                                <img src="image/9.jpg" alt="#">
                                <h5>Candy land</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn_borrow">Borrow</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="read_more">{{ trans('books/book.read_more') }}<img src="image/double-arrow.png" alt="#"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="book_item">
                                <img src="image/9.jpg" alt="#">
                                <h5>E.T.</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn_borrow">Borrow</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="read_more">{{ trans('books/book.read_more') }}<img src="image/double-arrow.png" alt="#"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="book_item">
                                <img src="image/9.jpg" alt="#">
                                <h5>Zombie Appocalipse 2</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn_borrow">Borrow</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="read_more">{{ trans('books/book.read_more') }}<img src="image/double-arrow.png" alt="#"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="book_item">
                                <img src="image/9.jpg" alt="#">
                                <h5>Dooms Day</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn_borrow">Borrow</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="read_more">{{ trans('books/book.read_more') }}<img src="image/double-arrow.png" alt="#"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="book_item">
                                <img src="image/9.jpg" alt="#">
                                <h5>The Huricane</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn_borrow">Borrow</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="read_more">{{ trans('books/book.read_more') }}<img src="image/double-arrow.png" alt="#"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-pagination">
                        <div class="content_center">
                        <a href="#" class="active">01</a>
                        <a href="#">02</a>
                        <a href="#">03</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 sidebar book_page_sideber">
                    <div id="stickySidebar">
                        <div class="widget_item">
                            <form class="search_widget">
                                <input type="text">
                                <button> {{ trans('books/book.search') }} </button>
                            </form>
                        </div>
                        <div class="widget_item">
                            <div class="categories_widget">
                                <h4 class="widget_title"> {{ trans('books/book.categories') }} </h4>
                                <ul>
                                    <li><a href="">Games</a></li>
                                    <li><a href="">Gaming Tips & Tricks</a></li>
                                    <li><a href="">Online Games</a></li>
                                    <li><a href="">Team Games</a></li>
                                    <li><a href="">Community</a></li>
                                    <li><a href="">Uncategorized</a></li>
                                    <li><a href="">Team Games</a></li>
                                    <li><a href="">Community</a></li>
                                    <li><a href="">Uncategorized</a></li>
                                    <li><a href="">Gaming Tips & Tricks</a></li>
                                    <li><a href="">Online Games</a></li>
                                    <li><a href="">Team Games</a></li>
                                    <li><a href="">Community</a></li>
                                    <li><a href="">Uncategorized</a></li>
                                    <li><a href="">Team Games</a></li>
                                    <li><a href="">Community</a></li>
                                    <li><a href="">Uncategorized</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- list book -->
        <div class="container list_book">
            <button type="button" class="btn_new"> {{ trans('books/book.add_new') }} </button>
            <table class="table table-striped text_table">
                <thead>
                    <tr>
                        <th scope="col"> {{ trans('books/book.id') }} </th>
                        <th scope="col"> {{ trans('books/book.name') }} </th>
                        <th scope="col"> {{ trans('books/book.author') }} </th>
                        <th scope="col"> {{ trans('books/book.publisher') }} </th>
                        <th scope="col"> {{ trans('books/book.status') }} </th>
                        <th scope="col"> {{ trans('books/book.image') }} </th>
                        <th scope="col"> {{ trans('books/book.option') }} </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td scope="row"><a class="book_detail" href="">Gao</a></td>
                        <td scope="row">Supper Gao</td>
                        <td scope="row">Gao Pro</td>
                        <td scope="row">Active</td>
                        <td scope="row"><image class="image_list" src="image/9.jpg" alt="#"></td>
                        <td>
                            <button class="btn_edit" title="Edit" type="submit" value="Edit"> {{ trans('books/book.edit') }} </button>
                            <button class="btn_delete" title="Delete" type="submit" value="Delete"> {{ trans('books/book.delete') }} </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td scope="row"><a class="book_detail" href="">Gao G</a></td>                       
                        <td>Supper Gao</td>
                        <td>Gao Pro</td>
                        <td>Active</td>
                        <td scope="row"><image class="image_list" src="image/9.jpg" alt="#"></td>
                        <td>
                            <button class="btn_edit" title="Edit" type="submit" value="Edit"> {{ trans('books/book.edit') }} </button>
                            <button class="btn_delete" title="Delete" type="submit" value="Delete"> {{ trans('books/book.delete') }} </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Gao GAO</td>
                        <td>Supper Gao</td>
                        <td>Gao Pro</td>
                        <td>Active</td>
                        <td scope="row"><image class="image_list" src="image/9.jpg" alt="#"></td>
                        <td>
                            <button class="btn_edit" title="Edit" type="submit" value="Edit"> {{ trans('books/book.edit') }} </button>
                            <button class="btn_delete" title="Delete" type="submit" value="Delete"> {{ trans('books/book.delete') }} </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    <!-- list book end -->
    </section>
    <!-- Book item -->

@endsection