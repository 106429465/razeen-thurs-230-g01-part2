<!DOCTYPE html>
<html lang="en-au">

<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Description">
    <meta name="keywords" content="Keywords">
    <meta name="author" content="HTMW Group">

    <meta property="og:title" content="HealThML">
    <meta property="og:description"
          content="HealThML is the custom HTML and CSS project designed by Tyler Stokes, Zain Khan, Jack Bailey, and Marley Brown">
    <meta property="og:image" content="/images/logo_full.png">
    <meta property="og:image:width" content="639">
    <meta property="og:image:height" content="222">
    <meta property="og:type" content="website">

    <?php echo("<title>HealThML $current_page </title>");?>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <?php
    if ($current_page == 'Home') {
        $stylesheet = '../styles/index_style.css';
    } elseif ($current_page == 'Jobs') {
        $stylesheet = '../styles/jobs_style.css';
    } elseif ($current_page == 'Apply') {
        $stylesheet = '../styles/apply_style.css';
    } elseif ($current_page == 'About') {
        $stylesheet = '../styles/about_style.css';
    } else {
          $stylesheet = '../styles/style.css';
    }
    echo ("<link rel='stylesheet' type='text/css' href=$stylesheet>");
    ?>

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
                <li<?php echo($current_page == 'Home' ? ' class="nav_active"' :'');?>><a href="..#light">Home<img class="icon" src="../images/icons/home-icon-light.png" alt=""></a></li>
                <li<?php echo($current_page == 'Jobs' ? ' class="nav_active"' :'');?>><a href="../jobs#light">Jobs<img class="icon" src="../images/icons/jobs-icon-light.png" alt=""></a></li>
                <li<?php echo($current_page == 'Apply' ? ' class="nav_active"' :'');?>><a href="../apply#light">Apply<img class="icon" src="../images/icons/apply-icon-light.png" alt=""></a></li>
                <li<?php echo($current_page == 'About' ? ' class="nav_active"' :'');?>><a href="../about#light">About<img class="icon" src="../images/icons/about-icon-light.png" alt=""></a></li>
            </ul>
        </nav>
        <nav id="nav-dark" class='nav-style'>
            <ul>
                <li<?php echo($current_page == 'Home' ? ' class="nav_active"' :'');?>><a href="..#dark">Home<img class="icon" src="../images/icons/home-icon-dark.png" alt=""></a></li>
                <li<?php echo($current_page == 'Jobs' ? ' class="nav_active"' :'');?>><a href="../jobs#dark">Jobs<img class="icon" src="../images/icons/jobs-icon-dark.png" alt=""></a></li>
                <li<?php echo($current_page == 'Apply' ? ' class="nav_active"' :'');?>><a href="../apply#dark">Apply<img class="icon" src="../images/icons/apply-icon-dark.png" alt=""></a></li>
                <li<?php echo($current_page == 'About' ? ' class="nav_active"' :'');?>><a href="../about#dark">About<img class="icon" src="../images/icons/about-icon-dark.png" alt=""></a></li>
            </ul>
        </nav>

    </header>
    <hr>



