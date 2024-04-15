<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Basic Banking - Transaction</title>
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
    <li class="homelink"><a href="index.html">Basic Banking</a></li>
    <ul>
      <li><a href="#">Transactions</a></li>
      <li><a href="customerdata.php">Customers</a></li>
      <li><a href="contact.php">Contact us</a></li>
      <li><a href="about_us.php">About</a></li>
      <li><a href="index.html">Home</a></li>
    </ul>
  </nav>
  <main>
    <div id="viewTable">
      <h1>Transaction Data</h1>
      <br>
      <table class="table table-striped"">
          <tr>
            <th>Transaction ID</th>
            <th>From User</th>
            <th>To User</th>
            <th>Amount</th>
          </tr>
          <?php
          $conn = mysqli_connect("localhost", "root", "", "basic_bank");
          if ($conn->connect_error) {
            die("Connection failed:" . $conn->connect_error);
          }
          $sql = "SELECT tran_id, fromuser, touser, amount from transaction";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "
          <tr>
            <td>" . $row["tran_id"] . "</td>
            <td>" . $row["fromuser"] . "</td>
            <td>" . $row["touser"] . "</td>
            <td>" . $row["amount"] . "</td>
          </tr>
          ";
            }
            echo " </table>";
          } else {
            echo "0 results";
          }
          $conn->close(); ?>
          <br><br><br> 
      </div>
      
    </main>
    <footer>
    <p>Author: Muhammad Mubashir<br>
      Copyright &copy2024 <br>
      <a href=" mailto:info@basicbank.com">info@basicbank.com</a>
        </p>
        </footer>
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
          </script>
        <script src="js/main.js"></script>
</body>

</html>