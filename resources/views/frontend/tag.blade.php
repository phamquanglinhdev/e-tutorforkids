@php
  $title = $tag->name;
@endphp
@extends('layout.app')
@section('content')
    <div class="h2 p-5 text-center">
        {{$tag->name}}
    </div>
    <div class="container mb-5">
        {!! $tag->content !!}
    </div>
    <style>
        @media screen and (max-width: 768px) {
            table, img {
                width: 100% !important;
                height: auto !important;
            }
        }
    </style>
@endsection
