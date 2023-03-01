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


<?php include 'includes/header.php';?>
	<title>Leaderboards</title>
<body style="background-color:#CFCBC9">

  

  <h1 class = "text-center m-2">Leaderboards</h1>
  <main class="container ">
    <div class="card-container">
      <!-- <table class="table table-hover table-primary"> -->

      <?php foreach ($leaderboard as $data) : ?>
        <div class="card border my-2" style="width: 18rem;">
          <div class="card-body ">
            <img class="card-img img_sizing" src="<?php echo $data['gameIMG']; ?>"/>
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