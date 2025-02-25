@extends('layouts.base')
@section('title')
    App Development Company
@endsection

@section('content')
    <!--Start Header -->
    @include('includes.app-development.header')
    <!--Mobile contact-->
    <!--End Header -->

    @yield('main')

    <!--Start Footer-->
    @include('includes.app-development.footer')
    <!--End Footer-->
@endsection
