@extends('layouts.common')

@section('title', 'トップページ')
@section('content')
    <iframe src="{{ asset('templates/restoran/index.html') }}" frameborder="0" style="width:100%;height:800px;margin-top:100px;"></iframe>
@endsection
