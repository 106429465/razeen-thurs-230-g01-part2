<?php
    $current_page = 'Jobs';
    include '../include/header.inc';
?>
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
            <input type="text" id="search" name="search" placeholder="Search jobs..." required>
            <button type="submit" class="fa fa-search"></button>
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
        $sql = "SELECT * FROM jobs";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
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
      }
      ?>
      <?php include '../include/footer.inc'; ?>

