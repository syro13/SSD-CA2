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


<?php include 'includes/header.php'; ?>
<title>Leaderboards</title>

<body style="background-color:#CFCBC9">

<!-- <input type="text" id="search" onkeyup="search_function()" placeholder="Search for names.."><button onClick="reset()">Reset</button> -->
<?php //include 'includes/search.php'; ?>
    

  <!-- <script>

    function reset() {
      card = document.getElementById("card");
      card.style.display = "";
    }

    function search_function() {
      input = document.getElementById('search').value;
      card = document.getElementById("card");
      card_name = document.getElementsByClassName("card title").value;
      console.log(card_name)
      if (input != "") {
        card.style.display = "";

      } else {
        if(card_name == card){

          card.style.display = "none";
        }
      }
    }
  </script> -->

  <h1 class="text-center m-2">Leaderboards</h1>
  <main class="container ">
    <div class="card-container" id="card">
      <?php foreach ($leaderboard as $data) : ?>
        <div class="card border my-2" style="width: 18rem;">
          <div class="card-body">
            <img class="card-img" src="<?php echo $data['gameIMG']; ?>" />
            <h5 class="card-title" id="card_name"><?php echo $data['runnerName']; ?></h5>
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