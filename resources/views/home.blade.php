@extends('guest.template.base')

@section('title', 'DC-Comics')

@section('content')
      <main>
         @foreach($comicsList as $comic)
          <h2><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></h2>
         @endforeach
         {{ $comicsList->links() }}
      </main>
@endsection
