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
            {{-- data below --}}
            @foreach($listborrow as $borrow)
            <tbody>
                <tr>
                    <td scope="row">{{ $borrow->id }}</td>
                    <td scope="row">{{ $borrow->book->name_book }}</td>
                    <td scope="row">{{ $borrow->created_at }}</td>
                    <td scope="row">{{ $borrow->date_pay }}</td>
                    <td scope="row">{{ $borrow->user->name }}</td>
                    <td scope="row">
                        @switch ($borrow->accept)
                          @case (App\Models\Borrow::WAITING)
                            {{ trans('borrows/list_borrow.waiting') }}
                            @break;
                          @case (App\Models\Borrow::BORROWING)
                            {{ trans('borrows/list_borrow.borrowing') }}
                            @break;
                          @case (App\Models\Borrow::DECLINED)
                            {{ trans('borrows/list_borrow.declined') }}
                            @break;
                          @case (App\Models\Borrow::RETURN)
                            {{ trans('borrows/list_borrow.returned') }}
                            @break;
                          @default:
                            {{ trans('borrows/list_borrow.error') }}
                            @endswitch
                    </td>
                    <td>
                        @if($borrow->accept == App\Models\Borrow::WAITING)
                            <a class="btn btn-success" href="{{ route('admin.borrow.accept', ['id' => $borrow->id]) }}" title="accept" href="">{{ trans('borrows/list_borrow.accept') }}</a>
                            <a class="btn btn-danger" href="{{ route('admin.borrow.deny', ['id' => $borrow->id]) }}">{{ trans('borrows/list_borrow.deny') }}</a>
                        @elseif($borrow->accept == App\Models\Borrow::BORROWING)
                            <a class="btn btn-warning" href="{{ route('admin.borrow.pay', ['id' => $borrow->id]) }}">{{ trans('borrows/list_borrow.return') }}</a>
                        @else
                            <form action="{{ route('user.borrow.destroy',$borrow->id) }}" method="GET">
                            @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" title="Delete" type="submit" value="Delete"> {{ trans('books/book.delete') }} </button>
                            </form>
                        @endif
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        {{$listborrow->links()}}
    </div>
</section>
@endsection
