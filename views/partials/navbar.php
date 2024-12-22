<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student follow up</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Batch List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Class List</a>
        </li>

      </ul>
    
      <div class="d-flex">
        <form class="d-flex gap-3" role="search">
          <div class="form-group">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          </div>
          <div>
              <button class="btn btn-outline-success me-3" type="submit">Search</button>
          </div>
        </form>
        <form action="/logout" method="POST">
                <button class="btn btn-outline-danger" type="submit">Log out</button>
        </form>
      </div>
    </div>
  </div>
</nav>