<?php defined('_BASEURL') or exit('No direct access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= _site_url() ?>static/assets/css/materialize.min.css">
  <script src="<?= _site_url() ?>static/assets/js/jquery-3.2.1.min.js"></script>
  <script src="<?= _site_url() ?>static/assets/js/materialize.min.js"></script>
</head>
<body>
  <center>
    <div class="section"></div>
    <h5 class="blue-text">Login to vote</h5>
    <div class="section"></div>

    <div class="container">
      <div class="z-depth-1 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
        <form action="" method="post" class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <input type="email" class="validate" name="nim" />
              <label for="nim">NIM</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input type="password" class="validate" name="password" />
              <label for="password">Password</label>
            </div>
            <label style="float: right;">
              <a href="<?= _site_url() ?>"><b>Halaman awal</b></a>
            </label>
          </div>

          <br />
          <center>
            <div class="row">
              <button type="submit" class="col s12 btn btn-large waves-effect blue" name="login">Login</button>
            </div>
          </center>
        </form>
      </div>
    </div>
  </center>

  <div class="section"></div>
  <div class="section"></div>
</body>

</html>