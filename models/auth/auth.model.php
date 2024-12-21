<?php 
require "models/auth/auth.model.php";
function login($email){
    global $DB;
    $statement = $DB->prepare(" SELECT * FROM users WHERE email = :email");
    $statement->execute([
        ":email" => $email
    ]);
    return $statement->fetch();
}

?>