<?php
    // $dsn = 'mysql:host=localhost;dbname=liquor_distribution';
    // $db_username = 'mgs_user';
    // $db_password = 'pa55word';

    // try {
    //     $db = new PDO($dsn, $db_username, $db_password);
    // } catch (PDOException $e) {
    //     $error_message = $e->getMessage();
    //     include('../errors/database_error.php');
    //     exit();
    // }
    
    ini_set ('error_reporting', E_ALL);
    ini_set ('display_errors', '1');
    error_reporting (E_ALL|E_STRICT);

    $db = mysqli_init();
    mysqli_options ($db, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);

    $db->ssl_set('/etc/mysql/ssl/client-key.pem', NULL, NULL, NULL, NULL);
    $link = mysqli_real_connect ($db, 'ec2-54-224-138-254.compute-1.amazonaws.com', 'user', 'pass', 'db_name', 3306, NULL, MYSQLI_CLIENT_SSL);
    if (!$link)
    {
        die ('Connect error (' . mysqli_connect_errno() . '): ' . mysqli_connect_error() . "\n");
    } else {
        $res = $db->query('SHOW TABLES;');
        print_r ($res);
        $db->close();
    }
?>