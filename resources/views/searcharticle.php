@extends('layouts.app')

@section('content')
    <h2>Search Results for "{{ $text }}"</h2>

    @if(count($articles) > 0)
        <ul>
            @foreach($articles as $article)
                <li>{{ $article->title }}</li>
            @endforeach
        </ul>
    @else
        <p>No articles found for the given search.</p>
    @endif
@endsection
