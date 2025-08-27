<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <i class="fa-solid fa-cake-candles"></i>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/chi-siamo">Chi siamo</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="/ricette">Ricette</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid">
  <div class="row justify-content-center align-items-center">
    <div class="row">
      <h2 class="display-5 text-center"><?php echo e($ricetta['title']); ?></h2>
    </div>
    <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
      <h5><?php echo e($ricetta['title']); ?></h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptatem excepturi unde placeat natus explicabo obcaecati deserunt, maiores earum tempora, officia ex illum quibusdam! Cumque quis tempora odio dolorem provident.</p>
    </div>
    <div class="col-12 col-md-6 mt-3">
      <img src="<?php echo e($ricetta['img']); ?>" alt="immagine di <?php echo e($ricetta['title']); ?>">
      </div>


  </div>
</div>

     <script src="https://kit.fontawesome.com/44c507059e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\Users\adria\laravel_02_Adriana_Ambruosi\resources\views/ricette/ricettaDetail.blade.php ENDPATH**/ ?>