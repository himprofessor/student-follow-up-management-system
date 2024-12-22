<?php
    require("models/batch.model.php");
    require("models/class.model.php");
    $batches = getAllActiveBatch();
    $classes = getAllClasses();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $class = $_POST['class'];
        $batch_id = $_POST['batch'];
        if (!empty($class) && !empty($batch_id)){
            if(createClass($class, $batch_id)){
                header("Location: /class");
                die;
            }else{
                //create was not successfully.
            }
        }else{
            //All feilds are required.
        }
    }
    require("views/class.view.php");
?>