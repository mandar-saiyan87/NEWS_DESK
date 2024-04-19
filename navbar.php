<?php
include('db/database.php');
if (isset($_POST['signup'])) {
  extract($_POST);
  $pass_hash = password_hash($password, PASSWORD_DEFAULT);

  $sql_query = "insert into users (type, email, password) values ('general', '$email', '$pass_hash')";

  $res = $db_connected->query($sql_query);
  if ($res) {
    $_SESSION['signup_success'] = true;
  } else {
    $_SESSION['signup_failure'] = true;
  }
  header("LOCATION: index.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a href="membership.php">
          <li class="nav-button">Member's Exclusive</li>
        </a>
      </ul>
    </div>
    <div class="nav-end">
      <div class="search" data-bs-toggle="modal" data-bs-target="#searchModal">
        <img src="assets/images/icons8-search.svg" alt="searchico">
      </div>
      <div class="auth-btn">
        <button class="common_btn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button class="common_btn" data-bs-toggle="modal" data-bs-target="#signUpModal">Sign Up</button>
      </div>
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
        <a href="membership.php">
          <li class="nav-button">Member's Exclusive</li>
        </a>
      </ul>
      <div class="mobileauthbtn">
        <button class="mobilecommon_btn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button class="mobilecommon_btn" data-bs-toggle="modal" data-bs-target="#signUpModal">Sign Up</button>
      </div>
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
        <form>
          <div class="modal-body">

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>

            <p class="suggest">Not registered yet? <Span class="option" data-bs-toggle="modal" data-bs-target="#signUpModal">Sign Up</Span></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Log In</button>
          </div>
        </form>
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
        <form action="index.php" method="post">
          <div class="modal-body">

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" name="confirm" class="form-control" id="exampleInputPassword1">
            </div>

            <p class="suggest">Already have an account? <Span class="option" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</Span></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Sign Up Modal End -->
</body>

</html>