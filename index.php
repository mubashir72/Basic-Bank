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
  <nav>
    <li class="homelink"><a href="#">Basic Banking</a></li>
    <ul>
      <li><a href="contact.php">Contact us</a></li>
      <li><a href="about_us.php">About</a></li>
      <li><a href="#">Home</a></li>
    </ul>
  </nav>
  <main>
    <div class="container">
      <img src="img/floriane.jpg" width="100%">
      <div class="top-left">Basic Banking</div>
      <div class="bottom-right"><a href="#viewTable">View all Customers</a>
        <br>
        <a href="transaction.php">View all Transactions</a>
      </div>
    </div>
    <br><br><br><br><br>
    <div id="viewTable">
      <h1>Cutomer Data</h1>
      <br>
      <table class="table table-striped"">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Current Balance</th>
          </tr>
          <?php
          $conn = mysqli_connect("localhost", "root", "", "basic_bank");

          if ($conn->connect_error) {
            die("Connection failed:" . $conn->connect_error);
          }
          $sql = "SELECT user_id, user_name, user_email, amount from user_data";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "
          <tr>
            <td>" . $row["user_id"] . "</td>
            <td><a href='update.php?ui=$row[user_id]&ucb=$row[amount]&fromUser=$row[user_name] '>" . $row["user_name"] . "</a></td>
            <td>" . $row["user_email"] . "</td>
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
  <a href=" mailto:info@basicbank.com">info@basicbank.com</a></p>
        </footer>
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
          </script>
</body>

</html>