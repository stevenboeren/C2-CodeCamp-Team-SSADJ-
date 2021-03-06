<!doctype html>
<html class="no-js" lang="">

<?php require_once 'head.php' ?>

<body>

  <?php require_once 'header.php' ?>

  <main>
    <div class="container">

      <div class="welcome-text">
        <h1>Welkom op mediaportal! </h1>
        <p>Hierop vindt je alle je favorieten media op een plek. </p>
      </div>
      
      <div class="grid-container">
        <div class="grid-item">
            <h2><a href="films/index.php" class="link">Films</a></h2>   
        </div>  
        <div class="grid-item">
            <h2><a href="boeken/index.php" class="link">Boeken</a></h2>
        </div>
        <div class="grid-item">
            <h2><a href="songteksten/index.php" class="link">Songteksten</a></h2>
        </div>
        <div class="grid-item grid-large">
            <i class="fas fa-tools"></i>
            <h2><a href="gereedschappen/index.php" class="link">Gereedschappen</a></h2>
        </div>
        <div class="grid-item grid-large">
            <h2><a href="dranken/dranken.php" class="link">Dranken</a></h2>
        </div>       
      </div>


    </div>

    
  </main>

  <?php require_once 'footer.php' ?>

</body>

</html>
