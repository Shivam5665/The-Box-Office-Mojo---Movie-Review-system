<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<title>User Ratings</title>
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

		* {
		box-sizing: border-box;
		}

		body {
		font-family: Arial;
		margin: 0 auto; /* Center website */
		/*max-width: 800px; /* Max width */
		padding: 20px;
		}

		.idk {
		font-family: Arial;
		margin: 0 auto; /* Center website */
		max-width: 800px; /* Max width */
		padding: 20px;
		}

		.heading {
		font-size: 25px;
		margin-right: 25px;
		}

		.fa {
		font-size: 25px;
		}

		.checked {
		color: orange;
		}

		/* Three column layout */
		.side {
		float: left;
		width: 15%;
		margin-top: 10px;
		}

		.middle {
		float: left;
		width: 70%;
		margin-top: 10px;
		}

		/* Place text to the right */
		.right {
		text-align: right;
		}

		/* Clear floats after the columns */
		.row:after {
		content: "";
		display: table;
		clear: both;
		}

		/* The bar container */
		.bar-container {
		width: 100%;
		background-color: #f1f1f1;
		text-align: center;
		color: white;
		}

		/* Individual bars */
		.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
		.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
		.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
		.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
		.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

		/* Responsive layout - make the columns stack on top of each other instead of next to each other */
		@media (max-width: 400px) {
			.side, .middle {
				width: 100%;
			}
			/* Hide the right column on small screens */
			.right {
				display: none;
			}
		}
		
		</style>

			
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
                        <li><a href="user_watchlist.php?user='.$_SESSION['user'].'"><span class="glyphicon glyphicon-heart"></span> '.$_SESSION['user'].'\'s Playlist</a></li>
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
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
	$title = $_GET['title'];

	$filter = ['Title'=>$title];
	$options = [];
    
    $dbname = 'Movies_db';
    $c_user = 'movies';

    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017'); 

    $query = new MongoDB\Driver\Query($filter, $options);
	$cursor = $manager->executeQuery("$dbname.$c_user", $query);
	
	//$arr = iterator_to_array($cursor);
	//print_r($arr);

	foreach($cursor as $c){
		echo '
		<div class="container-fluid border rounded m-3">
		<div class="card shadow-md col-10 justify-content-center align-items-center mx-auto m-3">
			<div class="row text-center">
				<div class="text-center mx-auto">
					<a href="user_rating.php?id='.$c->_id.'">
						<img class="img-fluid" src="http://www.weeatfilms.com/wp-content/uploads/2012/10/shawshank-redemption.jpg" alt=""  style="height:100%; width: 50%">
					</a>
				</div>
				<div class="bg-light border dark mx-auto">
					<strong><h1 class="display-1 text-primary">'.$c->Title.'</h1></strong>
					<h4 class="col-10 justify-content-center mx-auto">
						<br><strong>Runtime: </strong>'.$c->Runtime_in_minutes.' | <strong>Genre: </strong>'.implode(", ", $c->Genre).'
						<br><strong>Rank: </strong>'.$c->Rank.'
						<br><strong>Year: </strong>'.$c->Year.'
						<hr><strong>Description: </strong>'.$c->Description.'
						<br>
						<br><strong>Director: </strong>'.$c->Director.'
						<br>
						<br><strong>Stars: </strong>'.implode(", ", $c->Actors).'
						<br>
						<br><strong>User Rating: </strong>';
						for($x=1; $x<$c->Rating; $x++){
							echo '<span class="fa fa-star checked"></span>';
						}
						for($x=$c->Rating; $x<10; $x++){
							echo '<span class="fa fa-star"></span>';
						}
					echo '
						<p>'.$c->Rating.'</p>
						<br><strong>Votes: </strong>'.$c->Votes.'
						<br><strong>Revenue (Millions): </strong>'.$c->Revenue_in_Millions.'
						<br><strong>Metascore: </strong>'.$c->Metascore.'
					</h4>
					<a class="btn btn-primary m-5" href="add_2_watch.php?user='.$_SESSION['user'].'&&title='.$c->Title.'">Add to Watchlist</a>
				</div>
			</div>
		</div>
		<br>
		<br>
		
		</div>
		';
	}
	
	
}
?>
		</div>
	</div>
	<br><br><br><br>
</body>
</html>

<!--

-->