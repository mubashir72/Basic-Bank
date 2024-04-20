<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Basic Banking</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style></style>
  </head>

  <body>
    <nav>
      <li class="homelink"><a href="#">Basic Banking</a></li>
      <ul>
        <li><a href="transaction.php">Transactions</a></li>
        <li><a href="customerdata.php">Customers</a></li>
        <li><a href="contact.php">Contact us</a></li>
        <li><a href="about_us.php">About</a></li>
        <li><a href="#">Home</a></li>
      </ul>
    </nav>
    <main>
      <div class="container">
        <img src="img/floriane.jpg" width="100%" />
        <div class="top-left">Basic Banking</div>
        <div class="bottom-right">
          <a href="customerdata.php">View all Customers</a>
          <br />
          <a href="transaction.php">View all Transactions</a>
        </div>
      </div>
      <br /><br /><br /><br /><br />
    </main>
    <footer>
      <div class="footerLeft">
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
          <span class="copyright"
            >@Muhammad Mubashir. All rights reserved. 2024</span
          >
        </div>
      </div>
    </footer>
    <script
      src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
