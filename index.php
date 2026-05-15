<!DOCTYPE html>
<html lang="en-au">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Description">
  <meta name="keywords" content="Keywords">
  <meta name="author" content="Tyler Stokes">

  <meta property="og:title" content="HealThML">
  <meta property="og:description"
    content="HealThML is the custom HTML and CSS project designed by Tyler Stokes, Zain Khan, Jack Bailey, and Marley Brown">
  <meta property="og:image" content="/images/logo_full.png">
  <meta property="og:image:width" content="639">
  <meta property="og:image:height" content="222">
  <meta property="og:type" content="website">

  <title>HealThML Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
  <link rel="stylesheet" type="text/css" href="styles/index_style.css">
  <style>
    h1 {
      line-height: 20px;
      font-size: 40px;
    }

    h2 {
      line-height: 0px;
    }
  </style>
</head>

<body>

  <a href="#main-dark" class="skip-link link-dark" aria-label="Skip to main content">Skip to main content</a>
  <a href="#main-light" class="skip-link link-light" aria-label="Skip to main content">Skip to main content</a>

  <div class="toggle-bg">
    <div class="toggle-wrapper">
      <a href="#dark" class="persistence-link link-dark" aria-hidden="true" aria-label="switch to dark mode toggle"></a>
      <a href="#light" class="persistence-link link-light" aria-hidden="true"
        aria-label="switch to light mode toggle"></a>
    </div>
  </div>

  <div id="dark"></div>
  <div id="light"></div>
  <div class="background">
    <header>
      <div class="logo">
        <img src="images/logo_transparent.png" alt="Company Logo">
        <div class="logo_text">
          <h1>HealThML</h1>
          <h2 style="font-size:25px;"><em>Health That Truly Performs</em></h2>
        </div>
      </div>
      <nav id="nav-light" class='nav-style'>
        <ul>
          <li class="nav_active"><a href="/#light">Home<img class="icon" src="/images/icons/home-icon-light.png"
                alt=""></a></li>
          <li><a href="jobs#light">Jobs<img class="icon" src="/images/icons/jobs-icon-light.png" alt=""></a></li>
          <li><a href="apply#light">Apply<img class="icon" src="/images/icons/apply-icon-light.png" alt=""></a></li>
          <li><a href="about#light">About<img class="icon" src="/images/icons/about-icon-light.png" alt=""></a></li>
        </ul>
      </nav>
      <nav id="nav-dark" class='nav-style'>
        <ul>
          <li class="nav_active"><a href="/#dark">Home<img class="icon" src="/images/icons/home-icon-dark.png"
                alt=""></a></li>
          <li><a href="jobs#dark">Jobs<img class="icon" src="/images/icons/jobs-icon-dark.png" alt=""></a></li>
          <li><a href="apply#dark">Apply<img class="icon" src="/images/icons/apply-icon-dark.png" alt=""></a></li>
          <li><a href="about#dark">About<img class="icon" src="/images/icons/about-icon-dark.png" alt=""></a></li>
        </ul>
      </nav>
    </header>
    <hr>
    <div class="ticker-wrapper">
      <input type="checkbox" id="pause-toggle" class="pause-check" aria-label="pause/resume scrolling-content">
      <label for="pause-toggle" class="pause-label">
        <span class="sr-only">Pause or resume scrolling content</span>
      </label>
      <div class="scrolling-content">
        <p>We are currently hiring! Check out our
          <a href="jobs#light" class="link-light">Job Description page</a>
          <a href="jobs#dark" class="link-dark">Job Description page</a>
          for more details. We would love to have you on our team.
          If you would like to apply, please visit the
          <a href="apply#light" class="link-light">Apply</a>
          <a href="apply#dark" class="link-dark">Apply</a> page.
        </p>
      </div>
    </div>
    <main id="main-content">
      <div id="main-dark"></div>
      <div id="main-light"></div>
      <form aria-label="Search for content on the website">
        <label for="search-site">
          <span class="sr-only">Search the website</span>
        </label>
        <input type="search" id="search-site" placeholder="Search here...">
        <i class="fa fa-search"></i>
      </form>
      <!-- Some of the filler text was created with AI -->
      <table>
        <tr>
          <td rowspan="2">
            <h1>Who Are We?</h1>
            HealThML is a private healthcare provider, founded in 1986 by Henry Teal and Micheal Leiung. Together, Henry
            and Micheal build the Private Health Partnership out of their garage, which eventually led to them being the
            Care Support Services group we know them as today. HealThML is built on more than four decades of hands-on
            clinical and operational experience, covering 7 locations in 3 different states. Since our founding, we have
            grown from a local service team into a trusted organisation supporting individuals, families, and workplaces
            with dependable health solutions designed for real life. We focus on combining professional care standards
            with practical accessibility, so people can get the support they need without confusion, long delays, or
            unnecessary complexity.
            <br><br>
            What makes us different is our commitment to continuity of care and service quality at every stage. Our
            clinicians, coordinators, and support teams work together to provide clear communication, respectful
            treatment, and reliable follow-through from first contact to ongoing support. We invest in staff training,
            modern systems, and feedback-led improvements so our services stay responsive as patient and community needs
            evolve. If you want to learn more about our background, values, and long-term mission, visit our <a
              href="about#light" class="link-light">About page</a><a href="about#dark" class="link-dark">About page</a>.
            If you are interested in the type of role we are currently hiring for, you can read the full position
            overview on our <a href="jobs#light" class="link-light">Job Description page</a><a href="jobs#dark"
              class="link-dark">Job Description page</a>.
            <br><br>
            We have jobs open in both our stores and warehouse, and each environment offers different opportunities to
            contribute. Store-based roles focus on direct patient support, front-of-house coordination, appointment
            flow, and maintaining a calm, professional experience for every person who walks through our doors.
            Warehouse and logistics roles keep our service network moving by managing stock accuracy, equipment
            preparation, and distribution timelines that help clinical teams deliver care without interruption.
            <br><br>
            Across both pathways, we provide structured onboarding, practical mentoring, and clear progression options
            so team members can build confidence quickly and continue growing over time. If you are exploring where your
            strengths best fit, the <a href="jobs#light" class="link-light">Job Description page</a><a href="jobs#dark"
              class="link-dark">Job Description page</a> outlines responsibilities in detail, and the <a
              href="about#light" class="link-light">About page</a><a href="about#dark" class="link-dark">About page</a>
            explains how each role connects to our broader mission.
          </td>
          <!-- # Image created with Gemini Ai -->
          <td><img class="expand" src="images/index/storefront.webp" alt="Smaller Storefront Photo"></td>
        </tr>
        <tr>
          <!-- # Image created with Gemini Ai -->
          <td><img class="expand" src="images/index/storefront_2.webp" alt="Larger Storefront Photo"></td>
        </tr>
        <tr>
          <!-- # Image created with Gemini Ai -->
          <td><img class="expand" src="images/index/warehouse.webp" alt="Warehouse Photo"></td>
          <td>
            We are currently expanding our team and looking for people who care deeply about patient outcomes,
            collaboration, and high standards of professional conduct. At HealThML, team members contribute to
            meaningful healthcare work while developing skills across communication, service delivery, and problem
            solving in a supportive environment. Whether you are early in your career or bringing established
            experience, we value initiative, empathy, and a commitment to doing the fundamentals well every day.
            <br><br>
            The role we are advertising is ideal for candidates who want to make a measurable impact and grow with a
            company that prioritises both people and performance. We encourage you to review the key responsibilities
            and selection criteria on the <a href="jobs#light" class="link-light">Job Description page</a><a
              href="jobs#dark" class="link-dark">Job Description page</a>, then submit your details through our <a
              href="apply#light" class="link-light">Apply page</a><a href="apply#dark" class="link-dark">Apply page</a>.
            If you would like more context about who we are before applying, our <a href="about#light"
              class="link-light">About page</a><a href="about#dark" class="link-dark">About page</a> covers our story,
            vision, and service philosophy in more detail.
            <br><br>
            Beyond technical capability, we look for people who communicate clearly, take ownership of their work, and
            treat colleagues and patients with consistent respect. Many of our best improvements come from team members
            who notice small friction points and suggest practical fixes, so we actively encourage constructive feedback
            and continuous improvement at every level.
            <br><br>
            If that sounds like the kind of workplace you want to be part of, your next step is simple: review the role
            details, prepare your application, and apply through our <a href="apply#light" class="link-light">Apply
              page</a><a href="apply#dark" class="link-dark">Apply page</a>. We would love to learn more about your
            experience and how you could help shape the next stage of HealThML.
          </td>
        </tr>
      </table>
      <p style="text-align:center;">HealThML would like to acknowledge the traditional owners of the land that we work
        and serve on.
        <br>We give our gratitude to the Indigenous Australian elders past, present, and emerging, who's traditions and
        practices have kept this country beautiful for thousands of years.
      </p>
    </main>
    <hr>
    <footer>
      <p><a
          href="https://week03.atlassian.net/?continue=https%3A%2F%2Fweek03.atlassian.net%2Fwelcome%2Fsoftware%3FprojectId%3D10000&atlOrigin=eyJpIjoiMDAxNWY0ZDYxZmMwNDg2NmJkYjcwYjdlNWU5ZWMwMWQiLCJwIjoiamlyYS1zb2Z0d2FyZSJ9">
          Jira Space
          <img class="icon icon-light-mode" src="/images/icons/jira-icon-light.png" alt="">
          <img class="icon icon-dark-mode" src="/images/icons/jira-icon-dark.png" alt="">
        </a></p>
      <p><a href="https://github.com/106429465/razeen-thurs-230-g01">GitHub Repository
          <img class="icon icon-light-mode" src="/images/icons/github-icon-light.png" alt="">
          <img class="icon icon-dark-mode" src="/images/icons/github-icon-dark.png" alt="">
        </a></p>
      <p><a href="https://healthml.site">Site URL
          <img class="icon icon-light-mode" src="/images/icons/website-icon-light.png" alt="">
          <img class="icon icon-dark-mode" src="/images/icons/website-icon-dark.png" alt="">
        </a></p>
      <p><a href="mailto:admin@healthml.site">Company Email
          <img class="icon icon-light-mode" src="/images/icons/email-icon-light.png" alt="">
          <img class="icon icon-dark-mode" src="/images/icons/email-icon-dark.png" alt="">
        </a></p>
    </footer>
  </div>
</body>

</html>
