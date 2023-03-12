

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    function reset() {
        card = document.getElementById("card");
        card.style.display = "";
    }

    function search_function() {
        var input = document.getElementById('search').value;
        var card = document.getElementById("card");
        var $card_value = $('#card_name').html
        console.log($card_value)
        alert($card_value)
        if (input != "") {
            card.style.display = "";

        } else {

            card.style.display = "none";
        }
    }
</script>


<?php

require_once('database.php');
$search = $_GET['search'];
// Get products
$queryLeaderboard = 'SELECT * FROM leaderboard l ,runner r, game g
            where l.runnerID = r.runnerID AND l.gameID = g.gameID AND runnerName LIKE "%' . $search . '%"';

$statement = $db->prepare($queryLeaderboard);
$statement->execute();
$leaderboard = $statement->fetchAll();
$statement->closeCursor();
?>