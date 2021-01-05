@extends('layouts.panel')

@section('title','Vectricity - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>Vectricity</b>
@endsection

@section('content')
    @include('portfolio.projects._sections.banner_image',['img'=>'/images/projects/vectricity1.png'])
    <p class="mb-2">
        Vectricity is a 2D arcade style shooter. There are different types of enemies that are capable of different attacks. There are also many different weapons that can each be used to counter the enemies. You are able to drop different items on the ground, to help you, like turrets or area of affect zones that set enemies on fire or slow them down.
    </p>
    <p>
        Vectricity has a long history. Originally this game started out in XNA Game studio, and was developed in my Programming II in highschool. Soon after my team and I decided that we were going to use it for out 2016 FBLA Project in Computer Game and Simulation Programming. In order to get the refinement that we wanted for the competition, I decided to port it to Unity game engine. We received 2nd place at the state competition.
    </p>

    @include('portfolio.projects._sections.links',['source'=>'https://github.com/Riley19280/Vectricity/zipball/master','github'=>'Vectricity','android'=>'','ios'=>''])
@endsection