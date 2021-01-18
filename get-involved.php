<?php
/**
 * Template Name: Get Involved
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Get Involved | UCSD AS Concerts & Events</title>
  <?php get_header(); ?>
<body>
  <main>
    <article>
      <div class="nav-landing-container">
        <nav class="nav">
          <div class="nav-item"></div>

          <div class="nav-item link">
            <ul>
              <li>
                <a href="/">Home</a>
              </li>
              <li>
                <a href="<?php site_url(); ?>/about-us">About Us</a>
              </li>
              <li>
                <a href="<?php site_url(); ?>/get-involved" class="active">Get Involved</a>
              </li>
            </ul>
          </div>

          <img id="menu-icon" src="<?php echo get_template_directory_uri().'/images/menu.svg'; ?>" />
        </nav>
      </div>

      <div id="menu-overlay"></div>
      <div id="menu">
        <ul>
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <a href="<?php site_url(); ?>/about-us">About Us</a>
          </li>
          <li>
            <a href="<?php site_url(); ?>/get-involved" class="active">Get Involved</a>
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

      <div class="content-container">
        <h1 class="page-header mb5">Get Involved.</h1>

        <div class="content-grid mb10">
          <div class="mb10">
            <h4 class="mb1">Interested in getting involved?</h4>
            <p class="mb1">
              Any undergraduate student can join ASCE and be a part of our team!
            </p>
            <p>
              <!-- To learn more about how to get involved, or the various positions 
              on ASCE, please fill out the form <span id="formText"></span> or 
              email <a href="mailto:avpconcerts@ucsd.edu">avpconcerts@ucsd.edu</a>. -->
              To learn more about how to get involved, or the various positions 
              on ASCE, email 
              <a href="mailto:avpconcerts@ucsd.edu">avpconcerts@ucsd.edu</a>.
            </p>
          </div>
          <div>
            <!-- <form action="<?php echo get_template_directory_uri().'/mail.php'; ?>" method="POST">
              <h4 class="mb1">Name</h4>
              <input class="mb2" type="text" name="name" placeholder="Your name">
              <h4 class="mb1">Email</h4>
              <input class="mb2" type="text" name="email" placeholder="Email address">
              <h4 class="mb1">Message</h4>
              <textarea class="mb2" name="message" placeholder="Start typing here"></textarea>
              <br />
              <input type="submit" id="submit" value="Submit">
              <img id="submit-arrow" src="<?php echo get_template_directory_uri().'/images/submit.svg'; ?>" />
            </form> -->
          </div>
        </div>
      </div>

      <div class="footer-spacer"></div>

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

          <div class="nav-item"></div>
        </nav>
      </footer>
    </article>
  </main>
  <?php get_footer(); ?>
</body>
</html>