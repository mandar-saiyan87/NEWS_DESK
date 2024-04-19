// Hero Section

const herodata = ['https://study.com/cimages/videopreview/what-is-economy-definition-types-quiz_113903.jpg',
  'https://www.esri.com/about/newsroom/wp-content/uploads/2022/03/is-spatial-finance-coming-to-your-company-wherenext-article-wide-1920x1080-1.jpg',
  'https://blog.gwi.com/wp-content/uploads/2023/04/0404-FEATURE-IMG_BP_Most-viewed-sports.png'
]


// trending news list
const newsdata = [
  {
    id: 1,
    title: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque, dolor? Tempora voluptatibus officiis itaque ad dolorem libero optio dignissimos sit.",
    tag: "CNBC",
    image: 'https://www.sociallifeproject.org/content/images/2023/10/IMG_1391.jpeg'
  },
  {
    id: 2,
    title: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque, dolor? Tempora voluptatibus officiis itaque ad dolorem libero optio dignissimos sit.",
    tag: "Techcrunch",
    image: "https://upscpathshala.com/content/wp-content/uploads/2020/10/Best-Books-for-Science-and-Technology-for-UPSC.jpg"
  },
  {
    id: 3,
    title: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque, dolor? Tempora voluptatibus officiis itaque ad dolorem libero optio dignissimos sit.",
    tag: "ESPN",
    image: "https://cdn.evolve-mma.com/wp-content/uploads/2021/04/GSP-training-at-Evolve-MMA.jpg"
  }
]

// FAQ List
const faq = [
  {
    id: 'fone',
    title: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quia accusantium sint incidunt sit at!',
    desc: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione eveniet adipisci eius ipsa! Dolorum voluptatum voluptatibus assumenda maxime dolor et dolores totam velit illum numquam, ab, quasi illo temporibus. Quae soluta numquam deleniti unde! Beatae nostrum porro excepturi consectetur saepe?'
  },
  {
    id: 'ftwo',
    title: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quia accusantium sint incidunt sit at!',
    desc: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione eveniet adipisci eius ipsa! Dolorum voluptatum voluptatibus assumenda maxime dolor et dolores totam velit illum numquam, ab, quasi illo temporibus. Quae soluta numquam deleniti unde! Beatae nostrum porro excepturi consectetur saepe?'
  },
  {
    id: 'fthree',
    title: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quia accusantium sint incidunt sit at!',
    desc: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione eveniet adipisci eius ipsa! Dolorum voluptatum voluptatibus assumenda maxime dolor et dolores totam velit illum numquam, ab, quasi illo temporibus.'
  },
  {
    id: 'ffour',
    title: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quia accusantium sint incidunt sit at!',
    desc: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione eveniet adipisci eius ipsa! Dolorum voluptatum voluptatibus assumenda maxime dolor et dolores totam velit illum numquam, ab, quasi illo temporibus. Quae soluta numquam deleniti unde! Beatae nostrum porro excepturi consectetur saepe?'
  },
  {
    id: 'ffive',
    title: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quia accusantium sint incidunt sit at!',
    desc: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione eveniet adipisci eius ipsa! Dolorum voluptatum voluptatibus assumenda maxime dolor et dolores totam velit illum numquam, ab, quasi illo temporibus. Quae soluta numquam deleniti unde! Beatae nostrum porro excepturi consectetur saepe?'
  },
  {
    id: 'fsix',
    title: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quia accusantium sint incidunt sit at!',
    desc: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione eveniet adipisci eius ipsa! Dolorum voluptatum voluptatibus assumenda maxime dolor et dolores totam velit illum numquam, ab, quasi illo temporibus. Quae soluta numquam deleniti unde! Beatae nostrum porro excepturi consectetur saepe?'
  },
]


$(document).ready(function () {

  setTimeout(() => {
    hideSpinner()
  }, 400);

  // WOW JS
  new WOW().init();

  // Show Wow animations
  setTimeout(() => {
    $('.wow').addClass('show')
  }, 400);

  // To open sidemenu bar for mobile & tablets
  $(".hbmenu").on('click', function () {
    $('body').css("overflow", "hidden")
    $(".overlay").addClass("overlay-show");
    $(".mobile-menu").addClass("mobile-menu-show")

  })

  // To close sidemenu bar for mobile & tablets from close button
  $(".close_btn").on('click', function () {
    closeSideMenu()
  })

  // To close sidemenu bar for mobile & tablets from clicking on overlay
  $(".overlay").on("click", function () {
    closeSideMenu()
  });



  $('#contactForm').submit(function (e) {
    e.preventDefault()
    let messageDiv = $('.messsage-div')
    let name = $('#name').val()
    let email = $('#email').val()
    let message = $('#message').val()
    console.log(`name: ${name}, email: ${email}, message: ${message}`)
    if (name.length > 2 && email.length > 2 && message.length > 2) {
      name = $('#name').val('')
      email = $('#email').val('')
      message = $('#message').val('')
      messageDiv.html(`
      <p style="margin: 0.4rem; color:green">Message sent successfully</p>
      `)
    } else {
      messageDiv.html(`
      <p style="margin: 0.4rem; color:red">Something went wrong, try again!</p>
      `)
    }
    setTimeout(() => {
      messageDiv.html('')
    }, 2000);
  })

  // Get news-search input query
  getSearchResult(function (search_results) {
    console.log(search_results)
    let newssearch = $('#seached-news')
    newssearch.empty()
    if (search_results.length > 0) {
      search_results.forEach(news => {
        let searched = `
        <a href=${news.url} target="_blank">
              <div class="search-card-main">
                <img src=${news.urlToImage} alt="newsimg" class="search-card-img"/>
                <div class="card-details">
                  <p class="news-cardtag">${news.source}</p>
                  <h5>${news.title}</h5>
                  <p class="search-card-desc">${news.description}</p>
                </div>
              </div>
        </a>
        `
        newssearch.append(searched)
      });
    } else {
      newssearch.html('<p>No news found for the topic</p>')
    }
  })

  // Hero Section News Carousel
  let heronews = $('#hero-news');
  herodata.forEach(news => {
    let hero = `
    <div class="section-hero" style="background-image: url(${news})">
    <div class="bg-wrapper">
      <div class="hero-container">
          <h2 class="hero-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum sequi, cumque
                corrupti minima perspiciatis et aut voluptatum ratione. Exercitationem, veritatis.</h2>
          <p class="hero-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, quibusdam
                necessitatibus. Libero molestias consectetur facilis minima eos aliquid voluptates? Architecto velit
                doloremque illum temporibus iste ex quidem dolorum, praesentium cumque facere aspernatur incidunt
                reiciendis nam deserunt expedita, magnam quis consequuntur culpa rerum vitae debitis iure veniam non?
                Veniam similique rem iure modi est tempore ducimus?</p>
          <div class="hero-click">
                <h5>Read Article</h5>
                <div class="hero-arrow">
                  <p style="font-size:x-large;">&#x2192;</p>
                </div>
              </div>
          </div>
    </div>
    </div>
    `
    heronews.append(hero)
  })



  // function to trending news
  let trending = $('#trending');
  newsdata.forEach(news => {
    let newsCard = `
      <div class="news-card">
        <img src=${news.image} alt="newsimage" class="news-cardimg">
        <div>
            <p class="news-cardtag">${news.tag}</p>
            <h3 class="news-cardtitle">${news.title}</h3>
        </div>
      </div>
    `
    trending.append(newsCard)
  });

  // function to latest news
  let latest = $('#latest');
  newsdata.forEach(news => {
    let newsCard = `
        <div class="news-card">
              <img
                src=${news.image}
                alt="" class="news-cardimg">
              <div>
                <p class="news-cardtag">${news.tag}</p>
                <h3 class="news-cardtitle">${news.title}</h3>
              </div>
    </div>
    `
    latest.append(newsCard)
  });

  // function to you may like  news
  let yml = $('#yml');
  newsdata.forEach(news => {
    let newsCard = `
        <div class="news-card">
              <img
                src=${news.image}
                alt="" class="news-cardimg">
              <div>
                <p class="news-cardtag">${news.tag}</p>
                <h3 class="news-cardtitle">${news.title}</h3>
              </div>
    </div>
    `
    yml.append(newsCard)
  });

  // function to populate accordions
  let faqaccordian = $('#accordionExample')
  faq.forEach(item => {
    let faqitem = `
      <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#${item.id}" aria-expanded="false" aria-controls="${item.id}">
                    <div class="pointer">
                    </div>
                    ${item.title}
                  </button>
                </h2>
                <div id="${item.id}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  ${item.desc}
                  </div>
                </div>
              </div>
    `
    faqaccordian.append(faqitem)
  })






  // Owl Carousel News Section
  $(".news-section").owlCarousel({
    margin: 12,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });

  // Owl Carousel Hero Section
  var owl = $("#hero-news")
  owl.owlCarousel({
    margin: 10,
    items: 1,
    nav: true,
    dots: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2300,
    autoplayHoverPause: true
  });
  $('.play').on('click', function () {
    owl.trigger('play.owl.autoplay', [2300])
  })
  $('.stop').on('click', function () {
    owl.trigger('stop.owl.autoplay')
  })

  // Show prev and next buttons on hover on Hero News Section
  $('#hero-news').on('mouseenter', function () {
    $('.owl-nav').css('display', 'flex')
  })

  $('#hero-news').on('mouseleave', function () {
    $('.owl-nav').css('display', 'none')
  })


  //Clear news-search input when modal closed
  $('#searchModal').on('hidden.bs.modal', function () {
    $('#news-search').val('')
    $('#seached-news').empty()
  })


})


// Close side menu button
function closeSideMenu() {
  $(".mobile-menu").removeClass("mobile-menu-show")
  $(".overlay").removeClass("overlay-show");
  $('body').css("overflow", "auto")
}

// Get news-search input query
function getSearchResult(callback) {
  $('#basic-addon2').on('click', function () {
    let query = $('#news-search').val()
    console.log(query)
    if (query.length >= 0) {
      if (query.length > 2) {
        $.ajax({
          crossDomain: true,
          url: `https://newsportal-backend.onrender.com/news/${query}`,
          method: 'GET',
          success: function (response) {
            console.log(response);
            callback(response.articles)
          },
          error: function (xhr, status, error) {
            console.error(status, error);
          }
        });
      } else {
        callback([])
      }
    }
  })
}

// Show Spinner
function showSpinner() {
  $('.loading-spinner').css('display', 'flex')
}

// Hide Spinner
function hideSpinner() {
  $('.loading-spinner').css('display', 'none')
}



