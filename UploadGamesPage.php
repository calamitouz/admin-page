
<!DOCTYPE html>
<html lang="en">
<head>
<title>YoGames</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="css/UploadGamesPage.css"/>
</head>
<body>

<?php
include"dash-menu.php"
?>

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->
  <div  class="upload-game-div" style="text-align: center" id="content-header">



      <div   class="input-game ">
        <h1   style= "color: white font-weight: bold ;margin-right: 35px ; margin-bottom: 20px" >Upload Games </h1>

        <div class="input-box">

    <input   type="text" id="game-name" name="game_name" placeholder="Game Name">

          <output  name="id " ></output>
         <br>
          <textarea id=game-tags placeholder="Tags"></textarea>
         <br>


         <input type="text" id="classification"  placeholder="Classification">
        </div>
          <br>
            <br>

            <div class="row"
            <label  style=" color: white; font-weight:bold; margin-left:110px" class="control-label">Upload Image</label>
            <input  type="file" name="myfile">
            </div>




          <button   style=" background-color: darkorange" type="button" class=" buttons btn-primary">test</button>
            <button  type="submit" style="background:  green" class="buttons  btn-primary">Upload</button>

            <button  type="submit" class="buttons  btn-primary">Reset</button>



</div>



<!--Turning-series-chart-js-->
<script src="js/matrix.dashboard.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="js/excanvas.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.ui.custom.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flot.min.js"></script>
    <script src="js/jquery.flot.resize.min.js"></script>
    <script src="js/jquery.peity.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/matrix.js"></script>
    <script src="js/matrix.dashboard.js"></script>
    <script src="js/jquery.gritter.min.js"></script>
    <script src="js/matrix.interface.js"></script>
    <script src="js/matrix.chat.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/matrix.form_validation.js"></script>
    <script src="js/jquery.wizard.js"></script>
    <script src="js/jquery.uniform.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/matrix.popover.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/matrix.tables.js"></script>

    <script>
              $(document).ready(function () {


                  $("#upload-submit").click(function () {
                      var game_name = $("#game-name").val();
                      var game_tags = $("#game-tags").val();
                      var classification = $("#classification").val();
                      $.ajax({
                          url: "operations/upload_game.php",
                          data: {game_name:game_name, game_tags:game_tags, classification:classification},
                          type: "POST",
                          success: function (data) {
                              if(data === "done"){
                                  alert("game uploaded");
                              }else {
                                  alert("upload error");
                              }

                          }
                      });
                  })


              });

          </script>
</body>
</html>
