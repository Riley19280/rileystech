<div class="inline-flex mt-4 justify-center w-full">
    <span class="border-r-2 border-green-900"></span>
    @if(!empty($view))
        <a href="{{$view}}" class="no-underline text-black p-2 border-t-2 border-b-2  border-grey-900 hover:text-blue-700 hover:border-blue-700">View</a>
        <span class="border-r-2 border-green-900"></span>
    @endif
    @if(!empty($source))
        <a href="{{$source}}" class="no-underline text-black p-2 border-t-2 border-b-2  border-grey-900 hover:text-blue-700 hover:border-blue-700">Download&nbsp;Source</a>
        <span class="border-r-2 border-green-900"></span>
    @endif
    @if(!empty($github))
        <a href="http://github.com/riley19280/{{$github}}" target="_blank" class="no-underline text-black p-2 border-t-2 border-b-2 border-grey-900 hover:text-blue-700 hover:border-blue-700">View on Github</a>
        <span class="border-r-2 border-green-900"></span>
    @endif
    @if(!empty($android))
        <a href="{{$android}}" target="_blank" class="no-underline text-black p-2 border-t-2 border-b-2 border-grey-900 hover:text-blue-700 hover:border-blue-700">Download on Google Play</a>
        <span class="border-r-2 border-green-900"></span>
    @endif
    @if(!empty($ios))
        <a href="{{$ios}}" target="_blank" class="no-underline text-black p-2 border-t-2 border-b-2  border-grey-900 hover:text-blue-700 hover:border-blue-700">Download on the App Store</a>
        <span class="border-r-2 border-green-900"></span>
    @endif
</div>