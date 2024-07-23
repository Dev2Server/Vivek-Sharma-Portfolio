 <?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');

    $response = array('success' => false);

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'vivek.successive@gmail.com';
        $mail->Password = 'xtzbcymtbglfmaan';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('vivek.successive@gmail.com', 'Mailer');
        $mail->addAddress($_POST["email"]);

        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"];
        $mail->Body = $_POST["name"] . "<br>" . $_POST["message"];

        $mail->send();

        $response['success'] = true;
    } catch (Exception $e) {
        $response['error'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    echo json_encode($response);
    exit; // Prevent the rest of the HTML from being output
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Vivek Sharma</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="assets/img/my-profile-img.jpg" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename">Vivek Sharma</h1>
    </a>

    <div class="social-links text-center">
      <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
        <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Vivek Sharma</h2>
        <p>I'm <span class="typed" data-typed-items="Full Stack Developer, Designer, Freelancer, much more than you expected...">Full Stack Developer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Welcome! I'm a passionate and creative software engineer with a strong focus on simplicity and attention to detail. My journey with programming began in high school, and since then, I've specialized in .NET development, including APIs, Web Forms, and various front-end technologies like jQuery and CSS.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/my-profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Full Stack Web Developer.</h2>
            <p class="fst-italic py-3">
              I have a solid track record in the IT industry, proficient in C#, Entity Framework, JavaScript, MS SQL, and more. My approach combines technical expertise with a keen eye for intuitive user interfaces and efficient coding practices.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>18 December 1996</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>Vivek1812.vs@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+91 9868595898</span></li>
                  <li class="nowrap"><i class="bi bi-chevron-right"></i> <strong>Skills:</strong> <span>Entity Framework, ASP.Net, Web Forms, C#, MS Sql, LINQ, HTML, CSS, Telerik, Javascript, Jquery , Git Hub</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>28</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Masters in Computer Application</span></li>
				  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>New Delhi, India</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              Outside of coding, I'm dedicated to staying abreast of industry trends and exploring new technologies. I thrive in collaborative settings that foster creativity and innovation, always striving to deliver impactful solutions.
            </p>
          </div>
        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="10000" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> <span>Individuals</span></p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>I possess a comprehensive skill set honed through extensive experience in software engineering::</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>C#</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>.NET Web Forms</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>HTML &amp; CSS</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>MS SQL &amp; Linq</span> <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>GIT</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>Experienced in the field of software engineering, I bring a passion for creativity and a meticulous approach to detail. Beginning my journey with programming during high school, I have specialized in .NET technologies, focusing on API development and web applications. My expertise includes crafting intuitive user interfaces and implementing robust solutions with frameworks like Entity Framework and libraries such as jQuery. With a Master's degree in Computer Applications (MCA), I possess a solid foundation in both theoretical knowledge and practical application. I thrive in collaborative environments, contributing innovative ideas and fostering effective teamwork to achieve project success.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Sumary</h3>

            <div class="resume-item pb-0">
              <h4>Vivek Sharma</h4>
              <p><em>Innovative and deadline-driven software engineer with over 4 years of experience, specializing in .NET development with expertise in API and web application design. With a Master's degree in Computer Applications, I combine strong technical skills with a meticulous approach to deliver innovative solutions. I thrive in collaborative environments and enjoy tackling complex challenges to achieve impactful results.</em></p>
              <ul>
                <li>D-541/30, Harsh Vihar, Delhi</li>
                <li>(+91) 9868595898</li>
                <li>vivek1812.vs@gmail.com</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Master of Computer Applications</h4>
              <h5>2017 - 2020</h5>
              <p><em>Vivekananda Institute of Professional Studies (Affiliated to GGSIP University)<br>
			  AU- Block (Outer Ring Road)Pitampura, Delhi - 110034</em></p>
              <p>I successfully completed my Master of Computer Applications (M.C.A.) from Vivekananda Institute of Professional Studies, affiliated with G.G.S.I.P.U., in 2020, with a commendable academic performance, achieved 76.6%.</p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>B. Sc. (Hons.) Computer Science</h4>
              <h5>2014 - 2017</h5>
              <p><em> P.G.D.A.V. College (Affiliated to Delhi University)<br>
			  Ring Rd, Nehru Nagar, Delhi - 110065</em></p>
              <p>I successfully completed my Bachelor of Science (Honors) in Computer Science from P.G.D.A.V. College, affiliated with University of Delhi, in 2017, with a commendable academic performance, achieved 73%.</p>
            </div><!-- Edn Resume Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Senior Associate Engineer</h4>
              <h5>27 JANUARY, 2020 - Present</h5>
              <p><em>Successive Digital, Noida, Uttar Pradesh </em></p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials.</li>
                <li>Primary technologies: Dot Net 4.0, ASP.NET, Web Forms, Entity Framework 6, HTML, CSS,
JavaScript, JQuery, AJAX, VS.NET 2022.</li>
                <li>Strong in C# as development language, .NET framework concepts and implementation
and OOPs concepts.</li>
                <li>Perform system & data analysis / Post implementation support.</li>
                <li>Manage & prioritize day to day individual workload, by monitoring milestones & critical
dates.</li>
                <li>Have worked with 3rd-party web controls.</li>
                <li>Strong SQL Server (includes working with DML, DDL, Stored procedures).</li>
                <li>Knowledge of Client side applications using windows forms, WPF.</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Trainee Engineer</h4>
              <h5>7 JANUARY, 2019 – 24 JANUARY, 2020</h5>
              <p><em>Silicon India Pvt. Ltd., Noida, Uttar Pradesh</em></p>
              <ul>
                <li>Setup and maintained a network of 100+ WordPress blogs.</li>
                <li>Coordinated 20+ HTML websites to be transformed into SEO-friendly and conversion
optimized WordPress websites.</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design.</li>
                <li>Created and launched 5 WordPress websites.</li>
				<li>Used HTML, CSS, JavaScript, jQuery, PHP, MySQL and Git to develop complex responsive
WordPress themes.</li>
              </ul>
            </div><!-- Edn Resume Item -->

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Welcome to my portfolio, where innovation meets implementation. Dive into a collection of projects that demonstrate my expertise in software engineering, showcasing creativity, precision, and impactful solutions.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/HS.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>HealthSecure EMR</h4>
				  <p>Project URL: <a href="https://www.healthsecure-emr.com/" target="_blank" rel="noopener noreferrer">https://www.healthsecure-emr.com/</a></p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/BW.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>ByteWorld</h4>
				  <p>Project URL: <a href="https://byteworld.in/" target="_blank" rel="noopener noreferrer">https://byteworld.in/</a></p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/LH.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Laurel High School</h4>
				  <p>Project URL: <a href="https://laurelhigh.in/" target="_blank" rel="noopener noreferrer">https://laurelhigh.in/</a></p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/MM.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Music Mirchi</h4>
				  <p>Project URL: <a href="https://musicmirchi.in/" target="_blank" rel="noopener noreferrer">https://musicmirchi.in/</a></p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/RP.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Romapuf</h4>
				  <p>Project URL: <a href="https://romapuf.com/" target="_blank" rel="noopener noreferrer">https://romapuf.com/</a></p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/SM.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Saimora</h4>
				  <p>Project URL: <a href="https://saimora.com/" target="_blank" rel="noopener noreferrer">https://saimora.com/</a></p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Explore my comprehensive services tailored to meet your software development needs. From custom .NET applications to API integrations and responsive web design, I offer solutions that blend technical proficiency with a focus on user-centric experiences.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
            <div>
              <h4 class="title"><a class="stretched-link">Custom Software Development</a></h4>
              <p class="description">Design and develop tailored .NET applications and APIs to meet specific business needs, ensuring scalability and performance.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
            <div>
              <h4 class="title"><a class="stretched-link">Responsive Web Design and Front-End Development</a></h4>
              <p class="description">Create user-friendly websites with responsive design using jQuery, CSS, and HTML, optimizing for seamless functionality across devices.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
            <div>
              <h4 class="title"><a class="stretched-link">Database Management (MS SQL)</a></h4>
              <p class="description">Design and manage efficient relational databases on MS SQL Server, ensuring secure data storage and optimal performance.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
            <div>
              <h4 class="title"><a class="stretched-link">E-Commerce Solutions</a></h4>
              <p class="description">Build robust e-commerce platforms with essential features like shopping carts, payment gateways, and inventory management for seamless online transactions.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
            <div>
              <h4 class="title"><a class="stretched-link">Application Maintenance and Support</a></h4>
              <p class="description">Provide ongoing maintenance, updates, and technical support to ensure smooth operation, security, and performance optimization of existing applications.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
            <div>
              <h4 class="title"><a class="stretched-link">Consulting and Technical Guidance</a></h4>
              <p class="description">Offer strategic consulting on software architecture, performance optimization, and best practices, empowering businesses with expert insights to achieve their goals.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Discover what others have to say about their experience working with me.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Working with Vivek, was a game-changer for our project. Their expertise in .NET development and proactive approach made our complex API integration seamless and efficient.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>From database design to management, Vivek demonstrated a deep understanding of MS SQL. Their solutions improved our data efficiency and scalability.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Choosing Mr. Sharma for our e-commerce platform was the best decision. They built a secure and feature-rich solution that boosted our online sales.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>The ongoing support and maintenance provided by Vivek have been invaluable. They ensure our applications run smoothly, keeping our business operations efficient.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>As a consultant, Vivek provided invaluable guidance that helped us navigate complex technical decisions. Their insights and recommendations were instrumental in achieving our project goals.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Let's connect! Reach out to discuss opportunities or collaborations.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>D-541/30, Harsh Vihar, Delhi-110093</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+91 98685 95898</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>vivek1812.vs@gmail.com</p>
                </div>
              </div><!-- End Info Item -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5094.089447873795!2d77.31543395064315!3d28.703957470685495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfbc72c98ecfb%3A0xa0163581fba8fe80!2s541%2C%20Budh%20Bazar%20Rd%2C%20Block%20D%2C%20Harsh%20Vihar%2C%20Mandoli%2C%20Delhi%2C%20110093!5e0!3m2!1sen!2sin!4v1721568986740!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form id="contact-form" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Vivek Sharma</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a>Vivek Sharma</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script>
    $(document).ready(function() {
      $('#contact-form').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Show loading message
        $('.loading').show();
        $('.error-message').hide();
        $('.sent-message').hide();

        $.ajax({
          url: '', // Since the PHP is in the same file, leave URL empty
          method: 'POST',
          data: $(this).serialize(),
          dataType: 'json',
          success: function(response) {
            $('.loading').hide();
            if (response.success) {
              $('.sent-message').show();
            } else {
              $('.error-message').text(response.error).show();
            }
          },
          error: function() {
            $('.loading').hide();
            $('.error-message').text('An error occurred while sending the message.').show();
          }
        });
      });
    });
  </script>



</body>

</html>