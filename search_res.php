<?php
session_start();
if (!isset($_SESSION['user'])){
    header('Location: log_in.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>THE BOX OFFICE MOJO - Rate it!</title>
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
    <link rel="stylesheet" href="style.css">
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
</head>
<body>
    <nav class="navbar navbar-inverse navbar-expand-lg navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="https://pbs.twimg.com/profile_images/888060502680649730/PxWdOyx1.jpg" alt="logo" style="width:50px;">
            </div>
            <div class="navbar-header">    
                <a class="navbar-brand" href="#"> THE BOX OFFICE MOJO</a> 
            </div>
            <form class="navbar-form navbar-left" action="search_res.php" method="GET">
                <div class="form-group">
                    <input type="text" class="form-control" name="search_qry" placeholder="Search">
                </div>
                <button type="Search" class="btn btn-default">Search</button>
            </form>

            <div class="nav navbar-nav">
                <div class="dropdown">
                    <button class="btn btn-lg btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <small>or try a: </small><strong>Filter Search</strong>
                    </button>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-item"><a href="filtered_search.php?by=topRated">Top Rated</a></li>
                        <li class="dropdown-item"><a href="filtered_search.php?by=popular">Most Popular</a></li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-submenu">
                            <a  class="dropdown-item" tabindex="-1" href="#">Genre</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a tabindex="-1" href="filtered_search.php?by=Action">Action</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Adventure">Adventure</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Sci-Fi">Sci-fi</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Mystery">Mystery</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Horror">Horror</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Thriller">Thriller</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Animation">Animation</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Comedy">Comedy</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Family">Family</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Fantasy">Fantasy</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Drama">Drama</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Music">Music</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Romance">Romance</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=History">History</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Crime">Crime</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Western">Western</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=War">War</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Musical">Musical</a></li>
                                <li class="dropdown-item"><a href="filtered_search.php?by=Sport">Sport</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
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
    <br>
    
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017'); 

    $dbname = 'Movies_db';
    $c_user = 'movies';
    
    $filter = ['Title' => ['$regex'=>$_GET['search_qry'], '$options'=>"-i"]];
    $options = [];

    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $manager->executeQuery("$dbname.$c_user", $query);

    $cursor2 = $manager->executeQuery("$dbname.$c_user", $query);

    //$arr = iterator_to_array($cursor);

    echo '
        <div class="container-fluid border rounded m-5">
            <div class="card shadow-lg col-11 justify-text-center align-items-center mx-auto">
        ';
    $ctr = 0;
    foreach($cursor2 as $x){
        $ctr++;
    }

    if ($ctr == 0){
        echo '
            <div class="row">
                <h3 class="text-primary">No results for the given query</hr>
            </div>
            ';
    }else{
        foreach($cursor as $c){
            echo '
                <div class="row">
                    <div class="col text-center">
                        <a href="user_rating.php?title='.$c->Title.'">
                            <img class="img-fluid" src="http://www.weeatfilms.com/wp-content/uploads/2012/10/shawshank-redemption.jpg" alt=""  style="height:100%; width: 50%">
                        </a>
                    </div>
                    <div class="col bg-light border dark">
                        <strong><h3>'.$c->Title.'</h3></strong>
                        <p>
                            <br><strong>Runtime: </strong>'.$c->Runtime_in_minutes.' | <strong>Genre: </strong>'.implode(", ", $c->Genre).' | <strong>Rank: </strong>'.$c->Rank.'
                            <br><strong>Year: </strong>'.$c->Year.'
                            <hr><strong>Description: </strong>'.$c->Description.'
                            <br><strong>Director: </strong>'.$c->Director.'
                            <br><strong>Stars: </strong>'.implode(", ", $c->Actors).'
                            <hr><strong>Rating: </strong>'.$c->Rating.'
                            <br><strong>Votes: </strong>'.$c->Votes.'
                            <br><strong>Revenue (Millions): </strong>'.$c->Revenue_in_Millions.'
                            <br><strong>Metascore: </strong>'.$c->Metascore.'
                        </p>
                        <a class="btn btn-primary" href="add_2_watch.php?user='.$_SESSION['user'].'&&title='.$c->Title.'">Add to Watchlist</a>
                        <a class="btn btn-primary" href="user_rating.php?title='.$c->Title.'">See Details</a>
                    </div>
                </div>
            ';
        }
    }

    echo '
        
            </div>
        </div>
        ';

}
?>

    </div>

</body>
</html>