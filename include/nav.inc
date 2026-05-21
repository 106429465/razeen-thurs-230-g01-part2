<a href="#main-dark" class="skip-link link-light" aria-label="Skip to main content">Skip to main content</a>
<a href="#main-light" class="skip-link link-dark" aria-label="Skip to main content">Skip to main content</a>

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
          <li<?php echo($current_page == 'home' ? ' class="nav_active"' :'');?>><a href="..#light">Home<img class="icon" src="../images/icons/home-icon-light.png" alt=""></a></li>
          <li<?php echo($current_page == 'jobs' ? ' class="nav_active"' :'');?>><a href="../jobs#light">Jobs<img class="icon" src="../images/icons/jobs-icon-light.png" alt=""></a></li>
          <li<?php echo($current_page == 'apply' ? ' class="nav_active"' :'');?>><a href="../apply#light">Apply<img class="icon" src="../images/icons/apply-icon-light.png" alt=""></a></li>
          <li<?php echo($current_page == 'about' ? ' class="nav_active"' :'');?>><a href="../about#light">About<img class="icon" src="../images/icons/about-icon-light.png" alt=""></a></li>
        </ul>
      </nav>
      <nav id="nav-dark" class='nav-style'>
        <ul>
          <li<?php echo($current_page == 'home' ? 'class="nav_active"' :'');?>><a href="..#dark">Home<img class="icon" src="../images/icons/home-icon-dark.png" alt=""></a></li>
          <li<?php echo($current_page == 'jobs' ? ' class="nav_active"' :'');?>><a href="../jobs#dark">Jobs<img class="icon" src="../images/icons/jobs-icon-dark.png" alt=""></a></li>
          <li<?php echo($current_page == 'apply' ? ' class="nav_active"' :'');?>><a href="../apply#dark">Apply<img class="icon" src="../images/icons/apply-icon-dark.png" alt=""></a></li>
          <li<?php echo($current_page == 'about' ? ' class="nav_active"' :'');?>><a href="../about#dark">About<img class="icon" src="../images/icons/about-icon-dark.png" alt=""></a></li>
        </ul>
      </nav>