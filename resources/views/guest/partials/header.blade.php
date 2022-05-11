<header class="d-flex align-items-center bg-dark">
    <div class="container d-flex">
        <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
            <div class="container-fluid">
              <a class="navbar-brand text-primary text-uppercase fw-bolder" href="#">DC Comics</a>
              <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('comics.index') }}">Comics</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('comics.create') }}">Aggiungi un nuovo Comic</a>
                    </li>
                  </ul>
                  <form class="d-flex ms-3">
                    <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Cerca</button>
                  </form>
                </div>
              </div>
            </div>
        </nav>
    </div>
</header>


