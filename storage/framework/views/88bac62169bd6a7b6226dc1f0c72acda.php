<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chi siamo</title>
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
          <a class="nav-link" href="/chi-siamo">chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>


<header>
  <div class="container justify-content-center">
    <div class="row col-12 mt-5 d-flex">
      <div class="col-md-6 text-center">
        <img src="/img1.png" alt="">
      </div>
      <div class="col-md-6 text-center">
        <h4>CHI SIAMO:</h4>
        <div>
           <p class="mt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla voluptate dolore sint adipisci pariatur fuga doloremque accusamus! Libero dolores nihil, quisquam in quibusdam dolorem, iure ea temporibus eum atque aperiam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, non quibusdam? In sed numquam alias reprehenderit ducimus sit. Iste itaque laborum ea explicabo veritatis libero tempore iusto suscipit sit expedita?</p>
  
        </div>
      </div>
    </div>
  </div>
</header>


<section>
  <div class="container">
    <div class="row justify-content-center align-items-center mt-5 h-100">
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-12 col-md-4">
            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo e($user['name']); ?> <?php echo e($user['surname']); ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo e($user['role']); ?></h6>
    
    <a href="<?php echo e(Route('chiSiamoDetail', ['name'=>$user['name']] )); ?>" class="card-link">Leggi di più</a>
  </div>
</div>
          </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>

    <script src="https://kit.fontawesome.com/44c507059e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\Users\adria\laravel_02_Adriana_Ambruosi\resources\views/chisiamo.blade.php ENDPATH**/ ?>