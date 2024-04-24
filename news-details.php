<?php
// session_start();

include('api/database.php');
// Check if the user is logged in
if (!isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {
  // Redirect to the index page
  header('LOCATION: index.php');
  exit;
}

if (isset($_GET['id'])) {
  // echo $_GET['id'];
  extract($_GET);
  $get_news = "select * from news where id=$id";
  $res = $db_connected->query($get_news);
  if ($res->num_rows > 0) {
    $row = $res->fetch_all(MYSQLI_ASSOC);
  }
} else {
  echo '<h1>No news here</h1>';
  exit;
}

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
  <link rel="stylesheet" href="assets/css/owl.theme.default.css">
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

  <div class="main_wrapper">
    <!-- Header Start -->
    <?php
    include('navbar.php')
    ?>
    <!-- Header End -->

    <!-- Search News Modal Start -->
    <?php
    include('searchnews.php')
    ?>
    <!-- Search News Modal Start -->

    <!-- Main Content Start -->
    <div class="main_content">

      <!-- User Section Start -->
      <section id="exclusive" class="">
        <div class="section-hero" style="background-image: url('<?php echo $row[0]['imgurl'] ?>')">
          <div class="bg-wrapper">
            <div class="hero-container">
              <h2 class="hero-title"><?php echo $row[0]['title'] ?></h2>
              <p class="hero-subtitle"><?php echo $row[0]['subtitle'] ?></p>
            </div>
          </div>
        </div>
        <div class="news-content">
          <?php
          echo $row[0]['content']
          ?>
          <div>
            <?php
            if ($_SESSION['usertype'] === 'admin') {
            ?>
              <div class="admin-btn">
                <a href="edit-news.php?id=<?php echo $row[0]['id'] ?>">
                  <button class="common_btn news-btn">Edit</button>
                </a>

                <a href="delete.php?id=<?php echo $row[0]['id'] ?>">
                  <button class="common_btn news-btn">Delete</button>
                </a>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </section>
      <!-- User Section End -->
    </div>
    <!-- Main Content End -->

    <!-- Footer Section Start -->
    <?php
    include('footer.php')
    ?>
    <!-- Footer Section End -->
  </div>

  <script src="assets/js/jQuery v3.7.1.min.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>