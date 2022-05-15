<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a class="navbar-brand" href="#">PHP OOP</a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Content</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Contact Us</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <?php
          if ($username=="loggedin") {
          ?>
            <a href="" data-bs-toggle="modal" data-bs-target="#changePassModal"><button type="button" class="btn btn-outline-light me-2">Change Password</button></a>
            <a href="logout.php"><button type="button" class="btn btn-warning">Logout</button></a>
          <?php } else { ?>
            <a href="" data-bs-toggle="modal" data-bs-target="#loginModal"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
            <a href="" data-bs-toggle="modal" data-bs-target="#signupModal"><button type="button" class="btn btn-warning">Sign-up</button></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </header>