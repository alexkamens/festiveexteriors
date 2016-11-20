<?php include "../parts/header.php" ?>
<div class="container">
  <form class="form-horizontal" action="../parts/loggin.php" method="post" id="login">
    <fieldset>
      <legend>Sign in here</legend>
      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-10">
          <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <button type="reset" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-primary" form="login" name="submit">Submit</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>
<?php include "../parts/footer.php" ?>
