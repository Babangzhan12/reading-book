@extends('layouts.main')

@section('container')    
<h1 class="mb-5">Post Category : {{ $category }}</h1>

@foreach ($posts as $post)
<article class="mb-5">
    <h2>
        <a href="/posts/{{ $post->slug }}" class="mb-2">
            {{ $post->title }}    
        </a>
    </h2>
    
    <p>{!! $post->excerpt !!}</p>
    {{-- <p>{{ $post["body"] }}</p> --}}
    <a href="/posts/{{ $post->slug }}">Lihat Selengkapnya</a>
</article>
    
@endforeach

@endsection

