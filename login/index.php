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
    $action = 'login';
}

//No Selection just causes the dropdown to show
if($action == 'login'){
    include 'view/header.php';
    include 'view/login.php';
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
    if(isset($user)){
        header("Location: /code-for-good-MHDC/view/images/header-logo.png");
    }
    //If user is found and he is a customer
    else{
        header("Location: /code-for-good-MHDC/view/images/footer-bottom.png");
    }
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