@extends('guest.template.base')

@section('title', 'DC-Comics')

@section('content')
      <main>
            <div class="container">
                  <div class="row g-5 mt-4 mb-5">
                        @foreach($comicsList as $comic)
                              <div class="col-4">
                                    <div class="card h-100">
                                          <img class="img-fluid h-75" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                                          <div class="card-body text-center">
                                                <h2 class="card-title pt-2"><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></h2>
                                                <h3 class="card-text pt-2">{{ $comic->series }}</h3>
                                                <h4 class="card-text text-uppercase pt-2">{{ $comic->type }}</h4>
                                          </div>
                                    </div>
                              </div>
                        @endforeach
                  </div>
                  {{ $comicsList->links() }}
            </div>
      </main>
@endsection
