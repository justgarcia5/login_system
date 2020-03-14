<?php

  require 'header.php';

?>

<main>
  <div class="container">
    <section class="signup-section">
      <h1 class="signup-title">Sign Up</h1>

      <?php

        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyfields") {
            echo '<div class="alert alert-danger" role="alert">All of the fields are required</div>';
          }
          else if ($_GET["error"] == "invalidmailuid") {
            echo '<div class="alert alert-danger" role="alert">Invalid username and email</div>';
          }
          else if ($_GET["error"] == "invaliduid") {
            echo '<div class="alert alert-danger" role="alert">Invalid username</div>';
          }
          else if ($_GET["error"] == "invalidmail") {
            echo '<div class="alert alert-danger" role="alert">Invalid email</div>';
          }
          else if ($_GET["error"] == "passwordcheck") {
            echo '<div class="alert alert-danger" role="alert">Your passwords do not match</div>';
          }
          else if ($_GET["error"] == "usertaken") {
            echo '<div class="alert alert-danger" role="alert">Username is already taken</div>';
          }
        }
        else if (isset($_GET["signup"])) {
          if ($_GET["signup"] == "success") {
            echo '<div class="alert alert-success" role="alert">Signup success</div>';
          }
        }

      ?>

      <form action="includes/signup.inc.php" method="post" >
        <div class="form-group">
          <label class="sr-only" for="inlineFormInputGroup"></label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-user"></i></div>
            </div>
            <input class="form-control" type="text" name="uid" placeholder="Username">
          </div>
        </div>
        <div class="form-group">
          <label class="sr-only" for="inlineFormInputGroup"></label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-at"></i></div>
            </div>
            <input class="form-control" type="text" name="mail" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label class="sr-only" for="inlineFormInputGroup"></label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-unlock-alt"></i></div>
            </div>
            <input class="form-control" type="password" name="pwd" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label class="sr-only" for="inlineFormInputGroup"></label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">...</div>
            </div>
            <input class="form-control" type="password" name="pwd-repeat" placeholder="Re enter password">
          </div>
        </div>
        <button class="btn btn-success mt-4" type="submit" name="signup-submit"><i class="fa fa-user-plus"></i> Sign up</button>
      </form>
      <br>
    </section>
  </div>
</main>

<?php

  // require 'footer.php';

?>
