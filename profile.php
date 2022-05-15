<?php
session_start();

if(!isset($_SESSION['logged_in'])) {
    header('location: index.php?error=Please login to your account');
}
include('header.php') ?>
<div class="container">
    <?php include('navbar.php'); ?>
    <div class="mt-4 p-5 bg-light text-black rounded">
        <h1>Profile</h1>
        <p>Welcome <?php echo $_SESSION['logged_in']['name']; ?></p>
    </div>
</div>
<?php include('footer.php') ?>

