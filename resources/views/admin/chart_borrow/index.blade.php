@extends('master')

@section('title_header', trans('admin/chart.title_header'))

@section('main')
<section class="group_section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#day" role="tab" data-toggle="tab">{{ trans('admin/chart.day') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#month" role="tab" data-toggle="tab">{{ trans('admin/chart.month') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#year" role="tab" data-toggle="tab">{{ trans('admin/chart.year') }}</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="day">
                            <div class="card-body">
                            <h1>{{ $chartDay->options['chart_title'] }}</h1>
                            {!! $chartDay->renderHtml() !!}
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="month">
                            <div class="card-body">
                                <h1>{{ $chartMonth->options['chart_title'] }}</h1>
                                {!! $chartMonth->renderHtml() !!}
                            </div>  
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="year">
                            <div class="card-body">
                                <h1>{{ $chartYear->options['chart_title'] }}</h1>
                                {!! $chartYear->renderHtml() !!}
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('javascript')
{!! $chartDay->renderChartJsLibrary() !!}
{!! $chartDay->renderJs() !!}
{!! $chartMonth->renderChartJsLibrary() !!}
{!! $chartMonth->renderJs() !!}
{!! $chartYear->renderChartJsLibrary() !!}
{!! $chartYear->renderJs() !!}
@endsection