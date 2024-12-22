<?php
    require("database/db.connection.php");
    function getAllActiveBatch(){
        global $DB;
        $state = $DB->prepare("SELECT * FROM batches WHERE active = 1");
        $state->execute();

        return $state->fetchAll(PDO::FETCH_ASSOC);
    }
    function getBatch() {
        global $DB;
        $state = $DB->prepare("SELECT * FROM batches");
        $state->execute();

        return $state->fetchAll(PDO::FETCH_ASSOC);
    }

    function create($batch){
        global $DB;
        $state = $DB->prepare("INSERT INTO batches (batch, active) VALUES(:batch, :active)");
        $state->execute([
            ":batch" => $batch,
            ":active" => 1 // default is active = 1 boolean type
        ]);

        return $state->rowCount() > 0;
    }
?>