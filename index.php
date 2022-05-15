<?php 
session_start();

if(isset($_SESSION['logged_in'])) {
    header('location: profile.php');
}

include('header.php') ?>
<div class="container">
    <?php include('navbar.php'); ?>
    <div class="mt-4 p-5 bg-light text-black rounded">
        <h1>Hello Visitor!!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ad suscipit culpa unde distinctio laudantium recusandae doloribus dolorem blanditiis iure quod illo, aliquid, delectus labore. Perspiciatis voluptate natus vel neque!</p>
        <p><a href="" class="btn btn-primary btn-lg" role="button" data-bs-toggle="modal" data-bs-target="#signupModal">Join Our Team Today!</a></p>
    </div>
</div>
<?php include('footer.php') ?>

