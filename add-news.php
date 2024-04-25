<?php
// session_start();
// Check if the user is logged in
include('api/database.php');

if (!isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true || $_SESSION['usertype'] !== 'admin') {
  // Redirect to the index page
  header('LOCATION: index.php');
  exit;
}



if (isset($_POST['submit-news'])) {
  extract($_POST);
  // echo "<pre>";
  // print_r($_POST);
  $owner_id =  $_SESSION['userId'];

  try {
    if (strlen($title) > 10 && strlen($img_url) > 10 && strlen($newscontent) > 10) {

      $add_news_query = "insert into news (title, imgurl, subtitle, content, owner) values ('$title', '$img_url', '$subtitle', '$newscontent', '$owner_id')";
      // echo $add_news_query;
      $res = $db_connected->query($add_news_query);
      if ($res) {
        $_SESSION['success'] = 'News post created successfully';
      } else {
        $_SESSION['failed'] = 'Something went wrong, Please try again!';
      }
      header('LOCATION: admin.php');
    } else {
      $_SESSION['warning'] = 'Couldn\'t create news. News length is too short';
    }
    header('LOCATION: add-news.php');
    exit;
  } catch (Exception $e) {
    throw $e->getMessage();
  }
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
  <script src="https://cdn.tiny.cloud/1/syfbmkaync0xtapsys25btokoji618252vvno4dendv93jse/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [{
          value: 'First.Name',
          title: 'First Name'
        },
        {
          value: 'Email',
          title: 'Email'
        },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
  </script>
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
      <section id="exclusive" class="container">
        <div id="" class="">
          <h3 class="section-title">Add News (For members only)</span></h3>
          <form action="add-news.php" method="post">
            <input type="text" name="title" class="form-control" style="margin: 1rem 0;" placeholder="News title..." aria-label="Username" aria-describedby="basic-addon1">
            <input type="text" name="img_url" class="form-control" style="margin: 1rem 0;" placeholder="image url..." aria-label="Username" aria-describedby="basic-addon1">
            <input type="text" name="subtitle" class="form-control" style="margin: 1rem 0;" placeholder="subtitle..." aria-label="Username" aria-describedby="basic-addon1">
            <textarea id="newstext" name="newscontent" id="" cols="100" rows="10"></textarea>
            <button name="submit-news" class="common_btn" style="margin: 1.5rem 0;" type="submit">Submit</button>
          </form>
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