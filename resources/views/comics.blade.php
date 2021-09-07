

@extends('layout.app')
@section('title','comics')
@section('content')
<div class="container pb-5 pt-2">
    <div class="row d-flex">
        @foreach($fumetti as $fumetto)
    
            <div class="col-2">
              <div class="immagini">
              <img src="{{$fumetto['thumb']}}" alt="{{$fumetto['series']}}">
                 <div>{{$fumetto['series']}}</div>
              </div>
          </div>
        
        @endforeach

    </div>

</div>



@endsection