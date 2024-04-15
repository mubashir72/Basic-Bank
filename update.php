<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>hh</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php
  require 'connection.php';
  $Name = NULL;

  if (!empty($_GET["fromUser"]))
    $Name = $_GET["fromUser"];
  $from = '';
  $to = '';
  $amount = '';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from = $_POST["from"];
    $to = $_POST["to"];
    $amount = $_POST["amount"];
    check_name($from, $to, $amount);
  }
  ?>
  <nav>
    <li class="homelink"><a href="index.php">Basic Banking</a></li>
    <ul>
      <li><a href="contact.php">Contact us</a></li>
      <li><a href="about_us.php">About</a></li>
      <li><a href="index.php">Home</a></li>
    </ul>
  </nav>
  <main>
    <div id="transferMoney">
      <form action="<?php $_PHP_SELF ?>" method="post">
        <div class="mb-3">
          <label for="fromUsers" class="form-label">From User</label>
          <input type="text" class="form-control" id="From" name="from" value='<?php echo $Name; ?>' required />
        </div>
        <div class="mb-3">
          <label for="toUsers" class="form-label">To User</label>
          <input type="text" class="form-control" id="To" name="to" required />
          <div class="mb-3">
            <label for="transfer" class="form-label">Transfer</label>
            <br>
            <input type="number" id="Amt" name="amount" required>
          </div>
          <button type="submit" class="btn btn-primary" id="submit">Send</button>
      </form>
    </div>
  </main>
  <footer>
    <p>Author: Muhammad Mubashir<br>
      Copyright &copy2024 <br>
      <a href=" mailto:info@basicbank.com">info@basicbank.com</a>
    </p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>