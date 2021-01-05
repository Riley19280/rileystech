@extends('layouts.panel')

@section('title','A* Pathfinding - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>A* Pathfinding</b>
@endsection

@section('content')
    <p>My exploration of the A* pathfinding algorithm</p>
    @include('portfolio.projects._sections.links',['view'=>'/portfolio/astar/view','source'=>'','github'=>'','android'=>'','ios'=>''])
@endsection
