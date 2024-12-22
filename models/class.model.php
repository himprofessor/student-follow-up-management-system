<?php
    require("database/db.connection.php");

    function getAllClasses(){
        global $DB;
        $state = $DB->prepare("SELECT * FROM classes LEFT JOIN batches ON classes.batch_id = batches.batch_id");
        $state->execute();

        return $state->fetchAll(PDO::FETCH_ASSOC);
    }

    function createClass($class, $batch_id){
        global $DB;
        $state = $DB->prepare("INSERT INTO classes (class, batch_id) VALUES (:class, :batch_id)");
        $state->execute([
            ":class" => $class,
            ":batch_id" => $batch_id
        ]);

        return $state->rowCount() > 0;
    }
?>