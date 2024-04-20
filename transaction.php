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
    <li class="homelink"><a href="index.php">Basic Banking</a></li>
    <ul>
      <li><a href="#">Transactions</a></li>
      <li><a href="customerdata.php">Customers</a></li>
      <li><a href="contact.php">Contact us</a></li>
      <li><a href="about_us.php">About</a></li>
      <li><a href="index.php">Home</a></li>
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
      <div class=" footerLeft">
        <div class="footerMenu">
          <h1 class="fMenuTitle">About Us</h1>
          <ul class="fList">
            <li class="fListItem">Company</li>
            <li class="fListItem">Contact</li>
            <li class="fListItem">Careers</li>
            <li class="fListItem">Affiliates</li>
            <li class="fListItem">Scores</li>
          </ul>
        </div>
        <div class="footerMenu">
          <h1 class="fMenuTitle">Usefull Links</h1>
          <ul class="fList">
            <li class="fListItem">Support</li>
            <li class="fListItem">Refund</li>
            <li class="fListItem">FAQ</li>
            <li class="fListItem">Feedback</li>
            <li class="fListItem">Stories</li>
          </ul>
        </div>
    </div>
    <div class="footerRight">
      <div class="footerRightMenu">
        <h1 class="fMenuTitle">Subscribe to our newsletter.</h1>
        <div class="fMail">
          <input type="text" placeholder="your@email.com" class="fInput" />
          <button class="fButton">Join!</button>
        </div>
      </div>
      <div class="footerRightMenu">
        <h1 class="fMenuTitle">Follow Us</h1>
        <div class="fIcons">
          <img src="./img/facebook.png" alt="" class="fIcon" />
          <img src="./img/twitter.png" alt="" class="fIcon" />
          <img src="./img/instagram.png" alt="" class="fIcon" />
          <img src="./img/whatsapp.png" alt="" class="fIcon" />
        </div>
      </div>
      <div class="footerRightMenu">
        <span class="copyright">@Muhammad Mubashir. All rights reserved. 2024</span>
      </div>
    </div>
    </footer>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      </script>
    <script src="js/main.js"></script>
</body>

</html>