<html>

  <?php include("src/header.php") ?>

  <body>

    <div class="">

      <div class="container">

        <form action="index.php" method="post">

          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" value="" placeholder="product name...">
          </div>

          <div class="form-group">
            <label for="price">price:</label>
            <input type="text" name="price" value="" placeholder="product price...">
          </div>

          <div class="form-group">
            <input type="textarea" name="description" value="" placeholder="short description...">
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="new" value="" checked>
            <label class="form-check-label" for="new">New</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="used" value="">
            <label class="form-check-label" for="used">Used</label>
          </div>

          <input class="btn btn-primary" type="submit" value="submit">

        </form>

      </div>

    </div>

  </body>
</html>
