@extends('../guest.template.base')

@section('title', 'DC-Comic')

@section('content')
      <main>
        <div class="container">
          <div class="row g-4 pt-4">
            <div class="col-8">
              <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
              <h2 class="pt-2">{{ $comic->title }}</h2>
              <p class="card-text pt-2">{{ $comic->description }}</p>
              <h4 class="pt-2 pb-3">Price: {{ $comic->price }}$</h4>
            </div>
          </div>
          <a href="{{ url()->previous() }}"><button class="btn btn-primary">Home</button></a>
        </div>
      </main>
@endsection