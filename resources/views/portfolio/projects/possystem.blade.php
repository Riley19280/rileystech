@extends('layouts.panel')

@section('title','Pos System - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>Point of sale Tracking System</b>
@endsection
@section('content')
    <div class="w-full rounded shadow max-h-lg mb-4 text-center flex-inline">
        <img src="/images/projects/POSSystem1.png" class="w-1/4">
        <img src="/images/projects/POSSystem2.png" class="w-1/4">
        <img src="/images/projects/POSSystem4.png" class="w-1/4">
    </div>
    <p>
        Point of sale tracking system in an app to keep track of customers’ balances in an account. You can configure set increments of money for quick access, or you can enter a custom amount each time.
    </p>
    @include('portfolio.projects._sections.links',['source'=>'https://github.com/Riley19280/POSSystem/zipball/master','github'=>'POSSystem','android'=>'https://play.google.com/store/apps/details?id=com.rileystech.posts','ios'=>''])
@endsection