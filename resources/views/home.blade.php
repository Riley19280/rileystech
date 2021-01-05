@extends('layouts.panel')

@section('title','Rileystech - Home')

@section('panel_title','Home')

@section('content')

    @if (session('status'))
        <div class="bg-green-100 border border-green-300 text-green-700 text-sm px-4 py-3 rounded mb-4">
            {{ session('status') }}
        </div>
    @endif

    <p class="text-grey-700 text-sm">
        You are logged in!
    </p>

@endsection
