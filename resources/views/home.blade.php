@extends('layouts._main')

@section('title')
    Index
@endsection

@section('main')
    <div id="main-top-row">
        <div class="container" id="overlay-jumbotron">
            <h2>
                CURRENT SERIES
            </h2>
        </div>
        <div class="container padding-top-2">
            <div class="flex flex-wrap" id="card-container">
                @foreach ($comics as $comic)
                    <div>
                        @include('partials._comic-card')
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="main-middle-row">

    </div>
@endsection
