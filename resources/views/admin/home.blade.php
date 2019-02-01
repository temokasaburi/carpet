@extends('admin.layouts.app')

@section('template')

    @include('admin.layouts.nav')

    <div id="right-panel" class="right-panel">

        

        @yield('content')


    </div>
@endsection
