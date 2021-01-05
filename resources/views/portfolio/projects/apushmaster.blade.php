@extends('layouts.panel')

@section('title','APUSH Master - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>APUSH Master</b>
@endsection

@section('content')
    <p>APUSH Master is a tool created to easily find information related to topics discussed in AP US History. Most information displayed is sourced from <a href="http:/quizlet.com" class="text-black hover:text-blue-500">Quizlet</a> flashcard sets for maximum topic relevancy.</p>
    @include('portfolio.projects._sections.links',['view'=>'/portfolio/apushmaster/view','source'=>'','github'=>'','android'=>'','ios'=>''])
@endsection
