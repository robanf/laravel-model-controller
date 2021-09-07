

@extends('layout.app')
@section('title','comics')
@section('content')
<div class="container pb-5 pt-2">
    <div class="row d-flex">
        @foreach($fumetti as $key => $fumetto)
    
            <div class="col-2 my-3">
              <div class="immagini">
              <img src="{{$fumetto['thumb']}}" alt="{{$fumetto['series']}}">

                 <a href="{{route('dettaglio', ['id' => $key])}}">{{$fumetto['series']}}</a>
              </div>
          </div>
        
        @endforeach

    </div>

</div>



@endsection