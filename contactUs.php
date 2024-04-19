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
  <script src="https://smtpjs.com/v3/smtp.js">
  </script>
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
    include('searchNewsModal.php')
    ?>
    <!-- Search News Modal End -->


    <!-- Main Content Start -->
    <div class="main_content">
      <!-- Contact Section Start -->
      <section id="member" class="container text-center">
        <h3 class="section-title">Connect with us</h3>
        <p class="wow fadeIn section-description hide" data-wow-delay="0.2s">Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Suscipit iusto corrupti, qui quaerat recusandae deleniti quia ullam aliquam quisquam quam.
        </p>
        <div class="wow fadeIn contact-main hide" data-wow-delay="0.3s">
          <div class="contact-details">
            <p class="contact-details-fields">Contact: <span>+91-9167949688</span></p>
            <a href="mailto:mandar.deshpande.eds@gmail.com">
              <p class="contact-details-fields">Email: <span>someid@somedomain.com</span></p>
            </a>
            <div>
              <p>Follow Us</p>
              <div class="social">
                <img src="assets/images/social/facebook.svg" alt="facebook">
                <img src="assets/images/social/instagram.svg" alt="instagram">
                <img src="assets/images/social/twitter.svg" alt="twitter">
              </div>
            </div>
          </div>
          <div class="form-div">
            <form id="contactForm">
              <div class="mb-3">
                <input type="text" id="name" class="form-control" placeholder="Enter name...." aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="mb-4">
                <input type="email" id="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="something@domain.com">
                <div id="emailHelp" class="form-text" style="font-size: small;">**We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <textarea id="message" class="form-control" aria-label="With textarea" placeholder="How we can help you..."></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div class="messsage-div">
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Section End -->
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