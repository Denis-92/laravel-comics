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
            @foreach ($comics as $comic)
                <div>
                    {{ $comic['title'] }}
                </div>
            @endforeach
        </div>
    </div>

    <div id="main-middle-row">

    </div>
@endsection
