<?php
include "../parts/header.php";
include "../parts/session.php";
SessionClient::checkIfLoggedIn();
?>

<form class="form-horizontal" action="checkout.php" method="post" id="purchase" enctype="multipart/form-data">
  <fieldset>
    <hr>
    <h2>Please specify what you would like to have done with your space</h2>
    <div class="form-group">
      <label for="lights" class="col-lg-2 control-label">Lights</label>
      <div class="col-lg-10">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="lights" value="lights"> Checkbox
          </label>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="largeFigure" class="col-lg-2 control-label">Large Figures</label>
      <div class="col-lg-10">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="largeFigure" value="largeFigure"> Checkbox
          </label>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="roofWork" class="col-lg-2 control-label">Roof Work</label>
      <div class="col-lg-10">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="roofWork" value="roofWork"> Checkbox
          </label>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <label>Please provide a picture of the space you would like to have decorated </label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary" form="purchase" name="submit">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

<?php include "../parts/footer.php" ?>
