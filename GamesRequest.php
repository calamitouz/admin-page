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
                        <h5>Game Request Orders</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>Request ID</th>
                                <th>Game Name</th>
                                <th>console</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Action </th>
                            </tr>
                            <?php
                            include "../includes/db.php";

                            $query = "SELECT * FROM games_list WHERE status = 'visible'";
                            $result = mysqli_query($con,$query);

                            while($row= mysqli_fetch_assoc($result)) {
                                $req_id = $row['id'];
                                $game_name = $row['game_name'];
                                $platform = $row['platform'];
                                $email = $row['email'];
                                $username = $row['username'];
                                ?>
                                <tr >
                                    <td><?php echo $req_id;?></td>
                                    <td><?php echo $game_name;?></td>
                                    <td><?php echo $platform;?></td>
                                    <th><?php echo $username;?></th>
                                    <td><?php echo $email;?></td>
                                    <th>
                                        <a href="UploadGamesPage.php?req_id=<?php echo $req_id?>"><button  style="margin-right: 5px" class="btn btn-primary btn-mini">Add Game</button></a>
                                        <button style="margin-right: 5px" class="btn btn-primary btn-mini">Delete</button>
                                    </th>
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
