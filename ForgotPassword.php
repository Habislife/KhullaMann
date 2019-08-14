<?php
if (isset($POST['submit'])) {


}
?>

  <!DOCTYPE html>
  <html>
  <head>
    <title>Reset Passwoord</title>
  </head>
  <body>
  <div class="reset-password">
      <h1>Reset your password</h1>
      <!-- <p>Now we send an email where you can find instructions to reset your password</p> -->

      <form action= method="POST">
          <input type="email" name="email" placeholder="Enter email" value="" id="email" autocomplete="on"><br><br>
          <button type="submit" name="submit" class="reset-password">Reset Password</button>
      </form>
    </div>
  </body>
  </html>
  	

