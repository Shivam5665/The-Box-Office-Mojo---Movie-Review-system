<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <title>Filtered Search</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"  crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"  crossorigin="anonymous"></script>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"  crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="#">
    <style>
            .dropdown-submenu {
                position: relative;
            }

            .dropdown-submenu>.dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: -6px;
                margin-left: -1px;
                -webkit-border-radius: 0 6px 6px 6px;
                -moz-border-radius: 0 6px 6px;
                border-radius: 0 6px 6px 6px;
            }

            .dropdown-submenu:hover>.dropdown-menu {
                display: block;
            }

            .dropdown-submenu>a:after {
                display: block;
                content: " ";
                float: right;
                width: 0;
                height: 0;
                border-color: transparent;
                border-style: solid;
                border-width: 5px 0 5px 5px;
                border-left-color: #ccc;
                margin-top: 5px;
                margin-right: -10px;
            }

            .dropdown-submenu:hover>a:after {
                border-left-color: #fff;
            }

            .dropdown-submenu.pull-left {
                float: none;
            }

            .dropdown-submenu.pull-left>.dropdown-menu {
                left: -100%;
                margin-left: 10px;
                -webkit-border-radius: 6px 0 6px 6px;
                -moz-border-radius: 6px 0 6px 6px;
                border-radius: 6px 0 6px 6px;
            }
    </style>
    <script>
        function show_filters(){
            document.getElementById("filterArea").className = "d-block";
        }

        function check_rank_val(){ 
            var x = document.getElementById('rankvalue');
            if (parseInt(x.value) > parseInt(x.max)){
                x.value = x.max;
            }else if (parseInt(x.value) <= parseInt(x.min)){
                x.value = x.min;
            }
        }
        function check_year_val(){ 
            var x = document.getElementById('yearvalue');
            if (parseInt(x.value) > parseInt(x.max)){
                x.value = x.max;
            }else if (parseInt(x.value) <= parseInt(x.min)){
                x.value = x.min;
            }
        }
        function check_runtime_val(){ 
            var x = document.getElementById('runtimevalue');
            if (parseInt(x.value) > parseInt(x.max)){
                x.value = x.max;
            }else if (parseInt(x.value) <= parseInt(x.min)){
                x.value = x.min;
            }
        }
        function check_votes_val(){ 
            var x = document.getElementById('votesvalue');
            if (parseInt(x.value) > parseInt(x.max)){
                x.value = x.max;
            }else if (parseInt(x.value) <= parseInt(x.min)){
                x.value = x.min;
            }
        }
        function check_revenue_val(){ 
            var x = document.getElementById('revenuevalue');
            if (parseInt(x.value) > parseInt(x.max)){
                x.value = x.max;
            }else if (parseInt(x.value) <= parseInt(x.min)){
                x.value = x.min;
            }
        }
        function check_metascore_val(){ 
            var x = document.getElementById('metascorevalue');
            if (parseInt(x.value) > parseInt(x.max)){
                x.value = x.max;
            }else if (parseInt(x.value) <= parseInt(x.min)){
                x.value = x.min;
            }
        }
    </script>
</head>
<body>
<div class="wrapper">
    <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-inverse navbar-expand-lg navbar-fixed-top">
                <div class="container-fluid">
                    <div class="nav navbar-nav">
                        <div class="navbar-header">
                            <img src="https://pbs.twimg.com/profile_images/888060502680649730/PxWdOyx1.jpg" alt="logo" style="width:50px;">
                        </div>
                        <div class="navbar-header">    
                            <a class="navbar-brand" href="#"> THE BOX OFFICE MOJO</a> 
                        </div>
                        <form class="navbar-form navbar-left" action="search_res.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="search_qry" placeholder="Search">
                            </div>
                            <button type="Search" class="btn btn-default">Search</button>
                        </form>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php"><i class="fas fa-home-lg"></i></span> Home</a></li>
                        <?php 
                            if(sizeof($_SESSION) == 0){
                                echo'
                        <li><a href="sign_up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="log_in.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                ';
                            }
                            if(sizeof($_SESSION) == 1){
                                echo '
                        <li><a href="user_watchlist.php?user='.$_SESSION['user'].'"><span class="glyphicon glyphicon-heart"></span> '.$_SESSION['user'].'\'s Watchlist</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                                ';
                            }
                        ?>
                        <li><a href="#"><strong>Help?</strong></a></li>
                    </ul>
                </div>
            </nav> 
            <br>
            <br>
            <br>

<?php
#if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $user = $_GET['user'];

	$filter = ['user'=>$user];
	$options = [];
    
    $dbname = 'Movies_db';
    $c_user = 'watchlist';

    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017'); 

    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $manager->executeQuery("$dbname.$c_user", $query);

    //$arr = iterator_to_array($cursor);
    //print_r($arr);

    echo '
        <div class="container-fluid border rounded m-5">
        <h2 class="text-center"><strong>My Watchlist</strong></h2>
        <hr class="col-8">
            <div class="row justify-content-center">
        ';
    foreach($cursor as $doc){
        foreach($doc->list as $title){
            $coll = 'movies';
            $mgr = new MongoDB\Driver\Manager('mongodb://localhost:27017'); 
            $qry = new MongoDB\Driver\Query(['Title'=>$title], $options);
            $cur = $mgr->executeQuery("$dbname.$coll", $qry);
            foreach($cur as $c){
                echo '
                    <div class="card bg-warning col-3 shadow-sm justify-content-center align-items-center m-5">
                        <div class="card-img text-center">
                            <a href="user_rating.php?title='.$c->Title.'">
                                <img class="img-fluid" src="http://www.weeatfilms.com/wp-content/uploads/2012/10/shawshank-redemption.jpg" alt=""  style="height:100%; width: 50%">
                            </a>
                        </div>
                        <div class="card-body bg-info border dark text-dark">
                            <strong class="text-light"><h2>'.$c->Title.'</h2></strong>
                            <p>
                                <br><strong class="text-light">Runtime: </strong>'.$c->Runtime_in_minutes.' | <strong class="text-light">Genre: </strong>'.implode(", ", $c->Genre).'
                                <br><strong class="text-light">Rank: </strong>'.$c->Rank.'
                                <br><strong class="text-light">Year: </strong>'.$c->Year.'
                                <hr><strong class="text-light">Description: </strong>'.$c->Description.'
                                <br><strong class="text-light">Director: </strong>'.$c->Director.'
                                <br><strong class="text-light">Stars: </strong>'.implode(", ", $c->Actors).'
                                <hr><strong class="text-light">Rating: </strong>'.$c->Rating.'
                                <br><strong class="text-light">Votes: </strong>'.$c->Votes.'
                                <br><strong class="text-light">Revenue (Millions): </strong>'.$c->Revenue_in_Millions.'
                                <br><strong class="text-light">Metascore: </strong>'.$c->Metascore.'
                            </p>
                            <a class="btn btn-danger" href="del_2_watch.php?user='.$_SESSION['user'].'&&title='.$c->Title.'">Remove</a>
                            <a class="btn btn-success float-right" href="user_rating.php?title='.$c->Title.'">See Details</a>
                        </div>
                    </div>
                    ';
            }
        }
    }
        
    echo '
            </div>
        </div>
        ';
#}
	
?>

        </div>
    </div>
</body>
</html>