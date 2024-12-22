<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_destroy();
        header("Location: /register");
        die();
    }else{
        require("views/partials/404.php");
    }
?>