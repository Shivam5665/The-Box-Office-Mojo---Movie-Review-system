<?php
session_start();
if (!isset($_SESSION['user'])){
    header('Location: log_in.php');
}
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
            <div class="container-fluid border rounded m-3">    
                <div class="card shadow-lg col-11 mx-auto text-center justify-content-center bg-light m-3">
                    <div class="btn btn-lg btn-success col-2 mx-auto m-3" onclick="show_filters()">More filters?</div>
                    <div class="d-none" id="filterArea">
                    <form action="filtered_search.php" method="POST" class="form-group">
                        <div class="row">
                            <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                <h4 class="display text-primary">Genre&#58;</h4>
                            </div>
                            <div class="form-group col-4">
                                <label for="form-select" id="form-select"></label>
                                <select class="form-control" name="genre">
                                    <option>Any</option> 
                                    <option>Action</option> 
                                    <option>Adventure</option> 
                                    <option>Sci</option> 
                                    <option>Mystery</option> 
                                    <option>Horror</option> 
                                    <option>Thriller</option> 
                                    <option>Animation</option> 
                                    <option>Comedy</option> 
                                    <option>Family</option> 
                                    <option>Fantasy</option> 
                                    <option>Drama</option> 
                                    <option>Music</option> 
                                    <option>Romance</option> 
                                    <option>History</option> 
                                    <option>Crime</option> 
                                    <option>Western</option> 
                                    <option>War</option> 
                                    <option>Musical</option> 
                                    <option>Sport</option> 
                                </select>
                            </div> 
                            <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                <h4 class="display text-primary">Actor&#58;</h4>
                            </div>
                            <div class="form-group col-4">
                                <label for="form-select" id="form-select"></label>
                                <input type="text" class="form-control m-3" name="actor" placeholder="Actor's name"/>
                            </div> 
                        </div>    
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Rank&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="rankcomp">
                                            <option>Equal to</option>
                                            <option>Not equal to</option>
                                            <option>Greater than</option>
                                            <option>Greater than equal to</option>
                                            <option>Less than</option>
                                            <option>Less than equal to</option> 
                                        </select>
                                        <input type="number" min="1" max="1000" class="form-control m-3" placeholder="Enter value" id="rankvalue" name="rankvalue" onchange="check_rank_val()">
                                    </div>
                                </div> 
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Year&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="yearcomp">
                                            <option>Equal to</option>
                                            <option>Not equal to</option>
                                            <option>Greater than</option>
                                            <option>Greater than equal to</option>
                                            <option>Less than</option>
                                            <option>Less than equal to</option> 
                                        </select>
                                        <input type="number" min="1900" max="2019" class="form-control m-3" placeholder="Enter value" id="yearvalue" name="yearvalue" onchange="check_year_val()">
                                    </div> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Runtime <small>(Minutes)</small>&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="runtimecomp">
                                            <option>Equal to</option>
                                            <option>Not equal to</option>
                                            <option>Greater than</option>
                                            <option>Greater than equal to</option>
                                            <option>Less than</option>
                                            <option>Less than equal to</option> 
                                        </select>
                                        <input type="number" min="1" max="240" class="form-control m-3" placeholder="Enter value" id="runtimevalue" name="runtimevalue" onchange="check_runtime_val()">
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Votes&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="votescomp">
                                            <option>Equal to</option>
                                            <option>Not equal to</option>
                                            <option>Greater than</option>
                                            <option>Greater than equal to</option>
                                            <option>Less than</option>
                                            <option>Less than equal to</option> 
                                        </select>
                                        <input type="number" min="1" max="1800000" class="form-control m-3" placeholder="Enter value" id="votesvalue" name="votesvalue" onchange="check_votes_val()">
                                    </div>
                                </div> 
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Revenue <small>(in Millions)</small>&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="revenuecomp">
                                            <option>Equal to</option>
                                            <option>Not equal to</option>
                                            <option>Greater than</option>
                                            <option>Greater than equal to</option>
                                            <option>Less than</option>
                                            <option>Less than equal to</option> 
                                        </select>
                                        <input type="number" min="1" max="1000" class="form-control m-3" placeholder="Enter value" id="revenuevalue" name="revenuevalue" onchange="check_revenue_val()">
                                       </div> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Metascore&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="metascorecomp">
                                            <option>Equal to</option>
                                            <option>Not equal to</option>
                                            <option>Greater than</option>
                                            <option>Greater than equal to</option>
                                            <option>Less than</option>
                                            <option>Less than equal to</option> 
                                        </select>
                                        <input type="number" min="1" max="100" class="form-control m-3" placeholder="Enter value" id="metascorevalue" name="metascorevalue" onchange="check_metascore_val()">
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <hr class="col-6">
                        <button class="btn col-1 btn-primary" type="submit" value="submit" id="submit" onclick="">
                            Go
                        </button>
                    </form>
                </div>

                
            </div>
        
            


<?php
$filter = [];

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['by'])){
        $by = $_GET['by'];
        if ($by == "topRated"){
            $filter = ['Rating' => ['$gt'=>8]];
        }else if($by == "popular"){
            $filter = ['Revenue_in_Millions' => ['$gt'=>500]];
        }else{
            $filter = ['Genre' => ['$all'=>[$by]]];
        }
    }
}else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //$test = ['Genre'=>['$all'=>['Action']], 'Rank'=>['$ne'=>5], 'Votes'=>['$gt'=>1500000]];
    //$test = ["Runtime_in_minutes"=>['$eq'=> 121]];
    //print_r($test);
    //echo gettype($test);
    //echo '<br>';

    $comp_ops = ['Equal to'=>'$eq', 'Not equal to'=>'$ne', 
                'Greater than'=>'$gt', 'Greater than equal to'=>'$gte', 
                'Less than'=>'$lt', 'Less than equal to'=>'$lte'];

    if ($_POST['genre'] != 'Any'){
        $filter['Genre'] = ['$all'=>[$_POST['genre']]];
    }
    if ($_POST['actor'] != ''){
        $filter['Actors'] = ['$regex'=>$_POST['actor']];
    }
    if ($_POST['rankvalue'] != ''){
        $filter['Rank'] = [$comp_ops[$_POST['rankcomp']]=>(int)$_POST['rankvalue']];
    }
    if ($_POST['yearvalue'] != ''){
        $filter['Year'] = [$comp_ops[$_POST['yearcomp']]=>(int)$_POST['yearvalue']];
    }
    if ($_POST['runtimevalue'] != ''){
        $filter['Runtime_in_minutes'] = [$comp_ops[$_POST['runtimecomp']]=>(float)$_POST['runtimevalue']];
    }
    if ($_POST['votesvalue'] != ''){
        $filter['Votes'] = [$comp_ops[$_POST['votescomp']]=>(float)$_POST['votesvalue']];
    }
    if ($_POST['revenuevalue'] != ''){
        $filter['Revenue_in_Millions'] = [$comp_ops[$_POST['revenuecomp']]=>(float)$_POST['revenuevalue']];
    }
    if ($_POST['metascorevalue'] != ''){
        $filter['Metascore'] = [$comp_ops[$_POST['metascorecomp']]=>(float)$_POST['metascorevalue']];
    }
    //print_r($filter);
    //echo gettype($filter);
}
    //echo ($test==$filter);
    //print_r($filter);
    $options = [];
    
    $dbname = 'Movies_db';
    $c_user = 'movies';

    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017'); 

    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $manager->executeQuery("$dbname.$c_user", $query);

    $cursor2 = $manager->executeQuery("$dbname.$c_user", $query);

    //$arr = iterator_to_array($cursor);
    //print_r($arr);

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
        </div>
    </div>
</body>
</html>

        ';



?>



<!--
     
-->