<?php
session_start();
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
    
	<div class="container">
		<strong><h2>MOVIE REVIEWS</h2></strong>
		<p1>&emsp;&emsp;&emsp;The Box Office Mojo is your source for movie reviews and movie ratings to help maximize your movie-going-experience. Our easy to use movie reviews and movie ratings are based on scores and opinions from respected movie critics, family advocacy groups and movie fans like you. Whether it’s a family movie outing, first date or girls’ night out, our movie reviews will help you find the perfect movie for any occasion. 
		</p1>
	</div>
    <br>
    <br>
    <br>

	<div class="container">
    	<h1 class="my-4">Most Popular
            <small>Movies</small>
      	</h1>
        <hr>
        <div class="container-fluid border rounded m-5">
            <!-- The Shawshank Redemption -->   
            <div class="row">
                <div class="col text-center">
                    <a href="#">
                        <img class="img-fluid" src="http://www.weeatfilms.com/wp-content/uploads/2012/10/shawshank-redemption.jpg" alt=""  style="height:100%; width: 50%">
                    </a>
                </div>
                <div class="col bg-light border dark">
                    <strong><h3>The Shawshank Redemption(1994)</h3></strong>
                    <h5> 2h 22min | Drama | 14 October 1994 (USA) </h5>
                    <p> Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.
                    <br><strong>Director:</strong> Frank Darabont
                    <br><strong>Writers:</strong> Stephen King (short story "Rita Hayworth and Shawshank Redemption"), Frank Darabont (screenplay)
                    <br><strong>Stars:</strong> Tim Robbins, Morgan Freeman, Bob Gunton</p>
                    <a class="btn btn-primary" href="#">Add to Watchlist</a>
                    <a class="btn btn-primary" href="#">See Details</a>
                </div>
            </div>
            
            <br>
            <br>
            <!-- Captain Marvel -->	
            <div class="row">
                <div class="col bg-light border dark">
                    <strong><h3>Captain Marvel</h3></strong>
                    <h5> 2h 3min | Action, Adventure, Sci-Fi | 8 March 2019 (USA) </h5>
                    <p> Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war between two alien races. 
                    <br><strong>Director:</strong>  Anna Boden, Ryan Fleck
                    <br><strong>Writers:</strong>   Anna Boden (screenplay by), Ryan Fleck (screenplay by) 
                    <br><strong>Stars:</strong>  Brie Larson, Samuel L. Jackson, Ben Mendelsohn</p>
                    <a class="btn btn-primary" href="#">Add to Watchlist</a>
                    <a class="btn btn-primary" href="#">See Details</a>
                </div>
                <div class="col text-center">
                <a href="#">
                    <img class="img-fluid" src="https://cdn.images.express.co.uk/img/dynamic/36/590x/secondary/captain-marvel-movie-1332369.jpg" alt="" style="height:100%; width: 50%">
                </a>
                </div>
            </div>
                <br>
            <br>
            <!-- The Grudge -->
            <div class="row">
                <div class="col text-center">
                    <a href="#">
                        <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/en/thumb/8/82/Grudge2tease1-2.jpg/220px-Grudge2tease1-2.jpg" alt="">
                    </a>
                </div>
                <div class="col bg-light border dark">
                    <h3>The Grudge(2004)</h3>
                    <h5>Horror, Mystery, Thriller | 22 October 2004 (USA) </h5>
                    <p> An American nurse living and working in Tokyo is exposed to a mysterious supernatural curse, one that locks a person in a powerful rage before claiming their life and spreading to another victim. 
                    <br><strong>Director:</strong>  Takashi Shimizu
                    <br><strong>Writers:</strong> Stephen Susco (screenplay), Takashi Shimizu (film "Ju-On: The Grudge")
                    <br><strong>Stars:</strong>  Sarah Michelle Gellar, Jason Behr, Clea DuVall</p>
                    <a class="btn btn-primary" href="#">Add to Watchlist</a>
                    <a class="btn btn-primary" href="#">See Details</a>
                </div>
            </div>
            <br>
            <br>

            <!-- Baahubali 2: The Conclusion -->
            <div class="row">
                <div class="col bg-light border dark">
                    <h3> Baahubali 2: The Conclusion (2017) </h3>
                    <h5>2h 47min | Action, Drama | 28 April 2017 (USA) </h5>
                    <p> When Shiva, the son of Bahubali, learns about his heritage, he begins to look for answers. His story is juxtaposed with past events that unfolded in the Mahishmati Kingdom. 
                    <br><strong>Director:</strong>  S.S. Rajamouli
                    <br><strong>Writers:</strong> Vijayendra Prasad (story by), S.S. Rajamouli (screenplay by)
                    <br><strong>Stars:</strong> Prabhas, Rana Daggubati, Anushka Shetty </p>
                    <a class="btn btn-primary" href="#">Add to Watchlist</a>
                    <a class="btn btn-primary" href="#">See Details</a>
                </div>
                <div class="col text-center">
                    <a href="#">
                        <img class="img-fluid" src="https://images.indianexpress.com/2017/01/baahubali-2-em.jpg" alt="" style="height:100%; width: 50%">
                    </a>
                </div>
            </div>

            <hr>
            <hr>

            <!-- Pagination -->
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <!-- /.container -->

<br>
<br>
  
    <div class="container-fluid text-center">
        <p>The Box office Mojo Copyright</p>  
        <form class="form-inline">Subscribe for latest updates:
            <input type="email" class="form-control" size="50" placeholder="Enter your Email Address">
            <button type="button" class="btn btn-danger">Done</button>
        </form>
    </div>

<br><br><br><br>

</body>
</html>
	

