<?php
include "../includes/db.php";


if(isset($_POST['gameName'])) {
    $gamename = $_POST['gameName'];
    $query = "SELECT * " . "FROM games_list WHERE game_name = '$gamename'";
    $result = mysqli_query($con, $query);


    if(mysqli_num_rows($result) > 0) {
    echo "found";
    }else{
        echo "not found";
    }
}




