<?php
//model.php has all the functions used for this website
require('../model/database.php');
require('../model/user_db.php');
require('../model/scrubber.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'default';
}

//No Selection just causes the dropdown to show
if($action == 'default'){
	include 'view/header.php';
	include 'view/form_header.php';
    include 'view/pending_approval.php';
	include 'view/footer.php';
}
else if ($action == 'check_login') {
    // Get the fields
    $username = $_POST['username'];
    $password = $_POST['password'];
    //Strip special characters from username and password
    $username = strip_special($username);
    $password = strip_special($password);
    //Check for user
    $user = check_account($username, $password);
    //If user isn't found go back to login page and say user not found
   	
    if($user[0] == 'client'){
    	$_SESSION['session_type'] = 'client';
        header("Location: /code-for-good-MHDC/client");
    }
    //If user is found and he is a customer
    else if($user[0] == 'admin'){
    	$_SESSION['session_type'] = 'admin';
        header("Location: /code-for-good-MHDC/employee");
    }
    else{
    	header("Location: /code-for-good-MHDC/view/error.php");
    }
}
else if($action == 'logout'){
	session_start();
	unset($_SESSION["session_type"]);
	$_SESSION = array();
	session_destroy();
	header("Location: /code-for-good-MHDC/login/");
}
//If the dropdown has been selected this runs
//this will show the dropdown again as well as the tables

// elseif ($action == 'check_login') {
// 	if($user == 'client'){
// 		$_
//         $user_id = $user['userID'];
//         header("Location: /code-for-good-MHDC/client/");
//     }
// }


?>