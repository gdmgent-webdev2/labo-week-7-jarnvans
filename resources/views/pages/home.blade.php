@extends('layout')

@section('title', $pageData->title)

@section('content')
<div class="row">
    <div class="medium-12 text-center">
        <h4>{{ $pageData->intro }}</h4>
    </div>
    <div class="medium-6 columns">
        <img class="thumbnail" src="{{ $pageData->image }}">
    </div>
    <div class="medium-6 large-5 columns">
        {!! $pageData->content !!}
    </div>
</div>
@endsection
