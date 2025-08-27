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
  <div class="row">
    <div class="row">
        <h2 class="text-center">LE NOSTRE RICETTE</h2>
       </div>
       @foreach($ricette as $ricetta)
       <div class="col-12 col-md-6 justify-content-center mt-5">
           <div class="card" style="width: 18rem;">
             <img src="{{$ricetta['img']}}" class="card-img-top img-fluid" alt="...">
             <div class="card-body">
               <h5 class="card-title">{{$ricetta['title']}}</h5>
               
               <a href="{{route('ricettaDetail', ['id'=>$ricetta['id']])}}" class="btn btn-primary">vai alla ricetta</a>
             </div>
           </div>

       </div>

       @endforeach
  </div>
</div>

     <script src="https://kit.fontawesome.com/44c507059e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>