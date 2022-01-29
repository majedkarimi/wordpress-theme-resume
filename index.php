<?php get_header(  ); ?>
<body>
  <!-- ===== strat Header ===== -->
  <div class="btn-nav-mobile">
    <i class="bi bi-list"></i>
    <i class="bi bi-x"></i>
  </div>
  <header id="header">
    <nav class="nav-menu">
      <ul>
        <li class="home"><a href="#" class="active"><i class="bi bi-house-door"></i><span>Home</span></a></li>
        <li class="about-menu"><a href="#" class=""><i class="bi bi-person"></i><span>About</span></a></li>
        <li class="skill-menu"><a href="#"><i class="bi bi-file-earmark"></i><span>Skill</span></a></li>
        <li class="resume-menu"><a href="#"><i class="bi bi-window-sidebar"></i><span>Resume</span></a></li>
        <li class="porfolio-menu"><a href="#"><i class="bi bi-hdd-stack"></i><span>Portfolio</span></a></li>
        <li class="contact-menu"><a href="#"><i class="bi bi-envelope"></i><span>Contact</span></a></li>
      </ul>
    </nav>
  </header>
  <!-- end header -->

  <!-- ===== start Hero  ===== -->
  <section class="hero d-flex flex-column justify-content-center">
    <div class="container zindex-hero">
      <h1>Majed Karimi</h1>
      <p>I'm <span class="typed" data-typed-items="Front-end Developer, developer, programmer"></span></p>
      <div class="social-links">
        <a href="https://github.com/majedkarimi"><i class="bi bi-github"></i></a>
        <a href="https://www.linkedin.com/in/majedkarimi/"><i class="bi bi-linkedin"></i></a>
        <a href="https://twitter.com/karimiimajed"><i class="bi bi-twitter"></i></a>
        <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
        <a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
      </div>
    </div>
  </section>
  <!-- end hero section -->

  <!-- ===== start about ===== -->
  <section class="about">
    <div class="container">
      <div class="title-section">
        <h2>About</h2>
        <p>Technical team experience, preparing reports for the manager, solving problems reported by customers,
          developing and building a website
        </p>
      </div>
      <div class="content-section">
        <div class="row">
          <div class="col-lg-4">
            <img class = "d-none d-md-block" src="<?php echo get_template_directory_uri(  ) . '/assets/img/majed-2.png' ?>" alt="majed karimi">
          </div>
          <div class="col-lg-8">
            <h3>Front-End Web Developer</h3>
            <div class="item-detail">
              <div class="item-detail-left">
                <ul>
                  <li><i class="bi bi-chevron-right"></i>Birthday: <span>2,june,2000</span></li>
                  <li><i class="bi bi-chevron-right"></i>Website: <span>www.farsdev.com</span></li>
                  <li><i class="bi bi-chevron-right"></i>Phone: <span>09172155017</span></li>
                  <li><i class="bi bi-chevron-right"></i>City: <span>Tehran</span></li>
                </ul>
              </div>
              <div class="item-detail-right">
                <ul>
                  <li><i class="bi bi-chevron-right"></i>Age: <span>21</span></li>
                  <li><i class="bi bi-chevron-right"></i>Experience: <span>7 mos</span></li>
                  <li><i class="bi bi-chevron-right"></i>Email: <span>majed.karimi3@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i>Freelance: <span>available</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about -->

  <!-- ===== srart skill  ===== -->
  <section class="skills">
    <div class="container">
      <div class="title-section">
        <h2>Skills</h2>
      </div>
      <div class="content-section">
        <div class="row">
          <div class="col-lg-6">
            <p>HTML</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuemin="80" aria-valuemax="100">
              </div>
            </div>
            <p>CSS</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <p>Javascript</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <p>Wordpress</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="40" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <p>React.js</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="30" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col-lg-6">
            <p>SASS</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuemin="60" aria-valuemax="100">
              </div>
            </div>
            <p>Bootstrap</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="60" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <p>GIt and Github</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <p>Jira</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <p>Jquery</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="70" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end skills section  -->

  <!-- ===== satrt Resume ===== -->
  <section class="resume">
    <div class="container">
      <div class="title-section">
        <h2>resume</h2>
      </div>
      <div class="content-section">
        <div class="row">
          <div class="col-lg-6">
            <div class="resume-item">
              <h3>Education</h3>
              <div class="resume-item-content">
                <h4>The Complete JavaScript Course 2021</h4>
                <p class="gray"><span>2021-2023</span></p>
                <p class="purple"><span>Jonas Schmedtmann</span></p>
                <p class="company"><img src="<?php echo get_template_directory_uri(  ) . '/assets/img/udemy-logo-company.png' ?>" alt="majed-banimode"
                    style=" width: 17px; "><span>Udemy</span></p>
                <p class="desc-1">The modern JavaScript course for everyone!</p>
                <p class="desc-2">Master JavaScript with projects, challenges and theory. Many courses in one!</p>
              </div>
              <div class="resume-item-content">
                <h4>Web Developer 2021</h4>
                <p class="gray"><span>2021-2022</span></p>
                <p class="teagreencher"><span>Vahid Salehi</span></p>
                <p class="company"><img src="<?php echo get_template_directory_uri(  ) . '/assets/img/7learn-logo-company.png' ?>"
                    alt="majed-banimode"><span>7learn</span></p>
                <!-- <p class="desc-1">The modern JavaScript course for everyone!</p> -->
                <p class="desc-2">In this tutorial I lean html, css, jquery, bootstap, cass</p>
              </div>
              <div class="resume-item-content">
                <h4>React - The Complete Guide (incl Hooks, React Router, Redux)</h4>
                <p class="gray"><span>2021-2023</span></p>
                <p class="purple"><span>Maximilian Schwarzmüller</span></p>
                <p class="company"><img src="<?php echo get_template_directory_uri(  ) . '/assets/img/udemy-logo-company.png' ?>" alt="majed-banimode"
                    style=" width: 17px; "><span>Udemy</span></p>
                <!-- <p class="desc-1">Dive in and learn React.js from scratch!</p> -->
                <p class="desc-2">Learn Reactjs, Hooks, Redux, React Routing, Animations, Next.js and way more!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="resume-item">
              <h3>Experience</h3>
              <div class="resume-item-content">
                <h4>Front End Web Developer</h4>
                <p class="gray"><span>Oct 2021 – Present</span></p>
                <p class="green"><span>Self-employed</span></p>
                <!-- <p class="academy"><span>Self-employed</span></p> -->
                <!-- <p class="desc-1"></p> -->
                <!-- <p class="desc-2"></p> -->
              </div>
              <div class="resume-item-content">
                <h4>Product Team</h4>
                <p class="gray"><span>Oct 2020 – Sep 2021 - 1 yr</span></p>
                <p class="company"><img src="<?php echo get_template_directory_uri(  ) . '/assets/img/banimode-company.png' ?>" alt="majed-banimode"><span>Banimode</span>
                </p>
                <ul>
                  <li>Create a task for the development team</li>
                  <li>Review reports submitted by customers</li>
                  <li>Provide daily team report to employer</li>
                  <li>Prestashop admin panel management</li>
                  <li>Coordination between the development team and the applicant</li>
                  <li>Jira software management</li>
                </ul>
              </div>
              <div class="resume-item-content">
                <h4>Customer Relationship Management</h4>
                <p class="gray"><span>May 2019 – Oct 2020 - 1 yr 6 mos</span></p>
                <p class="company"><img src="<?php echo get_template_directory_uri(  ) . '/assets/img/banimode-company.png' ?>" alt="majed-banimode"><span>Banimode</span>
                </p>
                <ul>
                  <li>Check customer refunds</li>
                  <li>Online chat with customers</li>
                  <li>Create report templates from Excel for team members</li>
                  <li>Working with PrestaShop</li>
                  <li>after sales service</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end Resume -->


  <!-- ===== start code portfolio ===== -->
  <section class="portfolio">
    <div class="container">
      <div class="title-section">
        <h2>portfolio</h2>
      </div>
      <div class="portfolio-filters">
        <ul>
          <li><a class="active-portfolio-filters" href="#">All</a></li>
          <li><a href="#">Company</a></li>
          <li><a href="#">Ecommerce</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
      <div class="content-section">
        <div class="row">
          <div class="col-lg-4">
            <div class="portfolio-item">
              <figure>
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/img/portfolio/my-cv-portfolio-item-3.png' ?>" alt="cv-majad">
              </figure>

              <h4>My Resume</h4>
              <div class="label">
              <p class=""><i class="bi bi-shield-lock"> </i>Tech Use: <span>SASS, Bootstap, JS </span></p>
              <p class=""><i class="bi bi-check2"> </i> Status: <span>In Progress</span></p>
              <p class=""><i class="bi bi-github"> </i>Github: <span>Available</span></p>
              <p class=""><i class="bi bi-activity"> </i>Netlify: <span>Available</span></p>
              </div>
              <div class="btn-portfolio-item">
                <a href="https://farsdev.com/" target="_blank">Demo</a>
                <a href="https://github.com/majedkarimi/my-cv" target="_blank">Download</a>
                <a href="" class="buy">Buy</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-item">
              <figure>
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/img/portfolio/company-portfolio-item.png' ?>" alt="cv-majad">
              </figure>
              <h4>Company</h4>
              <div class="label">
              <p class=""><i class="bi bi-shield-lock"> </i>Tech Use: <span>HTML, CSS, Jquery,   </span></p>
              <p class=""><i class="bi bi-check2-all"></i> Status: <span>Complite</span></p>
              <p class=""><i class="bi bi-github"> </i>Github: <span>Available</span></p>
              <p class=""><i class="bi bi-activity"> </i>Blog: <span>Available</span></p>
              </div>
              <div class="btn-portfolio-item">
                <a href="https://company-majed.netlify.app/" target="_blank">Demo</a>
                <a href="https://github.com/majedkarimi/Company" target="_blank">Download</a>
                <a href="" class="buy">Buy</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-item">
              <figure>
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/img/portfolio/Ecommerce-portfolio-item.png' ?>" alt="cv-majad">
              </figure>
              <h4>Ecommerce</h4>
              <div class="label">
              <p class=""><i class="bi bi-shield-lock"> </i>Tech Use: <span>Full Bootstap Project </span></p>
              <p class=""><i class="bi bi-check2"></i> Status: <span>In Progress</span></p>
              <p class=""><i class="bi bi-github"> </i>Github: <span>Available</span></p>
              <p class=""><i class="bi bi-activity"> </i>PDP: <span>Available</span></p>
              </div>
              <div class="btn-portfolio-item">
                <a href="https://facommerce.netlify.app/" target = "_blank">Demo</a>
                <a href="https://github.com/majedkarimi/E-commerce" target = "_blank">Download</a>
                <a href="" class="buy">Buy</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-item">
              <figure>
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/img/portfolio/bank.png' ?>" alt="cv-majad">
              </figure>
              <h4>Js Bank</h4>
              <div class="label">
              <p class=""><i class="bi bi-shield-lock"> </i>Tech Use: <span>Full Javascript  </span></p>
              <p class=""><i class="bi bi-check2"> </i> Status: <span>In Progress</span></p>
              <p class=""><i class="bi bi-github"> </i>Github: <span>Available</span></p>
              <p class=""><i class="bi bi-activity"> </i>Netlify: <span>Available</span></p>
              </div>
              <div class="btn-portfolio-item">
                <a href="https://fabank.netlify.app/" target = "_blank">Demo</a>
                <a href="https://github.com/majedkarimi/bank" target = "_blank">Download</a>
                <a href="" class="buy">Buy</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-item">
              <figure>
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/img/portfolio/playstation-portfolio-item.jpg' ?>" alt="cv-majad">
              </figure>
              <h4>playstation 5 UI</h4>
              <div class="label">
              <p class=""><i class="bi bi-shield-lock"> </i>Tech Use: <span>SASS, Bootstap, JS,  </span></p>
              <p class=""><i class="bi bi-check2"> </i> Status: <span>In Progress</span></p>
              <p class=""><i class="bi bi-github"> </i>Github: <span>Available</span></p>
              <p class=""><i class="bi bi-activity"> </i>Netlify: <span>Available</span></p>
              </div>
              <div class="btn-portfolio-item">
                <a href="https://github.com/majedkarimi/ps5" target="_blank">Demo</a>
                <a href="https://github.com/majedkarimi/ps5" target="_blank">Download</a>
                <a href="" class="buy">Buy</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-item">
              <figure>
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/img/portfolio/facebook-portfolio-item.webp' ?>" alt="cv-majad">
              </figure>
              <h4>Facebook UI</h4>
              <div class="label">
              <p class=""><i class="bi bi-shield-lock"> </i>Tech Use: <span>SASS, Bootstap, JS,  </span></p>
              <p class=""><i class="bi bi-check2"> </i> Status: <span>In Progress</span></p>
              <p class=""><i class="bi bi-github"> </i>Github: <span>Available</span></p>
              <p class=""><i class="bi bi-activity"> </i>Netlify: <span>Available</span></p>
              </div>
              <div class="btn-portfolio-item">
                <a href="https://github.com/majedkarimi/facebook"target="_blank">Demo</a>
                <a href="https://github.com/majedkarimi/facebook" target="_blank">Download</a>
                <a href="" class="buy">Buy</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-item">
              <figure>
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/img/portfolio/Pig-Game-portfolio-item.png'?>" alt="cv-majad">
              </figure>
              <h4>Js project Pig Game</h4>
              <div class="label">
              <p class=""><i class="bi bi-shield-lock"> </i>Tech Use: <span>SASS, Bootstap, JS,  </span></p>
              <p class=""><i class="bi bi-check2"> </i> Status: <span>In Progress</span></p>
              <p class=""><i class="bi bi-github"> </i>Github: <span>Available</span></p>
              <p class=""><i class="bi bi-activity"> </i>Netlify: <span>Available</span></p>
              </div>
              <div class="btn-portfolio-item">
                <!-- <a href="">Demo</a> -->
                <a href="" class="buy">coming soon</a>
                <!-- <a href="" class="buy">Buy</a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-item">
              <figure>
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/img/portfolio/bankist-portfolio-item.png' ?>" alt="cv-majad">
              </figure>
              <h4>Js Bank UI</h4>
              <div class="label">
              <p class=""><i class="bi bi-shield-lock"> </i>Tech Use: <span>SASS, Bootstap, JS,  </span></p>
              <p class=""><i class="bi bi-check2"> </i> Status: <span>In Progress</span></p>
              <p class=""><i class="bi bi-github"> </i>Github: <span>Available</span></p>
              <p class=""><i class="bi bi-activity"> </i>Netlify: <span>Available</span></p>
              </div>
              <div class="btn-portfolio-item">
                <!-- <a href="">Demo</a> -->
                <a href="" class="buy">coming soon</a>
                <!-- <a href="" class="buy">Buy</a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-item">
              <figure>
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/img/portfolio/forkify-portfolio-item.jpeg' ?>" alt="cv-majad">
              </figure>
              <h4>Js project Forkify App</h4>
              <div class="label">
              <p class=""><i class="bi bi-shield-lock"> </i>Tech Use: <span>SASS, Bootstap, JS,  </span></p>
              <p class=""><i class="bi bi-check2"> </i> Status: <span>In Progress</span></p>
              <p class=""><i class="bi bi-github"> </i>Github: <span>Available</span></p>
              <p class=""><i class="bi bi-activity"> </i>Netlify: <span>Available</span></p>
              </div>
              <div class="btn-portfolio-item">
                <!-- <a href="">Demo</a> -->
                <a href="" class="buy">coming soon</a>
                <!-- <a href="" class="buy">Buy</a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-item">
              <figure>
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/img/portfolio/apple-store-portfolio-item.png' ?>" alt="cv-majad">
              </figure>
              <h4>Apple Store</h4>
              <div class="label">
              <p class=""><i class="bi bi-shield-lock"> </i>Tech Use: <span>SASS, Bootstap, JS,  </span></p>
              <p class=""><i class="bi bi-check2"> </i> Status: <span>In Progress</span></p>
              <p class=""><i class="bi bi-github"> </i>Github: <span>Available</span></p>
              <p class=""><i class="bi bi-activity"> </i>Netlify: <span>Available</span></p>
              </div>
              <div class="btn-portfolio-item">
                <!-- <a href="">Demo</a> -->
                <a href="" class="buy">coming soon</a>
                <!-- <a href="" class="buy">Buy</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- emd code portfolio -->

  <!-- ===== start code footer ===== -->
  <?php get_footer(); ?>