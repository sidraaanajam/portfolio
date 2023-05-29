@extends('setting.master')
@section('content')

    @include('pages.about')
    {{--@include('pages.fact')--}}
    @include('pages.skills')
    @include('pages.resume')
    {{--@include('pages.project')--}}

   @include('pages.strength')
   @include('pages.recommendation')


@endsection
