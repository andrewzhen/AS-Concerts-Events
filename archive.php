<?php
/**
 * Template Name: Archive
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Archive | UCSD AS Concerts & Events</title>
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
                <a href="<?php site_url(); ?>/get-involved">Get Involved</a>
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

      <div class="content-container">
        <h1 id="archive-header">Events Archive</h1>

        <div>
          <h3>
            <a id="back" href="javascript:history.back()">Back</a>
          </h3>
          <hr class="mb5" />
        </div>

        <div id="archive-year">
     <!-- <h2 id="2020">2020</h2>
          <hr class="mb5" /> -->
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
  <script src="<?php echo get_template_directory_uri().'/loadArchive.js'; ?>"></script>
</body>
</html>