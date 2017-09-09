<?php
    namespace AppleOfAries;

    if(!isset($_SESSION['eris:session_id']))
    {
        session_start();
    }
    require_once('class.aoa-config.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo Config::SITE_TITLE; ?></title>

        <!-- Sec: Bootstrap Inclusion -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
              integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
                integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
                integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <!-- End: Bootstrap Inclusion -->

        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
            <div class="header-bg"></div>
            <div class="header container">
                <?php include("control-bar.php"); ?>
                <div class="nav-container">
                    <?php require_once('navigation.php'); ?>
                </div>
                <div class="banner-image-container center">
                    <div class="banner-content">
                        <h2 style="color: white;">Apple of Eris</h2>
                        <div style="width: 100%; height: 2px; background: #fff;"><br /></div>
                        <h2 class="banner-header">Chaos Services</h2>
                        <p>iNBETWEEN Enterprises presents, Apple of Eris, to suit all your malicious tendencies.</p>
                    </div>
                    <img id="banner-image" class="banner-image" src="img/banner-image.jpg" />
                </div>
            </div>
