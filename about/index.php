<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="About page for HealThML">
  <meta name="keywords" content="HealThML HTMW">
  <meta name="author" content="Marley Brown">
  <title>About HealThML</title>
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <link href="../styles/about_style.css" rel="stylesheet">
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
      <a href="#dark" class="persistence-link link-dark" aria-hidden="true" aria-label="Switch to dark mode toggle"></a>
      <a href="#light" class="persistence-link link-light" aria-hidden="true"
        aria-label="Switch to light mode toggle"></a>
    </div>
  </div>
  <div id="dark"></div>
  <div id="light"></div>
  <div class="background">
    <header>
      <div class="logo">
        <img src="../images/logo_transparent.png" alt="Company Logo">
        <div class="logo_text">
          <h1 id="title">HealThML</h1>
          <h2 style="font-size:25px;"><em>Health That Truly Performs</em></h2>
        </div>
      </div>
      <nav id="nav-light" class='nav-style'>
        <ul>
          <li><a href="/#light">Home<img class="icon" src="/images/icons/home-icon-light.png" alt=""></a></li>
          <li><a href="/jobs#light">Jobs<img class="icon" src="/images/icons/jobs-icon-light.png" alt=""></a></li>
          <li><a href="/apply#light">Apply<img class="icon" src="/images/icons/apply-icon-light.png" alt=""></a></li>
          <li class="nav_active"><a href="about#light">About<img class="icon" src="/images/icons/about-icon-light.png"
                alt=""></a></li>
        </ul>
      </nav>
      <nav id="nav-dark" class='nav-style'>
        <ul>
          <li><a href="/#dark">Home<img class="icon" src="/images/icons/home-icon-dark.png" alt=""></a></li>
          <li><a href="/jobs#dark">Jobs<img class="icon" src="/images/icons/jobs-icon-dark.png" alt=""></a></li>
          <li><a href="/apply#dark">Apply<img class="icon" src="/images/icons/apply-icon-dark.png" alt=""></a></li>
          <li class="nav_active"><a href="about#dark">About<img class="icon" src="/images/icons/about-icon-dark.png"
                alt=""></a></li>
        </ul>
      </nav>
    </header>
    <hr>
    <main id="main-content">

      <div id="main-dark"></div>
      <div id="main-light"></div>
      <h1>About the HTMW Group</h1>
      <div class="content_left">
        <section id="intro">
          <h2>Quick Facts</h2>
          <ul>
            <li>HTMW has <strong>4 members</strong>:
              <ol>
                <li>Tyler Stokes (<span class="student_id">106512323</span>)</li>
                <li>Zain Khan (<span class="student_id">106508843</span>)</li>
                <li>Jack Bailey (<span class="student_id">106579001</span>)</li>
                <li>Marley Brown (<span class="student_id">106429265</span>)</li>
              </ol>
            </li>
            <li>The group attends <strong>Web Tech's Thursday 2:30</strong> class:
              <ul>
                <li>Tutor: Razeen</li>
                <li>Group no.: g01</li>
              </ul>
            </li>
          </ul>
        </section>
        <section id="photo">
          <h2>Group Photo</h2>
          <figure>
            <figcaption>The HTMW Group (from left to right): Tyler, Zain, Marley, Jack</figcaption>
            <img class="expand" id="group_photo" src="../images/about/img_group.jpg"
              alt="Group picture featuring 4 people" title="group photo" loading="lazy">
          </figure>
        </section>
      </div>
      <div class="content_right">
        <section id="funfacts">
          <h2>Fun Facts</h2>
          <table>
            <caption>Fun facts</caption>
            <tr>
              <td>Tyler Stokes</td>
              <td>Made a font for the standard galactic alphabet</td>
            </tr>
            <tr>
              <td>
                Zain Khan
              </td>
              <td>
                Uses Linux
              </td>
            </tr>
            <tr>
              <td>
                Jack Bailey
              </td>
              <td>
                Was a former COD Mobile Professional
              </td>
            </tr>
            <tr>
              <td>
                Marley Brown
              </td>
              <td>
                Enjoys writing fun facts
              </td>
            </tr>
          </table>
        </section>
        <section id="quotes">
          <h2>Quotes:</h2>
          <div class="quote_entry">
            <h3>Tyler Stokes</h3>
            <dl>
              <dt>Contribution</dt>
              <dd>
                <ul>
                  <li>Home page</li>
                  <li>Core CSS</li>
                  <li>Jira Management</li>
                </ul>
              </dd>
              <dt>Quote</dt>
              <dd><strong>"我不會說中文"</strong><br>
                > "I don't speak Chinese"</dd>
            </dl>
          </div>
          <div class="quote_entry">
            <h3>Zain Khan</h3>
            <dl>
              <dt>Contribution</dt>
              <dd>
                <ul>
                  <li>Apply page</li>
                  <li>Core CSS</li>
                  <li>Accessibility checking</li>
                </ul>
              </dd>
              <dt>Quote</dt>
              <dd><strong>"لا اقدر ان اتكلم العربية كي تقدر ان تتكلم"</strong><br>
                > "I can't speak Arabic like you can"</dd>
            </dl>
          </div>
          <div class="quote_entry">
            <h3>Jack Bailey</h3>
            <dl>
              <dt>Contribution</dt>
              <dd>
                <ul>
                  <li>Jobs page</li>
                </ul>
              </dd>
              <dt>Quote</dt>
              <dd><strong>"Hindi ako marunong magsalita ng Tagalog"</strong><br>
                > "I do not know how to speak Tagalog"</dd>
            </dl>
          </div>
          <div class="quote_entry">
            <h3>Marley Brown</h3>
            <dl>
              <dt>Contribution</dt>
              <dd>
                <ul>
                  <li>About page</li>
                  <li>Github management</li>
                </ul>
              </dd>
              <dt>Quote</dt>
              <dd><strong>"英語が話せません"</strong></dd>
              <dd>> "I cannot speak English"</dd>
            </dl>
          </div>
        </section>
      </div>
    </main>
    <hr style="clear:both;">
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
