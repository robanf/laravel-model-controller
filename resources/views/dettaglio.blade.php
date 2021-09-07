@extends('layout.app')
@section('title','dettaglio')
@section('content')

<div class="container">
    <div class="row d-flex justify-content-around py-4">
        <div class="col-6 text-center">
        <img src="{{$fum['thumb']}}" alt="{{$fum['series']}}">
            <h2>{{$fum['series']}}</h2>
            <div class="py-3">{{$fum['description']}}</div>
        </div>
    </div>
</div>


@endsection