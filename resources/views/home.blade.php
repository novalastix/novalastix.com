@extends("base")

@section('head')
    <title>Welcome To AEON</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('body')
        <div class="aeon">{!! file_get_contents(public_path('images/aeon.svg')) !!}</div>
@endsection