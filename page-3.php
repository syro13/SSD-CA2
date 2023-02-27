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
    <link href="mystyle.css" rel="stylesheet">
  </head>
  <body>
    
  <?php include 'includes/header.php';?>
<main class="container">
<div class="starter-template text-center">
  <table class="table table-hover table-primary">
            <tr>
                <th>Game ID</th>
                <th>Game Name</th>
            </tr>

            <?php foreach ($games as $game) : ?>
            <tr>
                <td><?php echo $game['gameID']; ?></td>
                <td><?php echo $game['gameName']; ?></td>
            </tr>
            <?php endforeach; ?>
            </table>
    </section>
  </div>

  <?php include 'includes/footer.php';?>
</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
  
</html>
