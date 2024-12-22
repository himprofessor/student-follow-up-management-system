<?php
    require("views/partials/header.php");
    require("views/partials/navbar.php");
    require("views/partials/footer.php");
?>
<div class="container-fluid">
    <div class="d-flex justify-content-between mt-4">
        <div>
            <h4>Batch list page</h4>
            <p>All batches are listed below</p>
        </div>
        <div>
            <form class="d-flex gap-3" method="POST">
                <div class="form-group">
                    <input type="text" name="batch" id="batch" placeholder="Create a new batch" class="form-control">
                    <p class="text-danger"><?php echo( isset($_SESSION["error"]) ? $_SESSION["error"] : ""); ?></p>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Add new Batch</button>
                </div>
            </form>
        </div>
    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Batch name</th>
      <th scope="col">Status</th>
      <th scope="col" class="w-25">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($batches as $batch) : ?>
    <tr>
        <td><?= $batch["batch_id"];?></td>
        <td><?= $batch["batch"];?></td>
        <td><?= $batch["active"] ? "Active" : "Archived" ?></td>
        <td class="d-flex gap-2">
            <form action="">
                <button class="btn btn-sm btn-success">Detail</button>
            </form>
            <form action="">
                <button class="btn btn-sm btn-warning">Edit</button>
            </form>
            <form action="">
                <button class="btn btn-sm btn-info"><?= $batch["active"] ? "Archive" : "Active" ?></button>
            </form>
            <form action="">
                <button class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach?>
  </tbody>
</table>
</div>
<?php
    require("views/partials/footer.php");
?>