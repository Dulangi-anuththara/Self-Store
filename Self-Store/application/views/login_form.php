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

<div class="col-md-6" style="width:800px; margin:0 auto;">
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