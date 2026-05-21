<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Description">
  <meta name="keywords" content="Keywords">
  <title>HealThML Job Description</title>
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="../styles/jobs_style.css">
  <link rel="stylesheet" type="text/css" href="../styles/style.css">
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

      <?php $current_page = 'jobs'; ?>
      <?php include '../include/nav.inc'; ?>
    </header>

    <hr>

    <main id="main-content">

      <div id="main-dark"></div>
      <div id="main-light"></div>

      <section>
        <h2>Want to join our community?</h2>
        <p>
          <!-- This filler text was created by ChatGPT -->
          At HealThML, you're not just stepping into a job, you're joining a team that
          genuinely cares about people and the impact we make every day. We work together to
          create a supportive, respectful environment where patients feel heard and staff feel
          valued. Whether you're building your career or bringing years of experience, you'll
          be part of a community that invests in your growth, listens to your ideas, and
          celebrates the fundamentals done well. If you're driven by empathy, collaboration,
          and a commitment to meaningful healthcare work, we'd love to welcome you into our team.
        </p>
        <!-- This filler text was created by ChatGPT -->
        <aside>
          <form method="get" action="../jobs/job_search.php">        
            <label for="model">Search:</label>       
            <input type="text" id="search" name="search" required>        
            <button type="submit">Search</button>
          </form>
          <h3>Why Join HealThML?</h3>
          <p>
            At HealThML, we combine healthcare expertise with modern digital systems to deliver reliable and
            accessible services. Our teams work across clinical support, logistics, and digital platforms to
            ensure patients receive timely and effective care.
          </p>

          <h4>What We Offer</h4>
          <ul>
            <li>Supportive team environment focused on collaboration</li>
            <li>Ongoing training and professional development</li>
            <li>Opportunities to work with modern healthcare systems</li>
            <li>Clear pathways for career progression</li>
          </ul>

          <h4>Work Environment</h4>
          <p>
            Our workplace prioritises clear communication, respect, and efficiency. Whether in-store or in
            logistics, every role contributes to maintaining consistent service quality and positive patient
            outcomes.
          </p>

          <h4>Did You Know?</h4>
          <p>
            Digital health services are one of the fastest-growing areas in healthcare, improving access to
            care through online systems, appointment platforms, and data-driven decision making.
          </p>
        </aside>
      </section>

      <h3>Here are our available jobs!</h3>
      <?php 
      require_once "../settings.php";
      $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

      if (!$conn) {
        echo "<p>Unable to connect to the database server.</p>"
        . "<p>Error code " . mysqli_connect_errno() . ": " . mysqli_connect_error() . "</p>";
        exit();
      }

      else {

        if (isset($_GET['search'])) {
          $search = mysqli_real_escape_string($conn, $_GET['search']);
          $sql = "SELECT * FROM jobs WHERE job_title LIKE '%$search%' OR ref_num LIKE '%$search%'";
          $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<p>Showing results that contain 	&quot;" . $search . "&quot;:</p>";
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<section class='job-listing'>";
              echo "<details>";
              echo "<!-- This filler text was created by ChatGPT -->";
              echo "<summary>
                      <span>" . $row['job_title'] .  " <a class='link-light'>" . $row['ref_num'] . "</a><a class='link-dark'>" . $row['ref_num'] . "</a></span>
                    </summary>";
              echo "<h4>Role description</h4>
                    <p>" . $row['job_desc'] . "</p>";
              echo "<h4>Salary & Reporting Line</h4>
                    <ul>
                      <li><strong>Salary:</strong> AUD $" . $row['salary'] . "</li>
                      <li><strong>Reports to:</strong> " . $row['chain_command'] . "</li>
                    </ul>";
              echo "<!-- This image was created by ChatGPT -->
                    <aside>
                      <img class='image' src='../images/jobs/clinicalcarecoordinator.png' alt='Smaller Storefront Photo'>
                    </aside>

                    <!-- This filler text was created by ChatGPT -->";
              echo "<h4>Key Responsibilities</h4>
                    <ul>" . $row['resp'] . "</ul>";
              echo "<h4>Essential Requirements</h4>
                    <ol>" . $row['ess_req'] . "</ol>";
              echo "<h4>Preferable Requirements</h4>
                    <ul>" . $row['pre_req'] . "</ul>";
              echo "<a href='../apply#light' class='link-light'>Apply Now!</a>
                    <a href='../apply#dark' class='link-dark'>Apply Now!</a>
                    <br>
                    </details>
                    </section>";
              }
          
        }
        else {
          echo "<p>No results found for '" . $search . "'. Please try a different search term.</p>";
        }
      }
    }
      ?>
      <form action="../jobs/index.php">            
            <button type="submit">Exit Search</button>
          </form>
      <hr>
      <?php include '../include/footer.inc'; ?>
    </main>

  </div>
</body>
</html>
