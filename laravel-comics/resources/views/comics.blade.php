@extends('layouts.main')

@section('main-content')
    <section>
        <div>
            <div>
                @foreach ($comics as $comic)
                    <div>
                        <img src="{{ $comic['thumb'] }}" alt=" {{ $comic['title'] }}">
                        <h4>{{ $comic['title'] }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection