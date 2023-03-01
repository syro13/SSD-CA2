<?php
require_once('database.php');

// Get products
$queryLeaderboard = 'SELECT * FROM leaderboard l ,runner r, game g
where l.runnerID = r.runnerID AND l.gameID = g.gameID';

$statement = $db->prepare($queryLeaderboard);
$statement->execute();
$leaderboard = $statement->fetchAll();
$statement->closeCursor();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">
  <title>Starter Template · Bootstrap v5.0</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/mystyle.css" rel="stylesheet">
</head>

<body>

  <?php include 'includes/header.php'; ?>


  <main class="container">
    <div class="card-container">
      <!-- <table class="table table-hover table-primary"> -->

      <?php foreach ($leaderboard as $data) : ?>
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <img class="card-img" src="<?php echo $data['gameIMG']; ?>"/>
            <h5 class="card-title"><?php echo $data['runnerName']; ?></h5>
            <p>Game: <?php echo $data['gameName']; ?></p>
            <p>Position: <?php echo $data['position']; ?></p>
            <p>Time: <?php echo $data['runTime']; ?></p>

          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php include 'includes/footer.php'; ?>
  </main><!-- /.container -->
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>