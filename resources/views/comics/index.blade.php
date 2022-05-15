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
                                          
                                                      <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger py-2">Elimina un Comic</button>

                                                      <!-- Modal -->
                                                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                        <div class="modal-header">
                                                                              <h5 class="modal-title text-danger" id="exampleModalLabel">Eliminazione Comic</h5>
                                                                              <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                              Sei sicuro di voler eliminare questo Comic?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                              <button class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                                                              <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button class="btn btn-primary">Conferma</button>
                                                                              </form>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
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
