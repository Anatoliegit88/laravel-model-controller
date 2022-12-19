@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>La lista dei film</h2>
      <div class="row row-cols-3 ">
        @foreach ($movies as $movie)
        <div class="col">
          {{ $movie->title }}
        </div>
            
        @endforeach

      </div>
    </div>
@endsection