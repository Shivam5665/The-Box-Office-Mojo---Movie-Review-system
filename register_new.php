<?php

session_start();

$conn = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$dbname = 'Movies_db';
$c_user = 'sign_up';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = test_input($_POST["fullName"]);
    $uname = test_input($_POST["userName"]);
    $email = test_input($_POST["email"]);
    $psd = test_input($_POST["password"]);
    $cpsd = test_input($_POST["cnfpassword"]);
    $dob = test_input($_POST["birthDate"]);
    $phone = test_input($_POST["phoneNumber"]);
    $gender = test_input($_POST["genderRadio"]);
}


if (empty($fname) || empty($uname) || empty($email) || empty($psd) || empty($cpsd) || empty($dob) || empty($phone) || empty($gender)){
    header("Location: sign_up.php?signup=empty");
    exit();
} else {
        $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
        
        $filter = ['uname' => "$uname" ];
        $options = [];
        
        $query = new MongoDB\Driver\Query($filter, $options);
        $cursor = $manager->executeQuery("$dbname.$c_user", $query);
        
        $count = 0;
        
        foreach ($cursor as $document){
            $count = $count + 1;
        }
        
        if ($count > 0){
            header("Location: sign_up.php?signup=usertaken");
            exit();
        } else{
        
            if($psd != $cpsd){
                header("Location: sign_up.php?signup=paswword_not_match");
            }
            else{
                $hashed_psd = password_hash($psd, PASSWORD_DEFAULT);
                $hashed_cpsd = password_hash($cpsd, PASSWORD_DEFAULT);
                //Insert data in DB
                $user = array(
                'fname' => $fname,
                'uname' => $uname,
                'email' => $email,
                'psd' => $hashed_psd,
                'cpsd' => $hashed_cpsd,
                'dob' => $dob,
                'phone' => $phone,
                'gender' => $gender
            );

            $single_insert = new MongoDB\Driver\BulkWrite();
            $single_insert->insert($user);

            $conn->executeBulkWrite("$dbname.$c_user", $single_insert);
            //echo "$uname added succesfully.";

            header('Location: log_in.php?signup=success');
            exit();
            }
        }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
