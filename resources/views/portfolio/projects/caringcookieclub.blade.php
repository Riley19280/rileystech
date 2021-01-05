@extends('layouts.panel')

@section('title','Caring Cookie Club - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>Caring Cookie Club</b>
@endsection

@section('content')
    @include('portfolio.projects._sections.banner_image',['img'=>'/images/projects/caringcookieclub1.png'])
    <p>
        Caring Cookie Club is an app I created for a local elementary school club as well as my senior project. The app is a place where people can give each other “cookies”, compliments essentially, to promote kindness in schools.
    </p>

    @include('portfolio.projects._sections.links',['source'=>'https://github.com/Riley19280/CaringCookieClub/zipball/master','github'=>'CaringCookieClub','android'=>'https://play.google.com/store/apps/details?id=com.masterriley.CaringCookieClub','ios'=>''])
@endsection