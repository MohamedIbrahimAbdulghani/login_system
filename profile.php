<?php 
    require_once "include/header.php"; 
    require_once "include/navbar.php";

?>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto my-5 border p-2">
                <h2 class="p-2 my-2">Name: <?php echo $_SESSION["auth"][0] ?></h2>
                <h2 class="p-2 my-2">Email: <?php echo $_SESSION["auth"][1] ?></h2>
            </div>
        </div>
    </div>

<?php require_once "include/footer.php"; ?>