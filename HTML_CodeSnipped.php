<?php

$page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"index")+1);
$pagename = str_replace(".php", '', $page);


$head= '
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta property="og:title" content="OVSRS">
  <meta property="og:type" content="APP">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
  
  <title>OVSRS</title>
  
  <link rel="stylesheet" href="Main.css" media="screen">
  <link rel="stylesheet" href="'."$pagename".'.css" media="screen">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="Main.js" defer=""></script>
</head>
';

$header='
<header class="u-clearfix u-header u-header" id="sec-b93d">
  <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 500;">
            <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-01d8"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-01d8" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect></g></svg>
            </a>
          </div>

          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1">
              <li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="index.php" style="padding: 10px 20px;background-color: rgb(252, 185, 0) !important;">Home</a></li>
              <li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="Order.php" style="padding: 10px 20px;">Order</a></li>
              <li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="Cart.php" style="padding: 10px 20px;">Cart</a></li>
              <li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="login.php" style="padding: 10px 20px;">Login</a></li>
            </ul>
          </div>

          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Home</a></li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Order.php">Order</a></li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Cart.php">Cart</a></li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="login.php">Login</a></li>
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>

        </nav>
        <p class="u-text u-text-1" style="width: fit-content !important;">OVSRS</p>
      </div>
</header>
';






?>