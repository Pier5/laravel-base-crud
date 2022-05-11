@extends('guest.template.base')

@section('title', 'DC-Comics')

@section('content')
      <main>
            <div class="container mt-4">
                  <div class="row">
                        <div class="col">
                              Controlla la lista dei fumetti disponibili:

                              <a href="{{ route('comics.index') }}">DC-Comics Novel</a>
                        </div>
                  </div>
            </div>
      </main>
@endsection
