
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="style.css" />
    <title>wedding By Rishi</title>
  </head>
  <body>
    <header class="header" id="home">
      <!--slidding image-->
      <div class="header__overlay">
      </div> <!-- Overlay for better text visibility -->
      <div class="header__slider">
        <div class="slide active" style="background-image: url('assets/slide1.jpg');background-size:cover;
        background-repeat:no-repeat;background-position:enter;"></div>
        <div class="slide" style="background-image: url('assets/slide2.jpg');"></div>
        <div class="slide" style="background-image: url('assets/slide3.jpg');"></div>
      </div>
      <!--slidding image End-->

      <nav>
        <div class="nav__header">
          <div class="nav__logo">
            <a href="#">
              <img src="assets/logo.PNG" alt="logo" />
            </a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home">HOME</a></li>
          <li><a href="#about">ABOUT US</a></li>
          <li><a href="#service">SERVICES</a></li>
          <li class="nav__logo">
            <a href="#">
              <img src="assets/logo.PNG" alt="logo" />
            </a>
          </li>
          <li><a href="#client">CLIENT</a></li>
          <li><a href="#blog">BLOG</a></li>
          <li><a href="#contact">CONTACT US</a></li>
        </ul>
      </nav>
    </header>
    <!--Profile photo-->
    <section class="profile">
      <img src="assets/profile.jpg" alt="Profilephoto" class="round-image">
    </section>
     <!--Profile photo End-->






     
    <div class="section__container about__container" id="about">
      <h2 class="section__header">WE CAPTURE THE MOMENTS</h2>
      <p class="section__description">
        At Capturer, we specialize in freezing those fleeting moments in time
        that hold immense significance for you. With our passion for photography
        and keen eye for detail, we transform ordinary moments into
        extraordinary memories.
      </p>
      <p class="section__description">
        Whether it's a milestone event, a candid portrait, or the breathtaking
        beauty of nature, we strive to encapsulate the essence of every moment,
        ensuring that your cherished memories last a lifetime. Trust us to
        capture the magic of your life's journey, one frame at a time.
      </p>
      <img src="assets/logo.PNG" alt="logo" />
      <!--Socialmedia logo-->
      <div class="footer__socials">
        <a href="https://www.facebook.com/profile.php?id=100011621865029&ref=ig_profile_ac" target="_blank"><i class="ri-facebook-circle-fill"></i></a>
        <a href="https://www.instagram.com/weddings_by_rishi/" target="_blank"><i class="ri-instagram-line"></i></a>
       
        <a href="https://www.youtube.com/@theportrait-he5kn" target="_blank""><i class="ri-youtube-fill"></i></a>
      </div>
      <!--Socialmedia logo End-->
    </div>

    <div class="section__container portfolio__container">
      <h2 class="section__header">~ PORTFOLIO ~</h2>
      <div class="portfolio__grid">
        <div class="portfolio__card">
          <img src="assets/portfolio1.jpg" alt="portfolio" />
          <div class="portfolio__content">
            <a href="gallery.php?type=photos" target="_blank" class="button-style">View Portfolio</a>
          </div>
        </div>
        <div class="portfolio__card">
          <img src="assets/portfolio2.jpg" alt="portfolio" />
          <div class="portfolio__content">
            <a href="gallery.php?type=videos" target="_blank" class="button-style">View Portfolio</a>
          </div>
        </div>
        <div class="portfolio__card">
          <img src="assets/portfolio3.jpg" alt="portfolio" />
          <div class="portfolio__content">
           <a href="gallery.php?type=videos" target="_blank" class="button-style">View Portfolio</a>
          </div>
        </div>
      </div>
    </div>

    <section class="service" id="service">
      <div class="section__container service__container">
        <h2 class="section__header">~ SERVICES ~</h2>
        <p class="section__description">
          At Capturer, we offer a range of professional photography services
          tailored to meet your unique needs. With a commitment to excellence
          and creativity, we strive to exceed your expectations, delivering
          captivating visuals that tell your story with authenticity and
          passion.
        </p>
        <div class="service__grid">
          <div class="service__card">
            <h4>Portrait Sessions</h4>
            <p>
              Our portrait sessions are designed to showcase your personality
              and style in stunning imagery.
            </p>
          </div>
          <div class="service__card">
            <h4>Maternity Sessions</h4>
            <p>
              Embrace the beauty and miracle of new life with our maternity and
              newborn photography sessions.
            </p>
          </div>
          <div class="service__card">
            <h4>Family Sessions</h4>
            <p>
              Cherish the bond of family with our custom-designed playful candid
              moments and portrait sessions.
            </p>
          </div>
          <div class="service__card">
            <h4>Maternity Sessions</h4>
            <p>
              Embrace the beauty and miracle of new life with our maternity and
              newborn photography sessions.
            </p>
          </div>
          <div class="service__card">
            <h4>Maternity Sessions</h4>
            <p>
              Embrace the beauty and miracle of new life with our maternity and
              newborn photography sessions.
            </p>
          </div>
          <div class="service__card">
            <h4>Maternity Sessions</h4>
            <p>
              Embrace the beauty and miracle of new life with our maternity and
              newborn photography sessions.
            </p>
          </div>
        </div>
      </div>
    </section> 

    
<section class="section__container client__container" id="client">
    <h2 class="section__header">~ TESTIMONIALS ~</h2>
    <!-- Slider main container -->
    <div class="swiper myswiper2">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="client__card">
            <img src="assets/client1.jpg" alt="client" />
            <p>
              Capturer exceeded all our expectations! Their attention to
              detail and ability to capture the essence of our special day was
              truly remarkable. Every time we look at our wedding photos,
              we're transported back to those magical moments. Thank you for
              preserving our memories so beautifully!
            </p>
            <h4>Likun and Moni</h4>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="client__card">
            <img src="assets/client2.jpg" alt="client" />
            <p>
              We couldn't be happier with our family portrait session with
              Capturer. They made us feel relaxed and comfortable throughout
              the entire shoot, resulting in natural and candid photos that
              perfectly reflect our family dynamic. These images will be
              cherished for years to come!
            </p>
            <h4>Lucky and Bapun</h4>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="client__card">
            <img src="assets/client3.jpg" alt="client" />
            <p>
              Capturer's maternity and newborn sessions captured the most
              precious moments of our lives with such tenderness and care.
              From the anticipation of pregnancy to the joy of welcoming our
              little one, every photo tells a story that we'll cherish
              forever. Thank you for creating beautiful memories for our
              family!
            </p>
            <h4>Lipika and Sisir</h4>
          </div>
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <section class="section__container gallery__container">
    <h2 class="section__header">~ GALLERY ~</h2>
    <div galleryslider="" class="swiper myswiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <img src="assets/fashion.jpg" alt="image">
          <div class="title">
            <a href="gallery.php?type=photos" target="_blank"> <span>Fashion</span></a>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="assets/portiate.jpg" alt="image">
          <div class="title">
            <a href="gallery.php?type=photos" target="_blank"><span>Portiate</span></a>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="assets/wedding.jpg" alt="image">
          <div class="title">
            <a href="gallery.php?type=photos" target="_blank"><span>Wedding</span></a>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="assets/prewedding.jpg" alt="image">
          <div class="title">
            <a href="gallery.php?type=photos" target="_blank"> <span>Prewedding</span></a>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="assets/familyevent.jpg" alt="image">
          <div class="title">
            <a href="gallery.php?type=photos" target="_blank"><span>Familyevent</span></a>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="assets/maternity.jpg" alt="image">
          <div class="title">
            <a href="gallery.php?type=photos" target="_blank"><span>Maternity</span></a>
          </div>
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <section class="blog" id="blog">
    <div class="section__container blog__container">
      <div class="blog__content">
        <h2 class="section__header">~ LATEST BLOG ~</h2>
        <h4>Capturing Emotion in Every Frame</h4>
        <p>
          This blog post delves into the importance of storytelling in
          photography and how Capturer approaches capturing emotion and
          narrative in their work. Readers will discover the techniques and
          strategies used by professional photographers to evoke emotion,
          convey meaning, and create compelling visual narratives that
          resonate with viewers on a deep level.
        </p>
        <div class="blog__btn">
          <button class="btn">Read More</button>
        </div>
      </div>
    </div>
  </section>

  <section class="section__container instagram__container">
    <h2 class="section__header">~ INSTAGRAM ~</h2>
    <div class="instagram__flex">
      <img src="assets/img1.jpg" alt="instagram" />
      <img src="assets/img2.jpg" alt="instagram" />
      <img src="assets/img3.jpg" alt="instagram" />
      <img src="assets/img4.jpg" alt="instagram" />
      <img src="assets/img5.jpg" alt="instagram" />
      <img src="assets/img6.jpg" alt="instagram" />
      <img src="assets/img7.jpg" alt="instagram" />
      <img src="assets/img8.jpg" alt="instagram" />
    </div>
  </section>







<!-- contact page -->
<div class="contact" id="contact">
    <div class="contact-container">
      <h2>Get in Touch</h2>
      <p>We'd love to hear from you! Fill out the form below.</p>
      <form id="contactForm">
          <label for="name">Full Name:</label>
          <input type="text" id="name" name="name" placeholder="Enter your full name" required>

          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>

          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

          <label for="city">City:</label>
          <input type="text" id="city" name="city" placeholder="Enter your city" required>

          <label for="date">Preferred Shoot Date:</label>
          <input type="date" id="date" name="date" required>

          <label for="details">Additional Details:</label>
          <textarea id="details" name="details" placeholder="Tell us more about your requirements..."></textarea>

          <label for="service">Service Type:</label>
          <select id="service" name="service">
              <option value="wedding">Wedding</option>
              <option value="event">Event</option>
              <option value="birthday">Birthday</option>
              <option value="portrait">Portrait</option>
              <option value="travel">Travel</option>
              <option value="maternity">Maternity</option>
              <option value="family function">Family Function</option>
          </select>

          <button type="submit">Submit Request</button>
      </form>
  </div>
</div>
<!-- 
  <script src="contact_script.js"></script> -->







    <footer id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <img src="assets/logo.PNG" alt="logo" />
          <div class="footer__socials">
            <a href="https://www.facebook.com/profile.php?id=100011621865029&ref=ig_profile_ac"><i class="ri-facebook-circle-fill"></i></a>
            <a href="https://www.instagram.com/weddings_by_rishi/"><i class="ri-instagram-line"></i></a>
            <a href="https://www.youtube.com/@theportrait-he5kn"><i class="ri-youtube-fill"></i></a>
          </div>
        </div>
        <div class="footer__col">
          <ul class="footer__links">
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT US</a></li>
            <li><a href="#service">SERVICES</a></li>
            <li><a href="#client">CLIENT</a></li>
            <li><a href="#blog">BLOG</a></li>
            <li><a href="#contact">CONTACT US</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>STAY IN TOUCH</h4>
          <p>
            Keep up-to-date with all things Capturer! Join our community and
            never miss a moment!
          </p>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Web Design Mastery. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html> 
