@extends('templates.base')

@section('title', 'Main')
@section('content')
    @foreach($news as $item)
        <div class="bg-1">
            <h3>
                <a href="{{ action('App\Http\Controllers\NewsController@show', $item->id) }}">
                {{ $item->title }}
                </a>
            </h3>
            <h5>{{$item->created_at->format('j F, Y')}}</h5>
            <p>{{ $item->announce }}</p>
        </div>
    @endforeach
@endsection