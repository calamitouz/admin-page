<?php

include "../includes/db.php";


$game_name = $_POST['game_name'];
$game_tags = $_POST['game_tags'];
$classification  = $_POST['classification'];

$insert_query = "INSERT INTO games_list (game_name, tags, classification) VALUE ('$game_name', '$game_tags', '$classification')";
$insert_query_result = mysqli_query($con, $insert_query);

if($insert_query_result){
    echo "done";
}else{
    echo "error";

}
