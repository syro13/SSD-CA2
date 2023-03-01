<?php
require_once('database.php');

// Get products
$queryGames = 'SELECT * FROM game';
$statement = $db->prepare($queryGames);
$statement->execute();
$games = $statement->fetchAll();
$statement->closeCursor();
?>
<!doctype html>
<html lang="en">
<?php include 'includes/header.php';?>
	<title>Games</title>
  <body style="background-color:#CFCBC9">
    
  
  <h1 class = "text-center m-2">Games</h1>
<main class="container">
<div class="starter-template text-center">
<div class="card-container">
      <!-- <table class="table table-hover table-primary"> -->

      <?php foreach ($games as $data) : ?>
        <div class="card border border-dark my-2" style="width: 18rem;">
          <div class="card-body ">
            <img class="card-img img_sizing" src="<?php echo $data['gameIMG']; ?>"/>
            <h5 class="card-title"><?php echo $data['gameName']; ?></h5>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  </div>

  <?php include 'includes/footer.php';?>
</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
  
</html>
