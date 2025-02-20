@extends('layout.main')
@section('title')
    Dc comics
@endsection
@php
    $comics= config("comics");
@endphp
@section('content')
 <div class="container">
     <h1>prendo il layout main</h1>
     <div class="row row-cols-6">
      @foreach ($comics as $comic)
          <div class="col">
              <x-card>
                <x-slot:title>
                    {{$comic['title']}}
                </x-slot:title>
              </x-card>

          </div>
      @endforeach
     </div>
    </div>   
@endsection