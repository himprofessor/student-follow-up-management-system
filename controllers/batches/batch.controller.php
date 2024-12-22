<?php
    require("models/batch.model.php");
    if($_SERVER["REQUEST_METHOD"] == "GET" || $_SERVER["REQUEST_METHOD"] == "POST"){
        unset($_SESSION["error"]);
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $batch = $_POST["batch"];
        if(!empty($batch)){
            // call model function to create batch
            if(create($batch)){
                
                header("Location: /batch");
                die();
            }

        }else {
            //error message the feild cannot be empty
            $_SESSION["error"] = "All feilds cannot be empty, please fill all inputs.";
        }
    }
    $batches = getBatch();
    require("views/batch.view.php");
?>