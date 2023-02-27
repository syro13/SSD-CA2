<?php
require_once('database.php');

// Get products
$queryRunners = 'SELECT * FROM runner';
$queryGames = 'SELECT * FROM game';
$queryLeaderboard = 'SELECT * FROM leaderboard';

$statement = $db->prepare($queryRunners);
$statement->execute();
$runners = $statement->fetchAll();
$statement->closeCursor();

$statement = $db->prepare($queryGames);
$statement->execute();
$games = $statement->fetchAll();
$statement->closeCursor();

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
    <link href="mystyle.css" rel="stylesheet">
  </head>
  <body>
    
  <?php include 'includes/header.php';?>
    

<main class="container">
  <div class="starter-template text-center">
  <table class="table table-hover table-primary">
            <tr>
                <th>Run ID</th>
                <th>ranking</th>
                <th>Runner ID</th>
                <th>Game ID</th>
                <th>Run Time</th>
                <th>Delete</th>
            </tr>

            <?php foreach ($leaderboard as $data) : ?>
            <tr>
                <td><?php echo $data['runId']; ?></td>
                <td><?php echo $data['position']; ?></td>
                <td><?php echo $data['runnerID']; ?></td>
                <td><?php echo $data['gameID']; ?></td>
                <td><?php echo $data['runTime']; ?></td>
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
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
