@extends('../guest.template.base')

@section('title', 'DC-Comic')

@section('content')
      <main>
        <h2>{{ $comic->title }}</h2>
      </main>
@endsection