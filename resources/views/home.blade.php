@extends('layouts._main')

@section('title')
    Index
@endsection

@section('main')
    <div id="main-top-row">
        <h2>
            CURRENT SERIES
        </h2>
        <div class="container">
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
