@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6 ">
  <a href="{{ route('posts.show') }}" class="text-pink-500 hover:underline">Back</a>

  <h1 class="text-3xl font-bold mt-4">{{ $post->title }}</h1>
  <p class="text-sm text-gray-500 mt-1">
    {{ optional($post->published_at)->format('M d, Y') }}
  </p>

  <div class="mt-6 leading-7 text-gray-800 whitespace-pre-line">
    {{ $post->body }}
  </div>
</div>
@endsection
