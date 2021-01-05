@extends('layouts.panel')

@section('title','Rileystech - Contact')

@section('panel_title','Contact')

@section('content')
    <form class="form-horizontal" method="POST" action="{{ route('contact_submit') }}">
        @csrf

        <div class="flex items-stretch mb-3">
            <label for="name" class="text-right font-semibold text-grey-700 text-sm pt-2 pr-3 align-middle w-1/4">Name</label>
            <div class="flex flex-col w-3/4">
                <input id="name" type="text" class="flex-grow h-8 px-2 border rounded {{ $errors->has('name') ? 'border-red-700' : 'border-grey-300' }}" name="name" value="{{ old('name') }}" autofocus required>
                {!! $errors->first('name', '<span class="text-red-700 text-sm mt-2">:message</span>') !!}
            </div>
        </div>

        <div class="flex items-stretch mb-3">
            <label for="email" class="text-right font-semibold text-grey-700 text-sm pt-2 pr-3 align-middle w-1/4">E-Mail Address</label>
            <div class="flex flex-col w-3/4">
                <input id="email" type="email" class="flex-grow h-8 px-2 border rounded {{ $errors->has('email') ? 'border-red-700' : 'border-grey-300' }}" name="email" value="{{ old('email') }}" required>
                {!! $errors->first('email', '<span class="text-red-700 text-sm mt-2">:message</span>') !!}
            </div>
        </div>

        <div class="flex items-stretch mb-4">
            <label for="message" class="text-right font-semibold text-grey-700 text-sm pt-2 pr-3 align-middle w-1/4">Message</label>
            <div class="flex flex-col w-3/4">
                <textarea id="message"  class="flex-grow h-8 px-2 rounded border {{ $errors->has('message') ? 'border-red-700' : 'border-grey-300' }} h-24" name="message" required></textarea>
                {!! $errors->first('password', '<span class="text-red-700 text-sm mt-2">:message</span>') !!}
            </div>
        </div>

        <div class="flex">
            <div class="w-3/4 ml-auto text-right">
                <button type="submit" class="bg-blue hover:bg-blue-700 text-white text-sm font-sembiold py-2 px-4 rounded mr-3">
                    Submit
                </button>
            </div>
        </div>
    </form>

@endsection

