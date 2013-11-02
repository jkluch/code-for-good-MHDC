<?php
//Pulls a users account if it exists
function check_account($username, $password) {
    // global $db;
    // $query = "SELECT userID, categoryID FROM users
    //           WHERE `email` = '$email_address' AND `pass` = '$password'";
    // $user = $db->query($query);
    // $user = $user->fetch();
    // return $user;
    echo 'Before';
    if(!$mysqli->query("SELECT username FROM user WHERE username = '$username' AND password = '$password'")){
        echo $mysqli->errno;
        echo $mysqli->error;
    }
    echo 'After';
    return $user;
}
//Adds a new account to the database
function add_account($account_type, $email_address, $password){
    global $db;
    $query = "INSERT INTO `liquor_distribution`.`users` (`categoryID`, `email`, `pass`)
              VALUES ('$account_type', '$email_address', '$password')";
    
    $q = $db->exec($query);
    
    return $q;
}
function get_users() {
    global $db;
    $query = 'SELECT * FROM users
              ORDER BY userID';
    $users = $db->query($query);
    return $users;
}
function delete_user($user_id) {
    global $db;
    $query = "DELETE FROM users
              WHERE userID = '$user_id'";
    $db->exec($query);
}
?>