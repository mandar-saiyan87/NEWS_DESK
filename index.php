<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
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

    <div class="main_wrapper">
      <!-- Header Start -->
      <custom-nav></custom-nav>
      <!-- Header End -->

      <!-- Search News Modal Start -->
      <search-news></search-news>
      <!-- Search News Modal End -->

      <!-- Main Content Start -->
      <div class="main_content">
        <div class="loading-spinner">
          <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
        <!-- Hero Section Start-->
        <Section>
          <div id='hero-news' class="owl-carousel owl-theme"></div>
        </Section>
        
        <!-- Hero Section End-->

        <!-- News Section Start -->
        <Section class="container main-container">
          <div class="section-titles">
            <h5 style="color: var(--primary-color);">Trending</h5>
            <h6 style="cursor: pointer;">View all</h6>
          </div>
          <div id="trending" class="owl-carousel news-row news-section"></div>
          <!-- <div id='trending' class="row news-row"></div> -->
          <div class="section-titles">
            <h5 style="color: var(--primary-color);">Latest</h5>
            <h6 style="cursor: pointer;">View all</h6>
          </div>
          <div id='latest' class="wow fadeIn owl-carousel news-row news-section"></div>
          <div class="section-titles">
            <h5 style="color: var(--primary-color);">You may like</h5>
            <h6 style="cursor: pointer;">View all</h6>
          </div>
          <div id='yml' class="wow fadeIn owl-carousel news-row news-section"></div>
        </Section>
        <!-- News Section End -->

        <!-- Trusted Partner start -->
        <section id="otp" class="container text-center">
          <h3 class="section-title">Our Trusted Partners</h3>
          <div class="ico-container">
            <div class="ico-div">
              <div class="wow fadeIn pngico" data-wow-delay="0.2s">
                <img src="assets/images/partner/bbc.png" alt="bbc">
              </div>
              <div class="wow fadeIn pngico" data-wow-delay="0.3s">
                <img src="assets/images/partner/cnbc.png" alt="cnbc">
              </div>
              <div class="wow fadeIn pngico" data-wow-delay="0.4s">
                <img src="assets/images/partner/cnn.png" alt="cnn">
              </div>
            </div>
            <div class="ico-div">
              <div class="wow fadeIn pngico" data-wow-delay="0.5s">
                <img src="assets/images/partner/CoinDesk.png" alt="bbc">
              </div>
              <div class="wow fadeIn pngico" data-wow-delay="0.6s">
                <img src="assets/images/partner/foxnews.png" alt="cnbc">
              </div>
              <div class="wow fadeIn pngico" data-wow-delay="0.7s">
                <img src="assets/images/partner/reuters.png" alt="cnn">
              </div>
            </div>
          </div>
        </section>
        <!-- Trusted Partner end -->
      </div>
      <!-- Main Content End -->

      <!-- Footer Section Start -->
      <custom-footer></custom-footer>
      <!-- Footer Section End -->
    </div>

    <script src="assets/js/jQuery v3.7.1.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>

</html>