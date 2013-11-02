<?php
    //Check email
    function check_email($email){
        //If email is invalid
        if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
            $data = "Email is invalid";
        }
        //If email is valid
        else{
            $data = "Email is valid";
        }
        return $data;
    }
    //Strip special characters
    function strip_special($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    //Do a password comparison
    function compare_passwords($data, $data2){
        if($data === $data2){
            return true;
        }
        else{
            return false;
        }
    }
?>