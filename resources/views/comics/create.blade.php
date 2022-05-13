@extends('../guest.template.base')

@section('title', 'DC-Comic Add')

@section('content')
      <div class="container mt-3">
        <div class="row">
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('comics.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
                    </div>
                    <div class="mb-3">
                        <label for="price'" class="form-label">Prezzo</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data vendita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
      </div>
@endsection