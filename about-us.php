<?php
/**
 * Template Name: About Us
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us | UCSD AS Concerts & Events</title>
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
                <a href="<?php site_url(); ?>/about-us" class="active">About Us</a>
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
            <a href="<?php site_url(); ?>/about-us" class="active">About Us</a>
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
        <h1 class="page-header mb5">We are ASCE.</h1>

        <div class="content-grid mb10">
          <div></div>

          <div>
            <h4 class="mb1">About Us:</h4>
            <p class="mb2">
              The Associated Students office of Concerts & Events (ASCE) is the 
              student programming board responsible for some of the longest 
              standing campus traditions at UC San Diego, such as You At The 
              Loft, Bear Gardens, and the Sun God Festival. Utilizing student 
              input, we pride ourselves in catering to our student body through 
              a diverse range of events. Any undergraduate student interested 
              in our organization can join and contribute to our team by 
              becoming a general body member.
            </p>

            <h4 class="mb1">Our Vision:</h4>
            <p class="mb2">
              To spearhead a culture at UC San Diego that prioritizes the 
              college experience of current students.
            </p>

            <h4 class="mb1">Our Mission:</h4>
            <p class="mb2">
              To provide standout programming for the UC San Diego 
              undergraduate student body to make their college experience 
              memorable.
            </p>

            <h4 class="mb1">Our Core Values:</h4>
            <p>
              Accessibility: our organization is open to any undergraduate 
              willing to join 
            </p>
            <p>
              Recognizability: we pride ourselves in careful, precise planning 
              and execution 
            </p>
            <p>
              Input: basing our decisions off of student data
            </p>
          </div>
        </div>

        <h1 class="page-header mb5">Meet the Team</h1>
        <div class="content-grid mb10">
          <p>
            ASCE has become synonymous with exquisite detail, beautiful 
            production, and exceptional talent. Each of the departments within 
            our office work together to create the experience that you enjoy.
          </p>
        </div>
        <div></div>

        <div class="team mb10">
          <h2>Sr. Associate Vice President</h2>
          <hr class="mb2" />
          <p>
            The Sr. Associate Vice President manages the office and its various 
            departments. The Sr. AVP oversees financial accounts, event 
            planning, talent booking, marketing, and staff development. They 
            also act as a liaison between ASCE and its external partners, 
            including the Associated Students President, the Vice Chancellor of 
            Student Affairs, and more.
          </p>
          <div class="team-member">
            <div class="team-member-details">
              <h4>Jennifer Lee</h4>
              <a href="mailto:avpconcerts@ucsd.edu">avpconcerts@ucsd.edu</a>
              <p>Sr. Associate Vice President</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/Jennifer-Lee_AVP.jpg'; ?>" />
          </div>
        </div>

        <div class="team mb10">
          <h2>Staff Development</h2>
          <hr class="mb2" />
          <p>
            The Chief of Staff oversees all staff development efforts, 
            including planning our weekly general body meetings, encouraging 
            outreach, and retaining our event volunteers. In addition to 
             the health of all of our student staff, they work to help our 
             student leaders build lifelong careers skill sets.
          </p>
          <div class="team-member">
            <div class="team-member-details">
              <h4>N/A</h4>
              <a href="mailto:aschiefofstaff@ucsd.edu">aschiefofstaff@ucsd.edu</a>
              <p>Chief of Staff</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/default.svg'; ?>" />
          </div>
        </div>

        <div class="team mb10">
          <h2>Sponsorship</h2>
          <hr class="mb2" />
          <p>
            The sponsorship team works with all the different teams of ASCE to 
            ensure sponsorship needs are met. They research, obtain, and 
            maintain relationships with on- and off-campus entities to ensure 
            that the ASCE events include diverse programming and freebies for 
            the student body.
          </p>
          <div class="team-member">
            <div class="team-member-details">
              <h4>Camilla Lomarquez</h4>
              <a href="mailto:asconcertsandevents@gmail.com">asconcertsandevents@gmail.com</a>
              <p>Sr. Associate Vice President</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/Camilla-Lomarquez_Sponsorship-Director.jpg'; ?>" />
          </div>
        </div>

        <div class="team mb10">
          <h2>Marketing Team</h2>
          <hr class="mb2" />
          <p>
            The Marketing Team is responsible for integrating ASCE into the 
            UCSD student life by promoting our events and brand via several 
            different outlets. Working to advertise our programs, festivals, 
            and volunteer opportunities, this team helps to not only put our 
            events in front of students, but also grow the organization as a 
            whole.
          </p>
          <div class="team-member">
            <div class="team-member-details">
              <h4>Olivia Tan</h4>
              <a href="mailto:ascemarketing@ucsd.edu">ascemarketing@ucsd.edu</a>
              <p>Marketing Director</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/Olivia-Tan_Marketing-Director.jpg'; ?>" />
          </div>
          <div class="team-member">
            <div class="team-member-details">
              <h4>Victoria Edeeva</h4>
              <a class="no-email">&nbsp;</a>
              <p>Marketing Coordinator</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/Victoria-Edeeva_Marketing-Coordinator.jpg'; ?>" />
          </div>
          <div class="team-member">
            <div class="team-member-details">
              <h4>Carolina Parra Solorio</h4>
              <a class="no-email">&nbsp;</a>
              <p>Marketing Coordinator</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/Carolina-Parra-Solorio_Marketing-Coordinator.jpg'; ?>" />
          </div>
        </div>

        <div class="team mb10">
          <h2>Festivals Team</h2>
          <hr class="mb2" />
          <p>
            The festivals team works year-round to create the longest lasting 
            memories to add to the UC San Diego undergraduate experience. The 
            festivals team programs the annual Sun God Festival, now a 
            household name on campus. They also are curating the first ever 
            Horizon Arena Concert to provide students with an experience that 
            will transport students Beyond the Horizon. As one of the leading 
            college music festivals in the nation and the largest event on UC 
            San Diego campus, Sun God Festival strives to be the highlight of 
            the school year.
          </p>
          <div class="team-member">
            <div class="team-member-details">
              <h4>Sierra Badua</h4>
              <a href="mailto:ascefestivals@ucsd.edu">ascefestivals@ucsd.edu</a>
              <p>Festivals Director</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/Sierra-Badua_Festivals-Director.jpg'; ?>" />
          </div>
          <div class="team-member">
            <div class="team-member-details">
              <h4>Jun Jang</h4>
              <a class="no-email">&nbsp;</a>
              <p>Festivals Coordinator</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/Jun-Jang_Festivals-Coordinator.jpg'; ?>" />
          </div>
          <div class="team-member">
            <div class="team-member-details">
              <h4>Lauren Jiang</h4>
              <a class="no-email">&nbsp;</a>
              <p>Festivals Coordinator</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/Lauren-Jiang_Festivals-Coordinator.jpg'; ?>" />
          </div>
        </div>

        <div class="team mb10">
          <h2>Bear Garden Team</h2>
          <hr class="mb2" />
          <p>
            The Bear Garden team works to put on five daytime carnivals 
            throughout the academic year. A space for students to lounge and 
            wind down with free food, games, and prizes, the Bear Gardens have 
            grown to become increasingly popular amongst the undergraduate 
            population.
          </p>
          <div class="team-member">
            <div class="team-member-details">
              <h4>Jay Wilson</h4>
              <a href="mailto:ascebeargarden@ucsd.edu">ascebeargarden@ucsd.edu</a>
              <p>Bear Garden Director</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/Jay-Wilson_Bear-Garden-Director.jpg'; ?>" />
          </div>
          <div class="team-member">
            <div class="team-member-details">
              <h4>Xinchen Fu</h4>
              <a class="no-email">&nbsp;</a>
              <p>Bear Garden Coordinator</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/Xinchen-Fu_Bear-Garden-Coordinator.jpg'; ?>" />
          </div>
        </div>

        <div class="team mb10">
          <h2>Special Events Team</h2>
          <hr class="mb2" />
          <p>
            The Special Events team is the creative powerhouse of ASCE. Putting 
            on five to eight events per quarter, this team looks for ways to 
            build new campus traditions and provide events for new, diverse 
            audiences.
          </p>
          <div class="team-member">
            <div class="team-member-details">
              <h4>N/A</h4>
              <a href="mailto:ascespecialevents@ucsd.edu">ascespecialevents@ucsd.edu</a>
              <p>Special Events Director</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/default.svg'; ?>" />
          </div>
          <div class="team-member">
            <div class="team-member-details">
              <h4>Spencer Kennebeck</h4>
              <a class="no-email">&nbsp;</a>
              <p>Special Events Coordinator</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/Spencer-Kennebeck_Special-Events-Coordinator.jpg'; ?>" />
          </div>
          <div class="team-member">
            <div class="team-member-details">
              <h4>Catherine Santa-Presca</h4>
              <a class="no-email">&nbsp;</a>
              <p>Special Events Coordinator</p>
            </div>
            <img src="<?php echo get_template_directory_uri().'/headshots/Catherine-Santa-Presca_Specials-Coordinator.jpg'; ?>" />
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