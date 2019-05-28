<?php

    $user = $_GET['user'];
    $title = $_GET['title'];

    echo $user;
    echo $title;
    

	$filter = ['user'=>$user];
	$options = [];
    
    $dbname = 'Movies_db';
    $c_user = 'watchlist';

    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017'); 

    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $manager->executeQuery("$dbname.$c_user", $query);
    $cursor2 = $manager->executeQuery("$dbname.$c_user", $query);
    
    $ctr = 0;
    foreach($cursor as $c){
        $ctr++;
    }

    $single = new MongoDB\Driver\BulkWrite();
    if ($ctr == 0){
        $arr = array();
        $arr['user'] = $user;
        $arr['list'] = array($title);
        $single->insert($arr);
        $manager->executeBulkWrite("$dbname.$c_user", $single);   
    }else{
        $arr = iterator_to_array($cursor2);
        $bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);
        $size = strval(sizeof($arr));
        $bulk->update(['user' => $user], ['$addToSet' => ['list' => $title]]);
        $result = $manager->executeBulkWrite("$dbname.$c_user", $bulk);
    }
    header('Location: filtered_search.php');	

?>