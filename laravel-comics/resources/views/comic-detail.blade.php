@extends('layouts.main')

@section('main-content')
    <section class="main-comic-detail">
        <div class="container">
           <div class="card-box">
               <div class="box">
                   <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                   <span class="comic-book">COMIC BOOK</span>
                   <span class="gallery">VIEW GALLERY</span>
               </div>
           </div>
        </div>
    </section>

    <section class="main-comic-detail-2">
        <div class="container">
            <div class="info-box">

                <div class="info-1">
                    <h1>{{ $comic['title'] }}</h1>
                    
                    <div class="green-bar">
                        <div class="div-1">
                            <span>U.S Price: <span class="text-white">{{ $comic['price'] }}</span></span>
                            <span>AVAILABLE</span>
                        </div>
                        <div class="div-2">
                            <span class="text-white">Check Availability  &#x25BE</span>
                        </div>
                    </div>
                    <p>
                        {{ $comic['description'] }}
                    </p>
                </div>

                <div class="adv-box">
                    <img src=" {{ asset('images/adv.jpg') }}" alt="">
                    <span class="adv">ADVERTISEMENT</span>
                </div>
            </div>
        </div>
    </section>
@endsection