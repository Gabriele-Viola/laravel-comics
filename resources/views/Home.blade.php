@extends('layout.main')
@section('title')
    Dc comics
@endsection
@php
    $comics= config("comics");
@endphp
@section('content')
 <div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6">
      @foreach ($comics as $comic)
          <div class="col">
              <x-card>
                <x-slot:image>
                    {{$comic['thumb']}}
                </x-slot:image>
                <x-slot:title>
                    {{$comic['title']}}
                </x-slot:title>
              </x-card>
          </div>
      @endforeach
     </div>
     <div class="load">Load more</div>
     <div class="blu-band">
        <div class="little-banner">
            <div>
                logo
               </div>
               <div>
               digital comics
           </div>
        </div>
        <div>
            logo
        </div>
        <div>
            DC merch
        </div>
    
        <div>
            logo
        </div>
        <div>
            subscription
        </div>
        
        <div>
            logo
        </div>
        <div>
            comic shop location
        </div>
    
        <div>
            logo
        </div>
        <div>
            dc power visa
        </div>
    </div>  
</div> 
    @endsection