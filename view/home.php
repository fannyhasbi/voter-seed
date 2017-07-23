<?php defined('_BASEURL') or exit('No direct access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
  <title><?= _APPNAME ?></title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= _site_url() ?>static/assets/css/materialize.min.css">
  <script src="<?= _site_url() ?>static/assets/js/jquery-3.2.1.min.js"></script>
  <script src="<?= _site_url() ?>static/assets/js/materialize.min.js"></script>

  <style>
    html, body, header {
      height: 100%;
      width: 100%;
    }
  </style>
</head>
<body>
  <header class="valign-wrapper">
    <div class="row">
      <div class="col s12">
        <h1 class="center-align"><?= _APPNAME ?></h1>
        <a href="<?= _site_url('vote') ?>" class="waves-effect waves-light btn"><i class="material-icons left">library_books</i>VOTING</a>
        <a href="<?= _site_url('help') ?>" class="waves-effect waves-light btn"><i class="material-icons left">library_books</i>PANDUAN</a>
      </div>
    </div>
  </header>
</body>
</html>