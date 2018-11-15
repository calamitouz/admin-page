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
     
         <h1></h1>
         <img class='img' src='$game_img'>         
        <h4 class=\"card-title text-center\" style=\"margin-top: 10px;\"> ".$row['game_name']."</h4>
        <p  class=\"card-text text-center game-price\" style=\"color: #FF6D00\" dir=\"rtl\"> ريال</p>
        <p class=\"card-text text-center game-days\" style=\"color: #FF6D00\" dir=\"rtl\">المدة:30 </p>
        <p class=\"card-text text-center game-platform\" style=\"color: #FF6D00\" dir=\"rtl\">المنصة: PS4</i></p>
        <p class=\"card-text text-center game-username\" style=\"color: #FF6D00\" dir=\"rtl\">نوع العرض:بيع </p>
         <br>
         <button  id=\"edit\"  style=\" background-color: darkorange\" type=\"button\" class=\" buttons btn-primary\">Edit</button>
         <button  id=\"upload-submit\" name=\"upload\" type=\"submit\" style=\"background:  green\" class=\"buttons  btn-primary\">Upload</button>

        
           ");

}else {
    echo "image error";
}

}else{

}
