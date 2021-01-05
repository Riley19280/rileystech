@extends('layouts.panel')

@section('title','Humble Bundle Analyzer - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>Humble Bundle Analyzer</b>
@endsection

@section('content')
    <p class="mb-2">Humble Bundle Analyzer takes data from <a href="http://humblebundle.com" target="_blank" class="text-black hover:text-blue-700">Humble Bundle</a> and compares it to the prices on <a href="http://g2a.com" target="_blank" class="text-black hover:text-blue-700">G2A</a> to find deals.</p>
    <p><a href="/portfolio/g2atracking" class="text-black hover:text-blue-700">Read more about the entire project</a></p>
@endsection