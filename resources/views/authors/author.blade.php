@extends('master')

@section('title_header', trans('authors/author.title_header'))

@section('main')

<section class="group_section">
    <div class="container list_author">
        <div class="row">
            <div class="col-9">
                <a href="{{ url('authors/create') }}"><button class="btn_new">{{ trans('authors/author.add_new') }}</button></a>
            </div>
            <div class="col-3">
                <div class="search-author">
                    <form class="search_widget" action="{{ url('authors') }}" method="GET">
                        <input type="hidden" name="action" value="search">
                        <input type="text" name="key" id="input" class="form-control" value="" placeholder="{{ trans('authors/author.search') }}">
                        <button type="submit">{{ trans('authors/author.search') }}</button>
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-striped text_table group_table">
            <thead>
                <tr>
                    <th scope="col">{{ trans('authors/author.id') }}</th>
                    <th scope="col">{{ trans('authors/author.name') }}</th>
                    <th class="opt_auth" scope="col">{{ trans('authors/author.option') }}</th>
                </tr>
            </thead>
            <?php  $i=1 ?>
            @foreach ($author as $data_author)
            <tbody>
                <tr>
                    <td scope="row"><?php echo $i++; ?></td>
                    <td scope="row">{{ $data_author->name_author}}</td>
                    <td>
                        <a class="btn_edit" title="Edit" type="submit" value="Edit" href="{{ url('authors/'.$data_author->id.'/edit')}}">{{ trans('authors/author.edit') }}</a>
                        <form class="set_form" action="{{ url("authors/$data_author->id") }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button class="btn_delete" type="submit" title="Delete">{{ trans('authors/author.delete') }}</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        {{ $author->links() }}
    </div>
</section>

@endsection
