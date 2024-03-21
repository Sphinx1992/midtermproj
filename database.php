<?php
    $dsn = 'mysql:host=localhost;dbname=zippyusedautos';
    $username = 'wqasyp038pi1d781';
    $password = 'e94z62ior624k061';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        
        exit();
    }
?>

