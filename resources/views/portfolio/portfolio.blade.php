@extends('layouts.base')

@section('title','Rileystech - Portfolio')

@section('content')
<div class="container mx-auto h-full flex flex-wrap justify-center">
    @include('portfolio._sections.project_card',['title'=>'Apush Master',                 'link'=>'/portfolio/apushmaster',          'img'=>'/images/projects/apushmastericon.png',        'subtext'=>'' ])
    @include('portfolio._sections.project_card',['title'=>'A* Pathfinding',               'link'=>'/portfolio/astar',                'img'=>'/images/projects/astaricon.png',              'subtext'=>'' ])
    @include('portfolio._sections.project_card',['title'=>'Caring Cookie Club',           'link'=>'/portfolio/caringcookieclub',     'img'=>'/images/projects/cccicon.png',                'subtext'=>'' ])
    @include('portfolio._sections.project_card',['title'=>'Colored Perspective',          'link'=>'/portfolio/coloredperspective',   'img'=>'/images/projects/coloredperspectiveicon.png', 'subtext'=>'' ])
    @include('portfolio._sections.project_card',['title'=>'Flash Drive Backup',           'link'=>'/portfolio/flashdrivebackup',     'img'=>'/images/projects/flashbackupicon.png',        'subtext'=>'' ])
    @include('portfolio._sections.project_card',['title'=>'Fractals',                     'link'=>'/portfolio/fractals',             'img'=>'/images/projects/fractalicon.png',            'subtext'=>'' ])
    @include('portfolio._sections.project_card',['title'=>'G2A Tracking System',          'link'=>'/portfolio/g2atracking',          'img'=>'/images/projects/g2atrackingicon.png',        'subtext'=>'' ])
    @include('portfolio._sections.project_card',['title'=>'Homework Master',              'link'=>'/portfolio/homeworkmaster',       'img'=>'/images/projects/homeworkmastericon.jpg',     'subtext'=>'' ])
    @include('portfolio._sections.project_card',['title'=>'Humble Bundle Analyzer',       'link'=>'/portfolio/humblebundleanalyzer', 'img'=>'/images/projects/humbleanalyzericon.png',     'subtext'=>'' ])
    @include('portfolio._sections.project_card',['title'=>'K95 Keyboard Image Overlayer', 'link'=>'/portfolio/k95keyboard',          'img'=>'/images/projects/K95icon.png',                'subtext'=>'' ])
    @include('portfolio._sections.project_card',['title'=>'Paintwall',                    'link'=>'/portfolio/paintwall',            'img'=>'/images/projects/paintwallicon.png',          'subtext'=>'' ])
    @include('portfolio._sections.project_card',['title'=>'POS Tracking System',          'link'=>'/portfolio/possystem',            'img'=>'/images/projects/POSSystemicon.png',          'subtext'=>'' ])
    @include('portfolio._sections.project_card',['title'=>'Road To NLC',                  'link'=>'/portfolio/roadtonlc',            'img'=>'/images/projects/roadtonlcicon.png',          'subtext'=>'' ])
    @include('portfolio._sections.project_card',['title'=>'Static Evolution',             'link'=>'/portfolio/staticevolution',      'img'=>'/images/projects/staticevolutionicon.png',    'subtext'=>'' ])
    @include('portfolio._sections.project_card',['title'=>'Vectricity',                   'link'=>'/portfolio/vectricity',           'img'=>'/images/projects/vectricityicon.png',         'subtext'=>'' ])

  
</div>
@endsection