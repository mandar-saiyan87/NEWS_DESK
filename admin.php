<?php
// session_start();
// Check if the user is logged in
include('api/database.php');
if (!isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true || $_SESSION['usertype'] !== 'admin') {
  // Redirect to the index page
  header('LOCATION: index.php');
  exit;
}

$get_news = "select * from news";
$res = $db_connected->query($get_news);
// echo "<pre>";
// print_r($res);
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
      <?php
      include('messages/message.php')
      ?>

      <!-- User Section Start -->
      <section id="exclusive" class="">
        <div id="" class="container text-center">
          <h3 class="section-title">Welcome <span id="loggeduser"></span></h3>
          <p class="wow fadeIn section-description hide" data-wow-delay="0.2s">Lorem ipsum dolor sit amet consectetur,
            adipisicing elit. Sapiente voluptatem,
            dolores deleniti quisquam qui fugit, nisi repellendus illum nostrum obcaecati unde doloremque sunt
            architecto provident velit autem, assumenda quos eum fuga rem iusto fugiat! Doloribus, blanditiis possimus
            cumque asperiores vitae nihil maxime quasi quas, sapiente cum ipsam nobis temporibus, nesciunt molestias
            quos neque? Quasi harum fuga dolorem eum id voluptatibus exercitationem unde quaerat labore eaque?</p>

          <a href="add-news.php">
            <button class="common_btn" style="margin-top: 1.5rem;">Add News</button>
          </a>
        </div>
        <div id="" class="exclusive-main">
          <div id="" class="text-start">
            <?php
            if ($res->num_rows > 0) {
              // echo "<pre>";
              // print_r($res->fetch_all(MYSQLI_ASSOC));
              $rows = $res->fetch_all(MYSQLI_ASSOC);

              foreach ($rows as $row) {
            ?>
                <a href="news-details.php?id=<?php echo $row['id'] ?>">
                  <div class="search-card-main">
                    <img src="<?php echo $row['imgurl'] ?>" alt="newsimg" class="search-card-img" />
                    <div class="card-details">
                      <p class="news-cardtag">NewsDesk</p>
                      <h5><?php echo htmlspecialchars($row['title']) ?></h5>
                      <p class="search-card-desc"><?php echo htmlspecialchars($row['subtitle']) ?></p>
                    </div>
                  </div>
                </a>
            <?php
              }
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