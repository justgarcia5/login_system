<?php

  require 'header.php';

?>
  <main>
    <div class="container">
      <section class="signup-section">
        <h1 class="signup-title">Sign Up</h1>
        <form action="includes/signup.inc.php" method="post" >
          <div class="form-group">
            <input class="form-control" type="text" name="uid" placeholder="Username">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="mail" placeholder="Email">
          </div>
          <div class="form-group">
            <input class="form-control" type="password" name="pwd" placeholder="Password">
          </div>
          <div class="form-group">
            <input class="form-control" type="password" name="pwd-repeat" placeholder="Repeat password">
          </div>
          <button class="btn btn-success" type""submit" name="signup-submit">Signup</button>
        </form>
      </section>
    </div>
  </main>

<?php

  // require 'footer.php';

?>
