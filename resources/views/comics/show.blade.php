@extends('../guest.template.base')

@section('title', 'DC-Comic')

@section('content')
      <main>
        <div class="container pb-4">
          <div class="row g-4 pt-4">
            <div class="col-8">
              <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
              <h2 class="pt-2">{{ $comic->title }}</h2>
              <p class="card-text pt-2">{{ $comic->description }}</p>
              <h4 class="pt-2 pb-3">Price: {{ $comic->price }}$</h4>
            </div>
          </div>
          <button class="btn btn-primary"><a href="{{ route('home') }}"><span class="text-white">Home</span></a></button>
          <button class="btn btn-primary"><a href="{{ route('comics.index') }}"><span class="text-white">Lista Fumetti</span></a></button>
          <button class="btn btn-primary"><a href="{{ route('comics.create') }}"><span class="text-white">Aggiungi Comic</span></a></button>
        </div>
      </main>
@endsection