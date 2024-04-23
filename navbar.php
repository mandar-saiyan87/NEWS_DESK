<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="assets/css/animatenew.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <script src="assets/js/main.js"></script>
  <title>News Desk - Latest News, Anytime, Anywhere</title>
</head>

<body>

  <!-- Navbar Start -->
  <div class="nav-header">
    <a href="index.php">
      <div class="logo">
        <p class="lname">ND</p>
        <p class="ldesc">Anytime, Anywhere</p>
      </div>
    </a>

    <div>
      <ul class="nav-menu">
        <a href="index.php">
          <li class="nav-button">Home</li>
        </a>
        <a href="about.php">
          <li class="nav-button">About</li>
        </a>
        <a href="contactUs.php">
          <li class="nav-button">Contact Us</li>
        </a>
        <a href="membership.php">
          <li class="nav-button">Membership</li>
        </a>
        <a href="faq.php">
          <li class="nav-button">FAQ</li>
        </a>
        <a href="exclusive.php">
          <li class="nav-button">Member's Exclusive</li>
        </a>
      </ul>
    </div>
    <div class="nav-end">
      <div class="search" data-bs-toggle="modal" data-bs-target="#searchModal">
        <img src="assets/images/icons8-search.svg" alt="searchico">
      </div>
      <?php
      if (isset($_SESSION['logged-in'])) {
        echo '
                <div class="auth-btn">
        <button class="common_btn logoutbtn">Logout</button>
      </div>
          ';
      } else {

        echo '
                  <div class="auth-btn">
               <button class="common_btn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            <button class="common_btn" data-bs-toggle="modal" data-bs-target="#signUpModal">Sign Up</button>
      </div>
          ';
      }
      ?>

      <div class="hbmenu">
        <img src="assets/images/icons8-hamburger-menu.svg" alt="menu">
      </div>

    </div>

  </div>

  <div class="newsmenu">
    <ul class="nav-menu">
      <li class="nav-button newmenu-btn">Latest</li>
      <li class="nav-button newmenu-btn">General</li>
      <li class="nav-button newmenu-btn">Science & Tech</li>
      <li class="nav-button newmenu-btn">Blockchain</li>
      <li class="nav-button newmenu-btn">Finance</li>
      <li class="nav-button newmenu-btn">Health</li>
      <li class="nav-button newmenu-btn">Sports</li>
    </ul>
  </div>


  <!-- Overlay Mobile Menu Start -->
  <div class="overlay">
    <div class="mobile-menu">
      <div class="close_btn_div">
        <p class="close_btn">X</p>
      </div>
      <ul class="mobilemenu">
        <a href="index.php">
          <li class="nav-button">Home</li>
        </a>
        <a href="about.php">
          <li class="nav-button">About</li>
        </a>
        <a href="contactUs.php">
          <li class="nav-button">Contact Us</li>
        </a>
        <a href="membership.php">
          <li class="nav-button">Membership</li>
        </a>
        <a href="faq.php">
          <li class="nav-button">FAQ</li>
        </a>
        <a href="exclusive.php">
          <li class="nav-button">Member's Exclusive</li>
        </a>
      </ul>
      <?php
      if (isset($_SESSION['logged-in'])) {
        echo '
                <div class="mobileauthbtn">
        <button class="mobilecommon_btn logoutbtn">Logout</button>
      </div>
          ';
      } else {
        echo '
                  <div class="mobileauthbtn">
        <button class="mobilecommon_btn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button class="mobilecommon_btn" data-bs-toggle="modal" data-bs-target="#signUpModal">Sign Up</button>
      </div>
          ';
      }
      ?>

    </div>
  </div>
  <!-- Overlay Mobile Menu End -->

  <!-- Navbar End -->

  <!-- Login Modal Start -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control loginemail" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control loginpasswd" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
          </form>
          <p class="suggest">Not registered yet? <Span class="option" data-bs-toggle="modal" data-bs-target="#signUpModal">Sign Up</Span></p>
        </div>
        <!---- Messages start ------>
        <div class='error-messages'>

        </div>
        <!---- Messages end ------>
        <div class="modal-footer">
          <button type="button" id="logindismiss" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary loginbtn">Log In</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Modal End -->

  <!-- Sign Up Modal Start -->
  <div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Sign Up</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control useremail" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control passwd" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" class="form-control confpasswd" id="exampleInputPassword1">
            </div>
          </form>
          <p class="suggest">Already have an account? <Span class="option" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</Span></p>
        </div>
        <!---- Messages start ------>
        <div class='error-messages'>

        </div>
        <!---- Messages end ------>
        <div class="modal-footer">
          <button type="button" id="signupdismiss" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary signupbtn">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Sign Up Modal End -->

  <!---- Messages start ------>
  <div id='success-message' class=''>

  </div>
  <!---- Messages end ------>


  <script src="assets/js/jQuery v3.7.1.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>