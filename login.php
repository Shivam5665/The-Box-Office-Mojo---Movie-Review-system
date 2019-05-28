<?php
session_start();

$dbname = 'Movies_db';
$c_user = 'sign_up';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $uname = test_input($_POST["uname"]);
    $psd = test_input($_POST["psd"]);
    echo $uname;
    echo $psd;
    //Error Handlers
    
    if(empty($uname) || empty($psd)){
        header("Location: log_in.php?login=empty");
        exit();
    }else{
        $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017'); 
        
        $filter = ['uname' => "$uname" ];
        $options = [];
        
        $query = new MongoDB\Driver\Query($filter, $options);
        $cursor = $manager->executeQuery("$dbname.$c_user", $query);
        
        $count = 0;
        
        foreach ($cursor as $dd){
            $count = $count + 1;    
        }
        
        if ($count == 0){
            header("Location: log_in.php?login=NoUsernameError");
            exit();
        }
        
        else{   
        
        
            $hashedpwd = password_verify($psd, $dd->psd);
            
            if($hashedpwd == false){
                header("Location: log_in.php?login=PwError");
                exit();
            }
            
            elseif($hashedpwd == true){
                $_SESSION['user'] = $uname;
                
                header("Location: index.php?user=".$uname);
                exit();       
	        }
        }
    }
    
}else{
   header("Location: log_in.php?login=SERVERerror");
   exit();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
