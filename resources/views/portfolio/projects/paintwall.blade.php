@extends('layouts.panel')

@section('title','Paintwall - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>Paintwall</b>
@endsection
@section('content')
    <div class="w-full rounded shadow max-h-lg mb-4 text-center flex-inline">
        <img src="/images/projects/paintwall1.png" class="w-1/4">
        <img src="/images/projects/paintwall2.png" class="w-1/4">
        <img src="/images/projects/paintwall3.png" class="w-1/4">
    </div>
    <p>
        Paintwall is a simple game where you have to try and get the colored balls into the correctly colored goal. The goals rotate around the screen for extra challenge. There are different game modes; Easy, normal, endless, hardcore, and flawless. In hardcore the goals rotate faster than on normal, and in flawless one wrong goal will cost you the game.
    </p>
    @include('portfolio.projects._sections.links',['source'=>'https://github.com/Riley19280/Paintwall/zipball/master','github'=>'Paintwall','android'=>'https://play.google.com/store/apps/details?id=xyz.triangularcubicle.paintwall','ios'=>''])
@endsection