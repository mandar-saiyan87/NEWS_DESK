class CustomNav extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
        <!-- Navbar Start -->
      <div class="nav-header">
        <a href="index.html">
          <div class="logo">
            <p class="lname">ND</p>
            <p class="ldesc">Anytime, Anywhere</p>
          </div>
        </a>

        <div>
          <ul class="nav-menu">
            <a href="index.html">
              <li class="nav-button">Home</li>
            </a>
            <a href="about.html">
              <li class="nav-button">About</li>
            </a>
            <a href="contactUs.html">
              <li class="nav-button">Contact Us</li>
            </a>
            <a href="membership.html">
              <li class="nav-button">Membership</li>
            </a>
            <a href="faq.html">
              <li class="nav-button">FAQ</li>
            </a>
                        <a href="exclusive.html">
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
              <a href="index.html">
                <li class="nav-button">Home</li>
              </a>
              <a href="about.html">
                <li class="nav-button">About</li>
              </a>
              <a href="contactUs.html">
                <li class="nav-button">Contact Us</li>
              </a>
              <a href="membership.html">
                <li class="nav-button">Membership</li>
              </a>
              <a href="faq.html">
                <li class="nav-button">FAQ</li>
              </a>
                                      <a href="exclusive.html">
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
                <p class="suggest">Not registered yet? <Span class="option" data-bs-toggle="modal"
                    data-bs-target="#signUpModal">Sign Up</Span></p>
              </div>
        <!---- Messages start ------>
        <div class='error-messages'>

        </div>
        <!---- Messages end ------>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id='login' class="btn btn-primary">Log In</button>
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
                <p class="suggest">Already have an account? <Span class="option" data-bs-toggle="modal"
                    data-bs-target="#loginModal">Log In</Span></p>
              </div>
                     <!---- Messages start ------>
        <div class='error-messages'>

        </div>
        <!---- Messages end ------>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id='signUp' class="btn btn-primary">Sign Up</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Sign Up Modal End -->

        <!---- Messages start ------>
        <div id='success-message' class=''>
          
        </div>
        <!---- Messages end ------>
    `
  }
}

class CustomFooter extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
        <!-- Footer Start -->
      <div class="main-footer-container wow fadeIn hide" data-wow-delay="0.5s">
        <div class="footer-misc">
          <div class="logo-desc">
            <a href="index.html">
              <div class="footer-logo">
                <p class="lname">ND</p>
                <p class="ldesc">Anytime, Anywhere</p>
              </div>
            </a>
            <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum natus nobis aliquid quis,
              sapiente minima?</p>
          </div>
          <div>
            <ul>
              <a href='#'>
                <li>About Us</li>
              </a>
              <a href='faq.html'>
                <li>FAQ</li>
              </a>
              <a href='membership.html'>
                <li>Membership</li>
              </a>
              <a href='#'>
                <li>Newsletters</li>
              </a>
            </ul>
          </div>
          <div>
            <ul>
              <a href='#'>
                <li>Careers</li>
              </a>
              <a href='#'>
                <li>Become a partner</li>
              </a>
            <a href='#'>
              <li>Events</li>
              </a>
            </ul>
          </div>
        </div>
        <div class="git">
          <h5>Get in touch</h5>
          <p>1635, Some Block<br>some street, some city,<br>123456</p>
          <p>+91-9167949688</p>
          <p class="email">someid@somedomain.com</p>
          <div class="social">
            <img src="assets/images/social/facebook.svg" alt="facebook">
            <img src="assets/images/social/instagram.svg" alt="instagram">
            <img src="assets/images/social/twitter.svg" alt="twitter">
          </div>
        </div>
      </div>
        <!-- Footer End -->

    `
  }
}


class SearchNewsModal extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
      <!-- Search News Modal Start-->
      <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Search News</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <input type="text" id="news-search" class="form-control" aria-label="Sizing example input"
                  placeholder="Search topic..." aria-describedby="inputGroup-sizing-default">
                <span class="input-group-text" id="basic-addon2" style="cursor: pointer;">Search</span>
              </div>
              <div id="seached-news">

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Search News Modal End-->
    `
  }
}

customElements.define('custom-nav', CustomNav)
customElements.define('search-news', SearchNewsModal)
customElements.define('custom-footer', CustomFooter)