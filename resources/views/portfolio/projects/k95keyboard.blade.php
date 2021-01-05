@extends('layouts.panel')

@section('title','Rileystech - K95 Keyboard')

@section('panel_title','K95 Keyboard Image Overlayer')

@section('content')
    @include('portfolio.projects._sections.banner_image',['img'=>'/images/projects/k951.png'])
    <p>
        K95 Keyboard image Overlay allows you to select an image and put it onto the K95 keyboard. Once an image is selected the program has different ways of calculating the color for each key, such as brightness, most occurring color, and average color. You can export just the 300ing to copy and paste into an existing profile in the Corsair Utility Engine (CUI) of export and entire profile for a quick import.
    </p>
    @include('portfolio.projects._sections.links',['source'=>'https://github.com/Riley19280/K95KeyboardImageOverlayer/zipball/master','github'=>'K95KeyboardImageOverlayer','android'=>'','ios'=>''])
@endsection