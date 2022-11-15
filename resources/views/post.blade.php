<x-layout>
  <x-slot:title>
    {{ $post->title }}
  </x-slot>
  
  <article>
  
    <h1>{{ $post->title }}</h1>
    {!! $post->body !!}
  
  </article>
  
  <a href="/" style="background-color: rgb(205, 200, 200); padding: 15px 20px; border-radius: 10px; display: inline-block; font-size: 18px">Go Home</a>
</x-layout>
  