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
                                                <div class="col py-2 d-flex justify-content-around">
                                                      <a class="btn btn-primary nav-link" href="{{ route('comics.edit', $comic->id) }}"> 
                                                            <span class="text-dark text-uppercase fw-bold">Modifica un Comic</span>  
                                                      </a>
                                                      <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button onclick="return confirm('Sei sicuro di volerlo eliminare?')" class="btn btn-danger py-2">Elimina un Comic</button>
                                                      </form>
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
