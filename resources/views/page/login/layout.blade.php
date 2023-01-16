@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('component._sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('container')
    </div>
</div>
@endsection