<?php 
require_once 'php/init.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Online shop</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Online shop</a>
    </nav>
    <div class="container mt-5">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="/online-shop/list-items.php">Item list</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/online-shop/add-item.php">Add item</a>
            </li>
        </ul>
      <h3 class='mb-4'>Add Item</h3>
      <?php insertItem() ?>
      <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <div class="form-group">
          <label for="name">Item name</label>
          <input class="form-control" type="text" name="name" id="" placeholder="Item name" required>
        </div>
        <div class="form-group">
          <label for="price">Item price</label>
          <input class="form-control" type="number" name="price" id="" placeholder="Price" required>
        </div>
        <button class="btn btn-primary" type="submit">Add item</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>