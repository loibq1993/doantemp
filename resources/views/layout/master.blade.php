@extends('layout.homeform')
@section('main_content')
    @include('layout.header')

    @yield('content')

    @include('layout.footer')
@endsection
