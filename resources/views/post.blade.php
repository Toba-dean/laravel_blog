<x-layout>
  <x-slot:title>
    {{ $post->title }}
  </x-slot>
  
  <article>
  
    <h1>{{ $post->title }}</h1>

    <p>
      By <a href='#'>{{ $post->user->name }}</a> in
      <a href="/categories/{{ $post->category->slug }}">
        {{ $post->category->name }}
      </a>
    </p>
    {!! $post->body !!}
  
  </article>
  
  <a href="/">Go Home</a>
</x-layout>
  