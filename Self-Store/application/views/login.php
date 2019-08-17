<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Form Controls - Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet"></head>
<body>
<?php
if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>

<div class="col-md-6" style="width:800px; margin:0 auto;padding: 70px 0;">
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Login</h5>
        <?php echo form_open('user_authentication/user_login_process'); ?>
          <?php
            echo "<div class='error_msg'>";
            if (isset($error_message)) {
              echo $error_message;
            }
            echo validation_errors();
            echo "</div>";
          ?>
                  <div class="position-relative form-group">
                    <label for="exampleEmail" class="">Username</label>
                    <input name="username" id="exampleEmail" placeholder="Username" type="text" class="form-control" required>
                  </div>
                  <div class="position-relative form-group">
                    <label for="examplePassword" class="">Password</label>
                    <input name="password" id="examplePassword" placeholder="password" type="password" class="form-control" required>
                  </div>
                  <button class="mt-1 btn btn-primary">Submit</button>
          <?php echo form_close(); ?>
        </div>
    </div>
</div>
        
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/scripts/main.js"></script></body>
</html>
