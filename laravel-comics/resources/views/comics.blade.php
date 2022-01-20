@extends('layouts.main')

@section('main-content')
    <section class="main-comics">
        <div class="container">
            <div class="cards">
                @foreach ($comics as $index => $comic)
                    <div class="card">
                        <a href="{{ route('comic-detail', ['id' => $index]) }}">
                            <div class="img-box">
                                <img src="{{ $comic['thumb'] }}" alt=" {{ $comic['title'] }}">
                            </div>
                            <h4>{{ $comic['series'] }}</h4>
                        </a>
                    </div>
                @endforeach
                    <button>
                        LOAD MORE
                    </button>
            </div>
        </div>
    </section>
@endsection