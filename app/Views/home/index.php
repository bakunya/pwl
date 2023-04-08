<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
    Bakunya
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand fs-4 my-0 py-0" href="#">Perpustakaan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white px-4" aria-current="page" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white border rounded-pill px-4" href="#">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-5 pt-5">
    <h1 class="text-center">Selamat Datang di Perpustakaan</h1>
    <p class="text-center mt-3">Ini adalah halaman pertama dari website perpustakaan</p>
</div>

<div class="position-absolute bg-primary container-fluid py-3 mx-0 bottom-0">
    <p class="text-center m-0 text-white">Copyright &copy; Kirisaki Rem | Bakunya</p>
</div>
<?= $this->endSection() ?>