<?php

require_once 'config/contents.php';
require_once 'config/users.php';
require_once 'app/app.php';

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    if (isset($page)):
    ?>
        <title><?= ucfirst($page); ?></title>

    <?php else: ?>
        <title>No title</title>
    <?php endif ?>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable = yes">

    <link rel="stylesheet" href="web/css/bootstrap.min.css">

    <!-- <script src="js/vendor/modernizr-2.6.2.min.js"></script> -->
    <!-- Importing jquery in case there are jq scripts in the middle of the page -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <!-- <script>window.jQuery || document.write('<script src="../js/dist/jq.min.js"><\/script>')</script> -->
</head>
<body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

<div class="row">
    <div class="container">
        <?php require_once "inc/$page.php"; ?>
    </div>
</div>

    <!-- Js section -->
    <!-- <script src="js/dist/all.js"></script> -->

    <!-- The following js is just for dev and needs to be removed when in prod. -->
    <!-- <script src="web/js/jquery.min.js"></script> -->
    <!-- <script src="web/js/bootstrap.min.js"></script> -->
    <!-- <script src=""></script> -->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        // e.src='//www.google-analytics.com/analytics.js';
        // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        // ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
</body>
</html>