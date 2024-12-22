<?php require("views/partials/header.php") ?>
<?php require("views/partials/navbar.php")?>
    <div class="container-fluid">
        <h4>Welcome, <?= $_SESSION["username"];?></h4>
        <p>To the student follow up management system.</p>
    </div>
<?php require("views/partials/footer.php") ?>