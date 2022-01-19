@extends('layouts.main')

@section('main-content')
    <section class="main-comics">
        <div class="container">
            <div class="cards">
                @foreach ($comics as $comic)
                    <div class="card">
                        <div class="img-box">
                            <img src="{{ $comic['thumb'] }}" alt=" {{ $comic['title'] }}">
                        </div>
                        <h4>{{ $comic['series'] }}</h4>
                    </div>
                @endforeach
                    <button>
                        LOAD MORE
                    </button>
            </div>
        </div>
    </section>
@endsection