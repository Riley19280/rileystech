@extends('layouts.panel')

@section('title','Static Evolution - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>Static Evolution</b>
@endsection

@section('content')
    @include('portfolio.projects._sections.banner_image',['img'=>'/images/projects/staticevolution1.png'])
    <p>
        Static evolution is a game that is still being worked on occasionally. The basic idea is that it would be similar to chess, but on a hexagonal grid. You would be able to sit your pieces around other objects on the map to “evolve” them into better pieces. Since I started on it, it has become more of a learning ground to play with hexagonal tile maps and tile orientation for graphics.
    </p>
    @include('portfolio.projects._sections.links',['source'=>'https://github.com/Riley19280/StaticEvolution/zipball/master','github'=>'StaticEvolution','android'=>'','ios'=>''])
@endsection