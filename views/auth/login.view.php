<?php
require "views/partials/header.php";
?>


<form action="" method="POST" class="">
    <div class="container my-5 ">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 border border-secondary p-3 rounded">
                <h1 class="text-secondary text-center">Login Form</h1>
                <div class="my-3 ">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="my-3">
                    <label for="password" class="form-label">Password: </label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <p>You don't have account yet? <a href="/register">Register Now</a></p>
                <button type="submit" class="btn btn-success btn-md float-end">
                    Login
                </button>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</form>



<?php
require "views/partials/footer.php";
?>