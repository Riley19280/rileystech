@extends('layouts.panel')

@section('title','Fractals - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>Fractals</b>
@endsection

@section('content')
    <div class="overflow-scroll text-center" style="max-height: 90vw">
        <canvas id="fractalcanvas" width="600" height="600" class="border border-black"></canvas>
    </div>
    <div class="flex-inline">
        <div class="flex justify-between p-2">
            <div>
                <label>Angle</label>
                <input type="number" id="fractalangle" value="45" class="text-black border rounded">
            </div>
            <div>
                <label>Branch Factor</label>
                <input type="number" id="fractalbranchFactor" value=".66" step="0.01" min=".01" max=".85" class="text-black border rounded">
            </div>
            <div>
                <label>Start Size</label>
                <input type="number" id="fractalstartsize" value="100" class="text-black border rounded">
            </div>
        </div>
        <div>
            <label for="fractalrandomang">Random Angles?</label>
            <input type="checkbox" name="fractalrandomang" class="text-black border rounded" id="fractalrandomang">
        </div>
        <div id="fractalminmaxangle" class="flex justify-between p-2" style="visibility: hidden">
            <div class="inline-block">
                <label>Min</label>
                <input type="number" id="fractalrandomangmin" value="10" class="text-black border rounded inline-block">
            </div>
            <div class="inline-block">
                <label>Max</label>
                <input type="number" id="fractalrandomangmax" value="80" class="text-black border rounded inline-block">
            </div>
        </div>
        <div class="flex justify-center p-2">
            <button id="startbutton" class="border rounded p-2">Start</button>
        </div>

    </div>




@endsection

@push('scripts')
    <script src="/js/fractals.js"></script>
@endpush