<?php
    $HOST = "localhost";
    $USERNAME = "root";
    $DBNAME = "sfup";
    $PASSWORD = "";

    $DSN = "mysql:host=$HOST;dbname=$DBNAME;";
    try{
        $DB = new PDO($DSN, $USERNAME, $PASSWORD);
        $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e){
        echo "Connection failed" . $e->getMessage();
    }
?>