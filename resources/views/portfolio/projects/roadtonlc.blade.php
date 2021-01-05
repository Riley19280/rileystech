@extends('layouts.panel')

@section('title','Road To NLC - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>Road To NLC 2017</b>
@endsection

@section('content')
    <div class="w-full rounded shadow max-h-lg mb-4 text-center flex-inline">
        <img src="/images/projects/roadtonlc1.png" class="w-1/4">
        <img src="/images/projects/roadtonlc2.png" class="w-1/4">
        <img src="/images/projects/roadtonlc3.png" class="w-1/4">
    </div>
    <p>
        FBLA Road to NLC Fundraising is an app I created for my FBLA Competition in 2017. The challenge given was to create an app that would all for raising funds in order to attend the National Leadership Conference. The application as a whole has a total of three parts: the App itself, the server, and the database. All of these components come together to create the complete app experience.
    </p>
    <p>
        You can view the complete Read Me file for the project <a href="/portfolio/roadtonlc/view" class="text-black hover:text-blue-600">here</a>.
    </p>

    @include('portfolio.projects._sections.links',['source'=>'https://github.com/Riley19280/Vectricity/zipball/master','github'=>'Vectricity','android'=>'','ios'=>''])
@endsection