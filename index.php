<?php
//model.php has all the functions used for this website
include 'model/model.php';

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'no_selection';
}

//No Selection just causes the dropdown to show
if($action == 'login'){
    include 'view/header.php';
    include 'view/login.php';
    include 'view/footer.php';
}
//If the dropdown has been selected this runs
//this will show the dropdown again as well as the tables
elseif ($action == 'thinker_dropdown') {

}


?>