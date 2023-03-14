<?php 
    require_once "include/header.php"; 
    require_once "include/navbar.php";

?>


    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto my-5">
                <h2 class="border p-2 my-2 text-center">Register</h2>
                <?php if(isset($_SESSION["errors"])): ?>
                        <?php foreach($_SESSION["errors"] as $error): ?>
                            <div class="alert alert-danger text-center">
                                <?php echo $error; ?>
                            </div>
                        <?php endforeach; ?>
                <?php 
                // to delete errors when will reload the page
                unset($_SESSION["errors"]);
                endif; ?>
                <form action="handelers/handelRegister.php" method="POST" class="border p-3">
                    <div class="form-group p-2 my-1">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group p-2 my-1">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group p-2 my-1">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group p-2 my-1">
                        <input type="submit"  value="Register" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php require_once "include/footer.php"; ?>