<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/uniform.css" />
    <link rel="stylesheet" href="css/select2.css" />
    <link rel="stylesheet" href="css/matrix-style.css" />
    <link rel="stylesheet" href="css/matrix-media.css" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


<!-dashboard---->
<?php

include"dash-menu.php"
?>


<div>
    <p><?php echo $game_name?></p>
</div>

<!---->


<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>

        <h1>Games Request</h1>

                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                        <h5>Data table</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>

                            <tr>
                                <th>Game Name</th>
                                <th>console</th>
                                <th>UserName</th>
                                <th>Email</th>



                            </tr>
                            <?php
                            $con = mysqli_connect('localhost', 'root', 'root', 'yogames');

                            $query = "SELECT * FROM games";
                            $result = mysqli_query($con,$query);
                            if (mysqli_num_rows($result)  == 0){
                                echo  "<script> alert('yoyo'); </script>";
                            }

                            while($row= mysqli_fetch_assoc($result)) {
                                $game_name = $row['game_name'];
                                $id = $row['id'];
                                ?>
                                <tr >
                                    <td><?php echo $game_name;?></td>
                                    <td><?php echo $game_name;?></td>
                                    <td>Win 98+</td>
                                    <td class="center">6</td>
                                </tr>
                            <?php } ?>

                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Footer-part-->
<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.uniform.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/matrix.js"></script>
<script src="js/matrix.tables.js"></script>
</body>
</html>
