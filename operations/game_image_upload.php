<?php

include "../includes/db.php";
if($_FILES['image']['name'] != '') {

   $query = "SELECT * FROM games_list_test WHERE  id = (SELECT MAX(id)  FROM games_list_test)";
   $result = mysqli_query($con, $query);
   $row = mysqli_fetch_assoc($result);
        $img_name = $row['id'];


        $test = explode(".", $_FILES['image']['name']);
        $extension = strtolower(end($test));

        $imageName = $img_name . '.' . $extension;
        $location = '../imges_games/' . $imageName;

        $query1 = "UPDATE games_list_test SET game_image = '$imageName' WHERE id = '$img_name'";
        $result = mysqli_query($con, $query1);


        move_uploaded_file($_FILES['image']['tmp_name'], $location);
    $query = "SELECT * FROM games_list_test WHERE id = (SELECT MAX(id)  FROM games_list_test)";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    $game_img = "imges_games/" . $row['game_image'];


    if($result){
    echo ("
      
         <h1> ".$row['game_name']."</h1>
         <img src='$game_img'>
        
           ");

}else {
    echo "image error";
}

}else{
    echo "ks 3zy";
}
