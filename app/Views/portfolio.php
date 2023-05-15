<!DOCTYPE html>
<html lang="en">

<head>
  <title>Billiardo</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png" />
  <link rel="icon" type="../image/png" sizes="32x32" href="../favicon/favicon-32x32.png" />
  <link rel="icon" type="../image/png" sizes="16x16" href="../favicon/favicon-16x16.png" />
  <link rel="manifest" href="../favicon/site.webmanifest" />
  <link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="theme-color" content="#333333" />
  <link href="assets\Dist\html\css\main.css" rel="stylesheet" />
</head>

<body>
  <main class="main">
    <header class="header">
      <div class="header__wrapper">
        <div class="header__left-inner">
          <div class="header__logo-wrapper">
            <div class="header__logo">B<i>i<span>l</span>i</i>ardo</div>
          </div>
          <a class="header__author-mail" href="#">Hellobilly.Work@proton.me</a>
        </div>
        <div class="header__right-inner">
          <ul class="header__social">
            <li class="header__social-item"><a class="header__social-link" href="https://www.behance.net/billiardo">Behance</a></li>
            <li class="header__social-item"><a class="header__social-link" href="https://www.instagram.com/billiardoo">Instagram</a></li>
          </ul>
          <div class="header__burger"><span></span></div>
          <div class="header__menu">
            <div class="header__menu-exit"></div>
            <ul class="header__menu-social">
              <li class="header__social-item"><a class="header__social-link" href="#">Behance</a></li>
              <li class="header__social-item"><a class="header__social-link" href="#">Instagram</a></li>
            </ul>
            <div class="header__menu-content">
              <ul class="header__menu-list" id="myMenu">
                <li class="header__menu-item" data-menuanchor="home"><a class="header__menu-link" href="#home">Home</a></li>
                <li class="header__menu-item" data-menuanchor="cases"><a class="header__menu-link" href="#cases">Portfolio</a></li>
                <li class="header__menu-item" data-menuanchor="about"><a class="header__menu-link" href="#about">About</a></li>
                <li class="header__menu-item" data-menuanchor="services"><a class="header__menu-link" href="#services">Services</a></li>
                <li class="header__menu-item" data-menuanchor="partners"><a class="header__menu-link" href="#partners">Clients</a></li>
                <li class="header__menu-item" data-menuanchor="awards"><a class="header__menu-link" href="#awards">Awards</a></li>
                <li class="header__menu-item" data-menuanchor="testimonials"><a class="header__menu-link" href="#testimonials">Testimonials</a></li>
                <li class="header__menu-item" data-menuanchor="blog"><a class="header__menu-link" href="#blog">Blog</a></li>
                <li class="header__menu-item" data-menuanchor="contacts"><a class="header__menu-link" href="#contacts">Contacts </a></li>
              </ul>
              <ul class="header__menu-contacts">
                <li class="header__menu-contact"><a class="header__social-link" href="#">+ 34 2454 3459 21</a></li>
                <li class="header__menu-contact"><a class="header__social-link" href="#">hello@georgelewis.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="wrapper" id="preloader">
      <div class="main-circle">
        <div class="green-circle">
          <div class="brown-circle"></div>
        </div>
      </div>
    </div>
    <!-- Navigation line-->
    <div class="nav-widget">
      <div class="nav-widget__wrapper">
        <div class="nav-widget__line">
          <div class="nav-widget__name-page js-page-label">about me</div>
          <div class="nav-widget__line-transparent"></div>
          <div class="nav-widget__line nav-widget__line-white">
            <div class="nav-widget__line-gold gold-line-js"></div>
          </div>
          <div class="nav-widget__name-number js-page-number">1/9</div>
        </div>
      </div>
    </div>
    <div id="pagepiling">
      <!-- Main section-->
      <div class="section section-home pp-scrollable">
        <canvas class="noise"></canvas>
        <div class="section-main home js-section" id="home">
          <div class="container-main home__container">
            <div class="home__row">
              <div class="home__text">
                <div class="home__title">Hi, I’m Billiardo</div>
                <div class="home__desc">a visual designer who takes photos, codes and teaches.</div>
              </div>
              <!-- Portfolio page link--><a class="home__link" href="#"><img class="home__link-img" src="assets\Dist\html\img\home\link-y.svg" alt="img" /></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Cases section-->
      <div class="section section-cases pp-scrollable">
        <canvas class="noise"></canvas>
        <div class="section-main cases js-section" id="cases">
          <div class="cases__play-animation-right"></div>
          <div class="cases__play-animation-left"></div>
          <div class="cases__container">
            <div class="cases__row-wrapper">
              <div class="cases__row js-cases-row">
                <!-- Case card--><a class="cases__card js-cases-card" href="case-page.html">
                  <div class="cases__text">
                    <div class="cases__card-number">01</div>
                    <div class="cases__card-name">Blue Bottles</div>
                  </div>
                  <img class="cases__card-img" src="img/cases/img1.jpg" alt="img" />
                </a>
                <!-- Case card--><a class="cases__card js-cases-card" href="assets\Dist\html\case-page.html">
                  <div class="cases__text">
                    <div class="cases__card-number">02</div>
                    <div class="cases__card-name">Top Stories</div>
                  </div>
                  <img class="cases__card-img" src="img/cases/img2.jpg" alt="img" />
                </a>
                <!-- Case card--><a class="cases__card js-cases-card" href="case-page.html">
                  <div class="cases__text">
                    <div class="cases__card-number">03</div>
                    <div class="cases__card-name">Dragon Memorie</div>
                  </div>
                  <img class="cases__card-img" src="img/cases/img3.jpg" alt="img" />
                </a>
                <!-- Case card--><a class="cases__card js-cases-card" href="case-page.html">
                  <div class="cases__text">
                    <div class="cases__card-number">04</div>
                    <div class="cases__card-name">Unique Culture</div>
                  </div>
                  <img class="cases__card-img" src="img/cases/img4.jpg" alt="img" />
                </a>
                <!-- Case card--><a class="cases__card js-cases-card" href="case-page.html">
                  <div class="cases__text">
                    <div class="cases__card-number">05</div>
                    <div class="cases__card-name">Sand Castle</div>
                  </div>
                  <img class="cases__card-img" src="img/cases/img5.jpg" alt="img" />
                </a>
                <!-- Case card--><a class="cases__card js-cases-card" href="case-page.html">
                  <div class="cases__text">
                    <div class="cases__card-number">06</div>
                    <div class="cases__card-name">Day Ahead</div>
                  </div>
                  <img class="cases__card-img" src="img/cases/img6.jpg" alt="img" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- About section-->
      <div class="section section-about pp-scrollable">
        <canvas class="noise"></canvas>
        <div class="section-main about js-section" id="about">
          <div class="container-main about__container">
            <div class="about__column">
              <div class="about__text">
                <div class="about__text-title">I am passionate about typography, photography, and Art Direction.</div>
                <div class="about__text-desc">
                  I’m a visual designer from Germany I had the chance to work for top brands and small beautiful ones. I believe good design is first of all about emotions and feelings and then your hard and technical skills. When you
                  achieve a sense of new, or different.
                </div>
              </div>
              <div class="about__img-wrapper">
                <!-- Open popup button with video--><a class="about__video popupbox-video fancybox iframe" href="https://www.youtube.com/embed/AdhFDgE1J1E" target="_blank" rel="group"><img class="about__img-play" src="img/about/play.svg" alt="img" /></a><img class="about__img" src="img/about/img.jpg" alt="img" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Services section-->
      <div class="section section-services pp-scrollable">
        <canvas class="noise"></canvas>
        <div class="section-main services js-section" id="services">
          <div class="container-main services__container">
            <div class="services__title">My design is thinking skills and eye for detail</div>
            <div class="services__row">
              <div class="services__img-wrapper"><!-- Developer photo--><img class="services__img" src="img/services/img.jpg" alt="img" /></div>
              <div class="services__inner">
                <!-- Developer skills-->
                <div class="services__skills">
                  <!-- Skill-->
                  <div class="services__skill">
                    <div class="services__skill-header">
                      <div class="services__skill-title">Design</div>
                      <div class="services__skill-percent">90%</div>
                    </div>
                    <div class="services__skill-progress">
                      <div class="services__skill-gold-line services__skill-gold-line--90"></div>
                      <div class="services__skill-white-line services__skill-white-line--10"></div>
                    </div>
                  </div>
                  <!-- Skill-->
                  <div class="services__skill">
                    <div class="services__skill-header">
                      <div class="services__skill-title">Development</div>
                      <div class="services__skill-percent">80%</div>
                    </div>
                    <div class="services__skill-progress">
                      <div class="services__skill-gold-line services__skill-gold-line--80"></div>
                      <div class="services__skill-white-line services__skill-white-line--20"></div>
                    </div>
                  </div>
                  <!-- Skill-->
                  <div class="services__skill">
                    <div class="services__skill-header">
                      <div class="services__skill-title">Photography</div>
                      <div class="services__skill-percent">70%</div>
                    </div>
                    <div class="services__skill-progress">
                      <div class="services__skill-gold-line"></div>
                      <div class="services__skill-white-line"></div>
                    </div>
                  </div>
                </div>
                <div class="services__skills-desc">
                  Buyer accelerator funding disruptive ramen return on investment. Stock equity success startup backing low hanging fruit creative infrastructure burn rate iteration bandwidth user experience. Marketing agile development
                  rockstar startup.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Partners section-->
      <div class="section section-partners pp-scrollable">
        <canvas class="noise"></canvas>
        <div class="section-main partners js-section" id="partners">
          <div class="container-main partners__container">
            <div class="partners__title">I had the chance to work for top brands and small beautiful ones</div>
            <div class="partners__row">
              <!-- Go to contacts section button--><a class="partners__img-wrapper" id="linkToContacts" href="#contacts"><img class="partners__img" src="img/partners/btn.png" alt="img" /></a>
              <!-- Partners logo list-->
              <div class="partners__partners">
                <div class="partners__partner"><img class="partners__partner-img" src="img/partners/partner-1.png" alt="img" /></div>
                <div class="partners__partner"><img class="partners__partner-img" src="img/partners/partner-2.png" alt="img" /></div>
                <div class="partners__partner"><img class="partners__partner-img" src="img/partners/partner-3.png" alt="img" /></div>
                <div class="partners__partner"><img class="partners__partner-img" src="img/partners/partner-4.png" alt="img" /></div>
                <div class="partners__partner"><img class="partners__partner-img" src="img/partners/partner-5.png" alt="img" /></div>
                <div class="partners__partner"><img class="partners__partner-img" src="img/partners/partner-6.png" alt="img" /></div>
                <div class="partners__partner"><img class="partners__partner-img" src="img/partners/partner-7.png" alt="img" /></div>
                <div class="partners__partner"><img class="partners__partner-img" src="img/partners/partner-8.png" alt="img" /></div>
                <div class="partners__partner"><img class="partners__partner-img" src="img/partners/partner-9.png" alt="img" /></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Awards section-->
      <div class="section section-awards pp-scrollable">
        <canvas class="noise"></canvas>
        <div class="section-main awards js-section" id="awards">
          <div class="container-main awards__container">
            <div class="awards__title">My work and skills are recognized</div>
            <div class="awards__column">
              <!-- Awards list-->
              <div class="awards__awards">
                <!-- Award item-->
                <div class="awards__award">
                  <div class="awards__award-img-wrapper"><img class="awards__award-img" src="img/awards/img1.jpg" alt="img" /></div>
                  <div class="awards__award-title">German Design Award</div>
                  <div class="awards__award-name">Sunrisescones</div>
                  <div class="awards__award-date">2021</div>
                </div>
                <!-- Award-->
                <div class="awards__award">
                  <div class="awards__award-img-wrapper"><img class="awards__award-img" src="img/awards/img2.jpg" alt="img" /></div>
                  <div class="awards__award-title">Developer Award</div>
                  <div class="awards__award-name">Daily Rise</div>
                  <div class="awards__award-date">2020</div>
                </div>
                <!-- Award-->
                <div class="awards__award">
                  <div class="awards__award-img-wrapper"><img class="awards__award-img" src="img/awards/img3.jpg" alt="img" /></div>
                  <div class="awards__award-title">World Brand Design Awards</div>
                  <div class="awards__award-name">Madmullet</div>
                  <div class="awards__award-date">2020</div>
                </div>
                <!-- Award-->
                <div class="awards__award">
                  <div class="awards__award-img-wrapper"><img class="awards__award-img" src="img/awards/img4.jpg" alt="img" /></div>
                  <div class="awards__award-title">Red Dot Award</div>
                  <div class="awards__award-name">Unique Trends</div>
                  <div class="awards__award-date">2019</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Testimonials section-->
      <div class="section section-testimonials pp-scrollable">
        <canvas class="noise"></canvas>
        <div class="section-main testimonials js-section" id="testimonials">
          <div class="container-main testimonials__container">
            <div class="testimonials__title">Multiple brands are happy to work with me</div>
            <div class="testimonials__content">
              <div class="swiper-container testimonials__swiper-container">
                <div class="swiper-wrapper testimonials__swiper-wrapper">
                  <!-- Review slide-->
                  <div class="swiper-slide testimonials__swiper-slide">
                    <div class="testimonials__swiper-content">
                      <div class="testimonials__swiper-text">
                        Creative product management virality leverage prototype sales branding agile development angel investor beta crowdfunding. First mover advantage traction deployment virality churn rate startup beta funding launch
                        party success venture. Business-to-business return on investment interaction design seed money iteration marketing traction scrum project.
                      </div>
                      <div class="testimonials__swiper-author">Lacey O'Ryan</div>
                      <div class="testimonials__swiper-author-info">Branding Specialist at Daily Rise</div>
                      <!-- Social buttons-->
                      <div class="testimonials__swiper-social">
                        <a class="testimonials__swiper-social-item" href="#"><svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="23" cy="23" r="23" fill="#2B3BB7" />
                            <path d="M16.1913 16.8025C17.45 16.8025 18.4704 15.7821 18.4704 14.5233C18.4704 13.2646 17.45 12.2441 16.1913 12.2441C14.9325 12.2441 13.9121 13.2646 13.9121 14.5233C13.9121 15.7821 14.9325 16.8025 16.1913 16.8025Z" fill="#F3F3F3" />
                            <path d="M20.6225 18.5293V31.1741H24.5486V24.921C24.5486 23.271 24.859 21.673 26.9048 21.673C28.9225 21.673 28.9475 23.5595 28.9475 25.0251V31.1751H32.8757V24.2408C32.8757 20.8345 32.1423 18.2168 28.1611 18.2168C26.2496 18.2168 24.9684 19.2658 24.4444 20.2585H24.3913V18.5293H20.6225ZM14.2246 18.5293H18.1569V31.1741H14.2246V18.5293Z" fill="#F3F3F3" />
                          </svg></a><a class="testimonials__swiper-social-item" href="#"><svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="23" cy="23" r="23" fill="#2B3BB7" />
                            <path d="M24.3428 31.8721V23.3346H27.303L27.743 19.9918H24.3428V17.8627C24.3428 16.8981 24.619 16.2377 26.0419 16.2377H27.8447V13.2575C26.9675 13.166 26.0858 13.1218 25.2036 13.1252C22.587 13.1252 20.7906 14.6793 20.7906 17.5325V19.9856H17.8496V23.3283H20.797V31.8721H24.3428Z" fill="#F3F3F3" />
                          </svg></a>
                      </div>
                      <!-- Testimonials slider navigation buttons-->
                      <div class="swiper-button-wrapper">
                        <!-- Prev button-->
                        <div class="swiper-button-prev testimonials__swiper-button-prev">
                          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="24.5" stroke="#787A7C" />
                            <path d="M29 18L21 25L29 32" stroke="#787A7C" />
                          </svg>
                        </div>
                        <!-- Next button-->
                        <div class="swiper-button-next testimonials__swiper-button-next">
                          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="24.5" stroke="#787A7C" />
                            <path d="M21 32L29 25L21 18" stroke="#787A7C" />
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Testimonials slider pagination-->
                <div class="swiper-pagination testimonials__swiper-pagination"></div>
                <!-- Testimonials slider scrollbar-->
                <div class="swiper-scrollbar testimonials__swiper-scrollbar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Blog section-->
      <div class="section section-blog pp-scrollable">
        <canvas class="noise"></canvas>
        <div class="section-main blog js-section" id="blog">
          <div class="container-main blog__container">
            <div class="blog__title">What’s on my mind</div>
            <div class="blog__content">
              <!-- Carousel with blog posts-->
              <div class="swiper-container2 blog__swiper-container">
                <div class="swiper-wrapper blog__swiper-wrapper">
                  <div class="swiper-slide blog__swiper-slide">
                    <!-- blog post card-->
                    <div class="blog__swiper-card">
                      <a class="blog__swiper-link" href="blog-page.html">
                        <div class="blog__swiper-img-wrapper"><img class="blog__swiper-img" src="img/blog-main/img1.jpg" alt="img" /></div>
                        <div class="blog__swiper-card-date">30 March 2021</div>
                      </a>
                      <div class="blog__swiper-card-desc">Sales market growth hacking direct mailing stock lean startup analytics termsheet return</div>
                    </div>
                  </div>
                  <div class="swiper-slide blog__swiper-slide">
                    <!-- blog post card-->
                    <div class="blog__swiper-card">
                      <a class="blog__swiper-link" href="blog-page.html">
                        <div class="blog__swiper-img-wrapper"><img class="blog__swiper-img" src="img/blog-main/img2.jpg" alt="img" /></div>
                        <div class="blog__swiper-card-date">13 April 2021</div>
                      </a>
                      <div class="blog__swiper-card-desc">Creative stealth pitch. Client entrepreneur gamification first mover advantage social proof</div>
                    </div>
                  </div>
                  <div class="swiper-slide blog__swiper-slide">
                    <!-- blog post card-->
                    <div class="blog__swiper-card">
                      <a class="blog__swiper-link" href="blog-page.html">
                        <div class="blog__swiper-img-wrapper"><img class="blog__swiper-img" src="img/blog-main/img3.jpg" alt="img" /></div>
                        <div class="blog__swiper-card-date">03 April 2021</div>
                      </a>
                      <div class="blog__swiper-card-desc">Business plan assets angel investor mass market</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Carousel prev button-->
              <div class="swiper-button-prev2 blog__swiper-button-prev">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="25" cy="25" r="24.5" stroke="#787A7C" />
                  <path d="M29 18L21 25L29 32" stroke="#787A7C" />
                </svg>
              </div>
              <!-- Carousel next button-->
              <div class="swiper-button-next2 blog__swiper-button-next">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="25" cy="25" r="24.5" stroke="#787A7C" />
                  <path d="M21 32L29 25L21 18" stroke="#787A7C" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Contacts section-->
      <div class="section section-contacts pp-scrollable">
        <canvas class="noise"></canvas>
        <div class="section-main contacts js-section" id="contacts">
          <div class="container-main">
            <div class="contacts__title">I value transparency and integrity</div>
            <div class="contacts__wrap">
              <!-- Contacts info-->
              <div class="contacts__contacts">
                <div class="contacts__contacts-head">My contact info</div>
                <ul class="contacts__contacts-list contacts-list">
                  <li class="contacts-list__item">Meininger Strasse 83, Berlin, Germany</li>
                  <li class="contacts-list__item">+ 34 2454 3459 21</li>
                  <li class="contacts-list__item">hello@georgelewis.com</li>
                </ul>
              </div>
              <!-- Contacts form-->
              <form class="contacts-form js-form" action="#">
                <div class="contacts-form__wrap">
                  <div class="contacts-form__label">
                    <input class="contacts-form__input" type="text" placeholder="Name" data-validate-field="name" />
                  </div>
                  <div class="contacts-form__label">
                    <input class="contacts-form__input" type="text" placeholder="E-mail" data-validate-field="email" />
                  </div>
                </div>
                <textarea class="contacts-form__textarea" placeholder="Your comment"></textarea>
                <button class="contacts-form__button"><img src="img/blog/form-button.svg" alt="img" /></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="assets\Dist\html\js\libs.js"></script>
  <script src="assets\Dist\html\js\main.js"></script>
</body>

</html>