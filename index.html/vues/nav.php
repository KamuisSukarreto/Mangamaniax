<!-- Navbar -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="modeles/Recherche.js"></script>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php?uc=voirManga">
      <img src="../index.html/vues/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="Logo">
      MangaManiax
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php?uc=voirManga&action=voirActu">Actualités</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link active" href="index.php?uc=voirAnime">Animés</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php?uc=voirFA">Films d'animation</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php?uc=Voirmanga">Mangas</a>
        </li>
      </ul>
      <form class="form-inline ml-auto" method="POST" action="index.php?uc=voirAnime&action=recherche">
    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Recherche" aria-label="Search">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="submit">Rechercher</button>
      </form>

    </div>
  </nav>