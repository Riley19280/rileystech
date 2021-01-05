@extends('layouts.panel')

@section('title','Homework Master - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>Homework Master</b>
@endsection

@section('content')
    @include('portfolio.projects._sections.banner_image',['img'=>'/images/projects/homeworkmaster1.png'])
    <p>
        Homework Master is the final combined version of <a href="/portfolio/apushpaster" class="text-black hover:text-blue-700">APUSH Master</a>, Vocab Master (Looks up vocabulary words) and Timeline Tool (Creates a timeline) all in one app for easy accessibility. It includes all of the features of those and a few more.
    </p>
    @include('portfolio.projects._sections.links',['source'=>'https://github.com/Riley19280/HomeworkMaster/zipball/master','github'=>'HomeworkMaster','android'=>'https://play.google.com/store/apps/details?id=com.masterriley.homeworkmaster','ios'=>''])
@endsection
