<?php include '../includes/db.php';
session_start();

if($_FILES['image']['name'] != ''){


    $username = $_SESSION['loginAccount'];
    $test = explode("." , $_FILES['image']['name']);
    $extension = strtolower(end($test));
    $imageName = $_SESSION['loginAccount'] . '.' . $extension;
    $location = "../users_profiles/" . $_SESSION['loginAccount'] . '/' . $imageName;

    $query = "UPDATE users " . "SET user_image = '$imageName' WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    $_SESSION['loginAccountImage'] = "users_profiles/" . $_SESSION['loginAccount'] . "/" . $imageName;
    $newSrc = "users_profiles/" . $_SESSION['loginAccount'] . '/' . $imageName;

    move_uploaded_file($_FILES['image']['tmp_name'], $location);
    echo $newSrc;
}
