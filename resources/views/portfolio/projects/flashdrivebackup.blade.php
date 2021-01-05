@extends('layouts.panel')

@section('title','Flash Drive Backup - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>Flash Drive Backup</b>
@endsection

@section('content')
    @include('portfolio.projects._sections.banner_image',['img'=>'/images/projects/flashbackupicon.png'])
    <p>
        Flash Drive Backup is a .net application that runs in the background and allows you to configure backups of removable drives each time you plug it in. This project is based off and adapted from <a href="http://web4.codeproject.com/Articles/18062/Detecting-USB-Drive-Removal-in-a-C-Program" class="text-black hover:text-blue-800">this&nbsp;project</a> and another project that i can no longer find at this time.
    </p>
    @include('portfolio.projects._sections.links',['source'=>'https://github.com/Riley19280/FlashDriveBackup/zipball/master','github'=>'FlashDriveBackup','android'=>'','ios'=>''])
@endsection
