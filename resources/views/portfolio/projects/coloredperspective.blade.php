@extends('layouts.panel')

@section('title','Colored Perspective - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>Colored Perspective</b>
@endsection

@section('content')
    @include('portfolio.projects._sections.banner_image',['img'=>'/images/projects/coloredperspective1.png'])
    <p>
        Colored perspective is a platformer that gets its name entirely due to the game mechanics. You are a colored ball that has to jump between the different colored platforms, changing your color while in midair so that you match the color of the platform, otherwise you will break the platform and fall to your death. As you move linearly down the randomly generated course, the camera only moves when you get very far away, creating a stretched perspective that will have you guessing when to jump to the next platform.
    </p>
    @include('portfolio.projects._sections.links',['source'=>'https://github.com/Riley19280/ColoredPerspective/zipball/master','github'=>'ColoredPerspective','android'=>'https://play.google.com/store/apps/details?id=com.masterriley.colorrunner','ios'=>''])
@endsection
