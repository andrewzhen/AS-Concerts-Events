<!DOCTYPE html>
<html lang="en">
<head>
  <title>UCSD AS Concerts & Events</title>
  <?php get_header(); ?>
<body>
  <main>
    <article>
      <div class="landing-container">
        <div class="nav-landing-container overlay">
          <nav class="nav light">
            <div class="nav-item social">
              <ul>
                <li>
                  <a href="/">
                    <img src="<?php echo get_template_directory_uri().'/images/logos/asce.svg'; ?>" />
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/ucsdasce/?hl=en" target="_blank">
                    <img src="<?php echo get_template_directory_uri().'/images/logos/instagram.svg'; ?>" />
                  </a>
                </li>
                <li>
                  <a href="https://www.facebook.com/ucsdasce/" target="_blank">
                    <img src="<?php echo get_template_directory_uri().'/images/logos/facebook.svg'; ?>" />
                  </a>
                </li>
              </ul>
            </div>

            <div class="nav-item link">
              <ul>
                <li>
                  <a href="/" class="active">Home</a>
                </li>
                <li>
                  <a href="<?php site_url(); ?>/about-us">About Us</a>
                </li>
                <li>
                  <a href="<?php site_url(); ?>/get-involved">Get Involved</a>
                </li>
              </ul>
            </div>

            <img id="menu-icon-light" src="<?php echo get_template_directory_uri().'/images/menu-light.svg'; ?>" />
          </nav>
        </div>

        <!-- *** Looking to update carousel information? Go to the bottom of flickity.pkgd.js *** -->
        <div id="slide-show" class="main-carousel">
          <div id="fall-yall" class="carousel-cell"></div>
          <div id="asce" class="carousel-cell"></div>
          <div id="horizon" class="carousel-cell"></div>
          <div id="sgf" class="carousel-cell"></div>
          <div id="bear-garden" class="carousel-cell"></div>
        </div>

        <div class="landing-title-container">
          <h1 id="carousel-title">
            We are <br/> <span id="event-title"></span>
          </h1>
          <hr id="hr-landing" />
          <div class="landing-announcement-container">
            <div class="landing-announcement">
              <p>
                ASCE is the programming board responsible for the largest 
                campus traditions at UCSD, from Bear Gardens to the Sun God 
                Festival.
              </p>
              <span id="down-arrow"></span>
            </div>
          </div>
        </div>

        <div class="gradient"></div>
      </div>

      <div id="menu-overlay"></div>
      <div id="menu">
        <ul>
          <li>
            <a href="/" class="active">Home</a>
          </li>
          <li>
            <a href="<?php site_url(); ?>/about-us">About Us</a>
          </li>
          <li>
            <a href="<?php site_url(); ?>/get-involved">Get Involved</a>
          </li>
        </ul>

        <ul>
          <li>
            <a href="/">
              <img src="<?php echo get_template_directory_uri().'/images/logos/asce-dark.svg'; ?>" />
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/ucsdasce/?hl=en" target="_blank">
              <img src="<?php echo get_template_directory_uri().'/images/logos/instagram-dark.svg'; ?>" />
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/ucsdasce/" target="_blank">
              <img src="<?php echo get_template_directory_uri().'/images/logos/facebook-dark.svg'; ?>" />
            </a>
          </li>
        </ul>
      </div>

      <div id="main-content-container" class="content-container">
        <div>
          <h3>Upcoming Events</h3>
        </div>

        <!-- *** JS will dynamically create these elements *** -->
        <!-- *** Add and modify events through events.js *** -->

        <!-- Event structure -->
  <!-- <div id="february">
          <hr class="mb10"/>
          <h2 class="mb10"> February </h2>
          <hr class="mb5"/>

          <div class="event-container">
            <div>
              <p class="event-date mb1"> 27 </p>
              <p class="event-day"> Thursday</p>
            </div>
            <div>
              <img src="images/events/diy-slime.jpg" />
            </div>
            <div>
              <h4 class="event-title mb2">
                <a 
                  href="https://www.facebook.com/events/169724991113584/" 
                  target="_blank"
                > DIY Slime </a>
              </h4>
              <div class="event-details">
                <ul>
                  <li> February 27th </li>
                  <li> 7-10PM </li>
                  <li> The Stageroom </li>
                </ul>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <hr class="mb5-outside" />
      <h3 id="archive-link">
        <a href="<?php site_url(); ?>/archive">View Events Archive</a>
      </h3>

      <footer class="footer-container">
        <nav class="nav">
          <div class="nav-item social">
            <ul>
              <li>
                <a href="/">
                  <img src="<?php echo get_template_directory_uri().'/images/logos/asce-dark.svg'; ?>" />
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/ucsdasce/?hl=en" target="_blank">
                  <img src="<?php echo get_template_directory_uri().'/images/logos/instagram-dark.svg'; ?>" />
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/ucsdasce/" target="_blank">
                  <img src="<?php echo get_template_directory_uri().'/images/logos/facebook-dark.svg'; ?>" />
                </a>
              </li>
            </ul>
          </div>

          <div class="nav-item link"></div>
        </nav>
      </footer>
    </article>
  </main>
  <?php get_footer(); ?>
  <script src="<?php echo get_template_directory_uri().'/loadEvents.js'; ?>"></script>
</body>
</html>