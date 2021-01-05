@extends('layouts.panel')

@section('title','Rileystech - Dashboard')

@section('panel_title','Dashboard')


@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    You are logged in!
@endsection
