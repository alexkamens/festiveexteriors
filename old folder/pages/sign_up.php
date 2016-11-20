<?php include "../parts/header.php" ?>
<div class="container">
  <?php
    if (!empty($_SESSION['errMes'])) {
        echo "<h4>Passwords don't match</h4>";
        unset($_SESSION['errMes']);
    }
    if (!empty($_SESSION['passMes'])) {
        echo "<h4>Password too short</h4>";
        unset($_SESSION['passMes']);
    }
    if (!empty($_SESSION['emailMes'])) {
        echo "<h4>Use legitimate email</h4>";
        unset($_SESSION['emailMes']);
    }
   ?>
  <form class="form-horizontal" action="../crud/create_user.php" method="post" id="usrmkr">
    <fieldset>
      <legend>Sign up here</legend>
      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">UserName</label>
        <div class="col-lg-10">
          <input type="test" class="form-control" id="inputName" name="inputName" placeholder="Please use your full name">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="ex) A@b.com">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-10">
          <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="ex) AbEl97T!">
        </div>
      </div>
      <div class="form-group">
        <label for="inputCPassword" class="col-lg-2 control-label">Confirm Password</label>
        <div class="col-lg-10">
          <input type="password" class="form-control" id="inputCPassword" name="inputCPassword" placeholder="ex) AbEl97T">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <button type="reset" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-primary" form="usrmkr" name="submit">Submit</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>
<?php include "../parts/footer.php" ?>
