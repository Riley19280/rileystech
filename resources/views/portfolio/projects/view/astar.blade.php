@extends('layouts.panel')

@section('title','Astar - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>A* Pathfinding</b>
@endsection

@section('content')
    <div class="overflow-scroll text-center" style="max-height: 90vw">
        <canvas id="myCanvas" width="600" height="600" class="border border-white"></canvas>
    </div>
    <div class="flex-inline">
        <div class="flex justify-between p-2">
            <div>
                <label for="xstart">X Start:</label>
                <input type="number" id="xstart" placeholder="Start X" value="0" class="text-black border rounded">
            </div>
            <div>
                <label for="ystart">Y Start:</label>
                <input type="number" id="ystart" placeholder="Start Y" value="0" class="text-black border rounded">
            </div>
        </div>
        <div class="flex justify-between p-2">
            <div>
                <label for="xend">X End:</label>
                <input type="number" id="xend" placeholder="End X" value="49" class="text-black border rounded">
            </div>
            <div>
                <label for="yend">Y End:</label>
                <input type="number" id="yend" placeholder="End Y" value="49" class="text-black border rounded">
            </div>
        </div>

        <div class="flex justify-between p-2">
            <div>
                <label for="xamt"># X Boxes:</label>
                <input type="number" id="xamt" placeholder="# X" value="50" class="text-black border rounded">
            </div>
            <div>
                <label for="yamt"># Y Boxes:</label>
                <input type="number" id="yamt" placeholder="# Y" value="50" class="text-black border rounded">
            </div>
            <div>
                <label for="walldensity">Wall Density:</label>
                <input type="number" id="walldensity" placeholder="Wall Density" value=".3" class="text-black border rounded">
            </div>
        </div>

        <div class="flex justify-between p-2">
            <div>
                <label for="width">Grid Width:</label>
                <input type="number" id="width" placeholder="Width" value="600" class="border rounded">
            </div>
            <div>
                <label for="height">Grid Height:</label>
                <input type="number" id="height" placeholder="Height" value="600" class="border rounded">
            </div>
        </div>

        <div class="w-full text-center  p-2">
            <button id="runbutton" class="border rounded bg-blue hover:bg-blue-300 p-4 w-full mb-3">Run</button>
            <br>
            <textarea type="text" id="log" readonly class="border rounded border-black w-full"></textarea>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/js/astar.js"></script>
@endpush