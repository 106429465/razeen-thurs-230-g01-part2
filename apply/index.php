<!DOCTYPE html>
<html lang="en-au">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Apply to HealThML</title>
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <link href="../styles/apply_style.css" rel="stylesheet">
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
        <img src="../images/logo_transparent.png" alt="Company Logo">
        <div class="logo_text">
          <h1>HealThML</h1>
          <h2 style="font-size:25px;"><em>Health That Truly Performs</em></h2>
        </div>
      </div>
      <nav id="nav-light" class='nav-style'>
        <ul>
          <li><a href="/#light">Home<img class="icon" src="/images/icons/home-icon-light.png" alt=""></a></li>
          <li><a href="/jobs#light">Jobs<img class="icon" src="/images/icons/jobs-icon-light.png" alt=""></a></li>
          <li class="nav_active"><a href="apply#light">Apply<img class="icon" src="/images/icons/apply-icon-light.png"
                alt=""></a></li>
          <li><a href="/about#light">About<img class="icon" src="/images/icons/about-icon-light.png" alt=""></a></li>
        </ul>
      </nav>
      <nav id="nav-dark" class='nav-style'>
        <ul>
          <li><a href="/#dark">Home<img class="icon" src="/images/icons/home-icon-dark.png" alt=""></a></li>
          <li><a href="/jobs#dark">Jobs<img class="icon" src="/images/icons/jobs-icon-dark.png" alt=""></a></li>
          <li class="nav_active"><a href="apply#dark">Apply<img class="icon" src="/images/icons/apply-icon-dark.png"
                alt=""></a></li>
          <li><a href="/about#dark">About<img class="icon" src="/images/icons/about-icon-dark.png" alt=""></a></li>
        </ul>
      </nav>
    </header>
    <hr>
    <main id="main-content">
      <div id="main-dark"></div>
      <div id="main-light"></div>
      <h1>Apply to HealThML</h1>
      <p>We would love for you to be a part of our team, please fill out the form below and we'll get back to you
        shortly!</p>
      <form action="https://mercury.swin.edu.au/it000000/formtest.php" method="post">
        <label for="job_ref_num">Job reference number</label>
        <input type="text" id="job_ref_num" name="job reference number" required pattern=".{5}"><br><br>
        <fieldset>
          <legend>Personal information</legend><br><br>
          <label for="first_name">First name</label>
          <input type="text" id="first_name" name="first name" required pattern="[A-za-z]{1,20}"><br><br>
          <label for="last_name">Last name</label>
          <input type="text" id="last_name" name="last name" required pattern="[A-za-z]{1,20}"><br><br>
          <label for="date_of_birth">Date of birth</label>
          <input type="date" id="date_of_birth" name="date of birth" required><br><br>
        </fieldset><br><br>
        <fieldset>
          <legend>Gender</legend><br><br>
          <input type="radio" id="male" name="gender" value="male" required>
          <label for="male" class="gender">Male</label>
          <input type="radio" id="female" name="gender" value="female" required>
          <label for="female" class="gender">Female</label>
          <input type="radio" id="other" name="gender" value="other" required>
          <label for="other" class="gender">Other</label><br><br>
        </fieldset><br><br>
        <label for="street_address">Street address</label>
        <input type="text" id="street_address" name="street address" required><br><br>
        <label for="suburb">Suburb</label>
        <input type="text" id="suburb" name="suburb" required><br><br>
        <label for="state">State</label>
        <select id="state" name="state" required>
          <option value="">Select a state</option>
          <option value="VIC">VIC</option>
          <option value="NSW">NSW</option>
          <option value="QLD">QLD</option>
          <option value="NT">NT</option>
          <option value="WA">WA</option>
          <option value="SA">SA</option>
          <option value="TAS">TAS</option>
          <option value="ACT">ACT</option>
        </select><br><br>
        <label for="postcode">Postcode</label>
        <input type="text" id="postcode" name="postcode" required pattern="[0-9]{4}"><br><br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="phone_number">Phone number</label>
        <input type="tel" id="phone_number" name="phone number" required pattern="[0-9]{8,12}"><br><br>
        <fieldset>
          <legend>Skills</legend><br><br>
          <input type="checkbox" id="communication" name="skills" value="communication" required>
          <label for="communication" class="skills">Communication</label><br>
          <input type="checkbox" id="teamwork" name="skills" value="teamwork">
          <label for="teamwork" class="skills">Teamwork</label><br>
          <input type="checkbox" id="problem_solving" name="skills" value="problem solving">
          <label for="problem_solving" class="skills">Problem solving</label><br>
          <input type="checkbox" id="time_management" name="skills" value="time management">
          <label for="time_management" class="skills">Time management</label><br>
          <input type="checkbox" id="adaptability" name="skills" value="adaptability">
          <label for="adaptability" class="skills">Adaptability</label><br><br>
          <label for="other_skills">Other skills</label><br><br>
          <textarea id="other_skills" name="other skills" placeholder="Other skills"></textarea><br><br>
        </fieldset><br><br>
        <input type="submit" value="Submit">
      </form>
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
