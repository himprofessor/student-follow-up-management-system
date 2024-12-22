
<?php
    require("views/partials/header.php");
    require("views/partials/navbar.php");
    require("views/partials/footer.php");
?>
<div class="container-fluid">
    <div class="d-flex justify-content-between mt-4">
        <div>
            <h4>Class list page</h4>
            <p>All classes are listed below</p>
        </div>
        <div>
            <form class="d-flex gap-3" method="POST">
                <div class="form-group">
                    <input type="text" name="class" id="class" placeholder="Create a new class" class="form-control">
                </div>
                <div class="form-group">
                    <select name="batch" id="batch" class="form-control">
                        <option selected disabled value="" name="batch">Batch that class belong to.</option>
                        <?php foreach($batches as $batch) : ?>
                            <option value="<?= $batch["batch_id"]?>"><?= $batch["batch"]?></option>
                        <?php endforeach?>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Add new Class</button>
                </div>
            </form>
        </div>
    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Class name</th>
      <th scope="col">Batch name</th>
      <th scope="col">Status</th>
      <th scope="col" class="w-25">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($classes as $class) :?>
        <tr>
        <td><?= $class["class_id"];?></td>
        <td><?= $class["class"];?></td>
        <td><?= $class["batch"];?></td>
        <td><?= $class["active"] ? "Active" : "Archived" ?></td>
        <td class="d-flex gap-2">
            <form action="">
                <button class="btn btn-sm btn-success">Detail</button>
            </form>
            <form action="">
                <button class="btn btn-sm btn-warning">Edit</button>
            </form>
            <form action="">
                <button class="btn btn-sm btn-info"><?= $class["active"] ? "Archive" : "Active" ?></button>
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