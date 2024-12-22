<?php
    session_start();
    require("database/db.connection.php");

    require("views/partials/header.php");
    require("router.php");

    require("views/partials/footer.php");
?>