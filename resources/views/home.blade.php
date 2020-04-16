@section('content')
@extends('master')
@section('title_header', trans('partials/index.title_header'))
@section('main')
    @include('partials.slide')
    @include('partials.index')
@endsection
