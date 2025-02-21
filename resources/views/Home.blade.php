@extends('layout.main')
@section('title')
    Dc comics
@endsection
@php
    $comics= config("comics");
@endphp
@section('content')
<main>
    <x-jumbo>Current series</x-jumbo>
    <div class="container mt-5">
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
        <button class="load">Load more</button>
       </div> 
       <section class="blu-band py-4">
           <div class="container">
               <div class="d-flex justify-content-evenly align-items-center">
   
                   <div class="little-banner d-inline-block">
                       <a class="text-decoration-none" href="">
                       <div class="d-inline-block">
                               <img class="spec" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="" >
                           </div>
                           <div class="d-inline-block text-uppercase px-2">
                               digital comics
                           </div>
                       </a>
                    </div>
                   <div class="little-banner d-inline-block">
                       <a class="text-decoration-none" href="">
   
                           <div class="d-inline-block">
                               <img class="spec" src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="" >
                           </div>
                           <div class="d-inline-block text-uppercase px-2">
                               DC merchandise
                           </div>
                       </a>
                    </div>
                  <div class="little-banner d-inline-block">
                   <a class="text-decoration-none" href="">
   
                       <div class="d-inline-block">
                           <img class="spec" src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="" >
                       </div>
                       <div class="d-inline-block text-uppercase px-2">
                           subscription
                       </div>
                   </a>
                    </div>
                   <div class="little-banner d-inline-block">
                       <a class="text-decoration-none" href="">
   
                           <div class="d-inline-block">
                               <img class="spec" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="" width="35px" >
                           </div>
                           <div class="d-inline-block text-uppercase px-2">
                               comic shop location
                           </div>
                       </a>
                     </div>
               <div class="little-banner d-inline-block">
                   <a class="text-decoration-none" href="">
   
                       <div class="d-inline-block">
                           <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="" width="50px">
                       </div>
                       <div class="d-inline-block text-uppercase px-2">
                           dc power visa
                       </div>
                   </a>
               </div>
               </div>
   
           </div>
      </section>  
</main>
    @endsection