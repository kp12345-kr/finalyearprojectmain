<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Game</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet1.css">
    <link rel="stylesheet" type="text/css" href="StyleSheetCSS/MyHomepage.css">
</head>
<body>
    <header>
      <a href="#" class="logo">Hindu<span>i</span>sm.</a>
      <ul class="navlist">
         <li><a href="MyHomepage.php">Home</a></li>
         <li><a href="#about">About Hindiusm</a></li>
         <li><a href="#services">Services</a></li>
         <li><a href="#UK-Temples">UK-Temples</a></li>
         <li><a href="#contact">Contact Me</a></li>
         <li><a href="Puzzlegame.php">Puzzle Game</a></li>
      </ul>

      <div class="bx bx-menu" id="menu-icon">

      </div>
    </header>
    <div class="container">
      <ul class="cards">
        <li class="card">
            <div class="view front-view"></div>
            <div class="view back-view">
                <img src="images/img-1.png" alt="card-image">
            </div>
        </li>
        <li class="card">
          <div class="view front-view"></div>
          <div class="view back-view">
              <img src="images/img-2.png" alt="card-image">
          </div>
        </li>
        <li class="card">
          <div class="view front-view"></div>
          <div class="view back-view">
              <img src="images/img-3.png" alt="card-image">
          </div>
        </li>
        <li class="card">
          <div class="view front-view"></div>
          <div class="view back-view">
              <img src="images/img-4.png" alt="card-image">
          </div>
        </li>
        <li class="card">
          <div class="view front-view"></div>
          <div class="view back-view">
              <img src="images/img-5.png" alt="card-image">
          </div>
        </li>
        <li class="card">
          <div class="view front-view"></div>
          <div class="view back-view">
              <img src="images/img-6.png" alt="card-image">
          </div>
        </li>
        <li class="card">
          <div class="view front-view"></div>
          <div class="view back-view">
              <img src="images/img-7.png" alt="card-image">
          </div>
        </li>
        <li class="card">
          <div class="view front-view"></div>
          <div class="view back-view">
              <img src="images/img-8.png" alt="card-image">
          </div>
        </li>
        <li class="card">
          <div class="view front-view"></div>
          <div class="view back-view">
              <img src="images/img-1.png" alt="card-image">
          </div>
      </li>
      <li class="card">
        <div class="view front-view"></div>
        <div class="view back-view">
            <img src="images/img-2.png" alt="card-image">
        </div>
      </li>
      <li class="card">
        <div class="view front-view"></div>
        <div class="view back-view">
            <img src="images/img-3.png" alt="card-image">
        </div>
      </li>
      <li class="card">
        <div class="view front-view"></div>
        <div class="view back-view">
            <img src="images/img-4.png" alt="card-image">
        </div>
      </li>
      <li class="card">
        <div class="view front-view"></div>
        <div class="view back-view">
            <img src="images/img-5.png" alt="card-image">
        </div>
      </li>
      <li class="card">
        <div class="view front-view"></div>
        <div class="view back-view">
            <img src="images/img-6.png" alt="card-image">
        </div>
      </li>
      <li class="card">
        <div class="view front-view"></div>
        <div class="view back-view">
            <img src="images/img-7.png" alt="card-image">
        </div>
      </li>
      <li class="card">
        <div class="view front-view"></div>
        <div class="view back-view">
            <img src="images/img-8.png" alt="card-image">
        </div>
      </li>
    </ul>
  </div>
  <div class="popup">
   <div class="popup-container">
     <h1>Instructions</h1>
     <p>The aim of the game is to match two images together
        as shown in the example below:
     </p>
     <img src="images/img-4.png" style="display: block; margin: 0 auto 10px;">
     <img src="images/img-4.png" style="display: block; margin: 10px auto 0;">
     <div class="popup-close">&times;</div>
   </div>
  </div>

  <button id="open-popup">See Instructions</button>
  <script src="Javascript/popupMessage.js"></script>
  <script src="Javascript/Myscritpt.js"></script>
</body>