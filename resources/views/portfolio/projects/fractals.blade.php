@extends('layouts.panel')

@section('title','Fractals - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>Fractals</b>
@endsection

@section('content')
    <p>A interesting representation of fractals!</p>
    @include('portfolio.projects._sections.links',['view'=>'/projects/fractals','source'=>'','github'=>'','android'=>'','ios'=>''])
@endsection