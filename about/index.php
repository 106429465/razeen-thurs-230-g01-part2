<?php
    $current_page = 'About';
    include '../include/header.inc';
?>
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
          <?php
          require_once "../settings.php";
          $connection = @mysqli_connect($host, $user, $pwd, $sql_db);

          if (!$connection) {
              die("Failed to connect to the database: " . mysqli_connect_error());
          }


          ?>
        <section id="quotes">
          <h2>Quotes:</h2>
          <div class="quote_entry">
            <h3>Tyler Stokes</h3>
            <dl>
              <dt>Contributions</dt>
              <dd>
                <ul>
                    <?php
                    $sql = "SELECT * FROM about";
                    $result = mysqli_query($connection, $sql);
                    $contribution_found = false;
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['Person'] == 'Tyler') {
                                echo "<li>" . $row['Contribution'] . "</li>";
                                $contribution_found = true;
                            }
                        }
                    }
                    if (!$contribution_found) {
                        echo "<li>No contributions found.</li>";
                    }
                    ?>
                </ul>
              </dd>
              <dt>Quote</dt>
              <dd><strong>"我不會說中文"</strong><br>
                ("I don't speak Chinese")</dd>
            </dl>
          </div>
          <div class="quote_entry">
            <h3>Zain Khan</h3>
            <dl>
              <dt>Contributions</dt>
              <dd>
                <ul>
                    <?php
                    $sql = "SELECT * FROM about";
                    $result = mysqli_query($connection, $sql);
                    $contribution_found = false;
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['Person'] == 'Zain') {
                                echo "<li>" . $row['Contribution'] . "</li>";
                                $contribution_found = true;
                            }
                        }
                    }
                    if (!$contribution_found) {
                        echo "<li>No contributions found.</li>";
                    }
                    ?>
                </ul>
              </dd>
              <dt>Quote</dt>
              <dd><strong>"لا اقدر ان اتكلم العربية كي تقدر ان تتكلم"</strong><br>
                ("I can't speak Arabic like you can")</dd>
            </dl>
          </div>
          <div class="quote_entry">
            <h3>Jack Bailey</h3>
            <dl>
              <dt>Contributions</dt>
              <dd>
                <ul>
                    <?php
                    $sql = "SELECT * FROM about";
                    $result = mysqli_query($connection, $sql);
                    $contribution_found = false;
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['Person'] == 'Jack') {
                                echo "<li>" . $row['Contribution'] . "</li>";
                                $contribution_found = true;
                            }
                        }
                    }
                    if (!$contribution_found) {
                        echo "<li>No contributions found.</li>";
                    }
                    ?>
                </ul>
              </dd>
              <dt>Quote</dt>
              <dd><strong>"Hindi ako marunong magsalita ng Tagalog"</strong><br>
                ("I do not know how to speak Tagalog")</dd>
            </dl>
          </div>
          <div class="quote_entry">
            <h3>Marley Brown</h3>
            <dl>
              <dt>Contributions</dt>
              <dd>
                <ul>
                    <?php
                    $sql = "SELECT * FROM about";
                    $result = mysqli_query($connection, $sql);
                    $contribution_found = false;
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['Person'] == 'Marley') {
                                echo "<li>" . $row['Contribution'] . "</li>";
                                $contribution_found = true;
                            }
                        }
                    }
                    if (!$contribution_found) {
                        echo "<li>No contributions found.</li>";
                    }
                    ?>
                </ul>
              </dd>
              <dt>Quote</dt>
              <dd><strong>"英語が話せません"</strong></dd>
              <dd>("I cannot speak English")</dd>
            </dl>
          </div>
        </section>
      </div>
    </main>
    <?php include '../include/footer.inc'; ?>

