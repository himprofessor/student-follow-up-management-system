<?php 
    require "database/db.connection.php";
    function register($username, $email, $password){
        global $DB;
        $state = $DB->prepare("INSERT INTO users (`username`, `email`, `password`) VALUES (:username,:email,:pwd)");
        $state->execute([
            ':username' => $username,
            ':email' => $email,
            ':pwd' => $password,
        ]);
        return $state->rowCount() > 0;
    }
?>