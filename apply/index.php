<?php
    $current_page = 'Apply';
    include '../include/header.inc';
?>
    <main id="main-content">
      <div id="main-dark"></div>
      <div id="main-light"></div>
      <h1>Apply to HealThML</h1>
      <p>We would love for you to be a part of our team, please fill out the form below and we'll get back to you shortly!</p>
      
      <form action="process_eoi.php" method="post" novalidate="novalidate">
        <label for="job_ref_num">Job reference number</label>
        <input type="text" id="job_ref_num" name="job_ref_num"><br><br>
        
        <fieldset>
          <legend>Personal information</legend><br><br>
          <label for="first_name">First name</label>
          <input type="text" id="first_name" name="first_name"><br><br>
          
          <label for="last_name">Last name</label>
          <input type="text" id="last_name" name="last_name"><br><br>
          
          <label for="date_of_birth">Date of birth</label>
          <input type="date" id="date_of_birth" name="date_of_birth"><br><br>
        </fieldset><br><br>
        
        <fieldset>
          <legend>Gender</legend><br><br>
          <input type="radio" id="male" name="gender" value="male">
          <label for="male" class="gender">Male</label>
          <input type="radio" id="female" name="gender" value="female">
          <label for="female" class="gender">Female</label>
          <input type="radio" id="other" name="gender" value="other">
          <label for="other" class="gender">Other</label><br><br>
        </fieldset><br><br>
        
        <label for="street_address">Street address</label>
        <input type="text" id="street_address" name="street_address"><br><br>
        
        <label for="suburb">Suburb</label>
        <input type="text" id="suburb" name="suburb"><br><br>
        
        <label for="state">State</label>
        <select id="state" name="state">
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
        <input type="text" id="postcode" name="postcode"><br><br>
        
        <label for="email">Email</label>
        <input type="text" id="email" name="email"><br><br>
        
        <label for="phone_number">Phone number</label>
        <input type="text" id="phone_number" name="phone_number"><br><br>
        
        <fieldset>
          <legend>Skills</legend><br><br>
          <!-- Using name="skills[]" allows multiple checked options to build an array in PHP -->
          <input type="checkbox" id="communication" name="skills[]" value="communication">
          <label for="communication" class="skills">Communication</label><br>
          <input type="checkbox" id="teamwork" name="skills[]" value="teamwork">
          <label for="teamwork" class="skills">Teamwork</label><br>
          <input type="checkbox" id="problem_solving" name="skills[]" value="problem solving">
          <label for="problem_solving" class="skills">Problem solving</label><br>
          <input type="checkbox" id="time_management" name="skills[]" value="time management">
          <label for="time_management" class="skills">Time management</label><br>
          <input type="checkbox" id="adaptability" name="skills[]" value="adaptability">
          <label for="adaptability" class="skills">Adaptability</label><br><br>
          
          <label for="other_skills">Other skills</label><br><br>
          <textarea id="other_skills" name="other_skills" placeholder="Other skills"></textarea><br><br>
        </fieldset><br><br>
        
        <input type="submit" value="Submit">
      </form>
    </main>
<?php include '../include/footer.inc'; ?>
