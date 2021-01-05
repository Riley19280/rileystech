@extends('layouts.panel')

@section('title','APUSH Master - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>APUSH Master</b>
@endsection

@section('content')
    <h4>Instructions</h4>
    <p>Enter a list of terms in the box below, one per line. Then, press the "start" buttion at the bottom of
        the page. Then another page will appear with a list of definitions for your terms. Note that it may take
        a few minutes to load all the terms if there are a lot of them.</p>
    <textarea class="w-full h-24 overflow-y-scroll mt-2 rounded border border-black"></textarea>
    <button id="go" onclick="go()" class="border rounded bg-blue hover:bg-blue-300 p-2">Start</button>
@endsection

@push('scripts')
    <script src="/js/apush.js"></script>
@endpush