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
else if ($action == 'not_complete') {
    include 'view/header.php';
    include 'view/form_header.php';
    include 'view/not_complete.php';
    include 'view/footer.php';
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