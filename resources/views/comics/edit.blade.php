@extends('../guest.template.base')

@section('title', 'DC-Comic Modify')

@section('content')
      <div class="container mt-3">
        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('comics.update', $comic->id)}}) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description">{{ $comic->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                    </div>
                    <div class="mb-3">
                        <label for="price'" class="form-label">Prezzo</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data vendita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
      </div>
@endsection