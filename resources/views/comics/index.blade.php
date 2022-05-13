@extends('guest.template.base')

@section('title', 'DC-Comics')

@section('content')
      <main class="bg-dark">
            <div class="container">
                  <div class="row g-5 mb-5">
                        @foreach($comicsList as $comic)
                              <div class="col-4 pt-5">
                                    <div class="card h-100">
                                          <img class="img-fluid h-75" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                                          <div class="card-body text-center">
                                                <h2 class="card-title pt-2"><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></h2>
                                                <h3 class="card-text pt-2">{{ $comic->series }}</h3>
                                                <h4 class="card-text text-uppercase pt-2">{{ $comic->type }}</h4>
                                                <div class="col-5 py-2 d-flex">
                                                      <a class="btn btn-primary nav-link" href="{{ route('comics.edit', $comic->id) }}"> 
                                                            <span class="text-dark text-uppercase">Modifica un Comic</span>  
                                                      </a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        @endforeach
                  </div>
                  {{ $comicsList->links() }}
            </div>
      </main>
@endsection
