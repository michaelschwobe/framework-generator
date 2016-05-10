<?php

require_once '_includes/app-functions.php';

?><!doctype html>
<html dir="ltr" lang="en-US" class="no-js">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?php echo $page_title; ?></title>

  <link rel="stylesheet" href="css/app-styles.css" />
  <link rel="stylesheet" href="css/main.css" />
</head>
<body>
  <button id="app-toggle" class="app-toggle"><span></span></button>
  <div id="app-menu" class="app-menu">
    <?php require_once '_includes/app-menu.php'; ?>
  </div>
  <div class="app-content">


