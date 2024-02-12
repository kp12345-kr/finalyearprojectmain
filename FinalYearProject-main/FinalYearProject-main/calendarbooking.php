<!DOCTYPE html>
<html>
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Portfolio Website </title>
    <link rel="stylesheet" type="text/css" href="StyleSheetCSS/MyHomepage.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    body {
        background-color: #f5f5f5;
    }
    
    h1 {
        color: #333;
        font-size: 36px;
        font-weight: bold;
        text-align: center;
        margin-top: 50px;
    }

    header {
       position: relative;
       width: 100%;
       top: 0;
       right: 0;
       z-index: 1000;
       display: flex;
       align-items: center;
       justify-content: space-between;
       background:  #171c24;
       padding: 22px 15%;
       border-bottom: 1px solid transparent;
       transition: all .45s ease;
    }

    .logo {
       color: var(--text-color);
       font-size: 35px;
       font-weight: 700;
       letter-spacing: 1px;
    }

    .navlist {
       display: flex;
    }

    .navlist a {
       color: var(--second-color);
       font-size: 17px;
       font-weight: 500;
       margin: 0 25px;
       transition: all .45s ease;
    }

    .navlist a:hover {
       color: var(--main-color);
    }

    .navlist a.active {
        color: var(--main-color);
    }
    /* Side navigation styling */
    .sidenav {
        height: 100%;
        width: 200px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1001;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 16px;
        color: #818181;
        display: block;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .main {
        margin-left: 200px; 
        padding: 0 20px;
    }

    .container {
        background-image: url("images1/flowerborder.png");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center top;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        background-color: white;
        padding: 80px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        max-width: 1200px;
        margin: 0 auto;
    }

    .map-container {
        width: 50%;
        height: 500px;
        margin-right: 20px;
    }

    form {
        width: 50%;
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 2px solid #ccc;
        border-radius: 10px;
    }

    label {
         display: block;
         margin-bottom: 10px;
         color: black;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 2px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #3e8e41;
    }

    .container1 {
         padding: 20px;
         width: 1000px; 
         height: 400px; 
         position: relative; 
    }
    
    .container1 h2 {
        color: black;
        margin-bottom: 20px; 
        margin-left: 290px; 
    }

    button {
        margin-left: 420px; 
        font-weight: bold;
        color: black;
        font: bold;
        width: 10%;
        height: 10%;
        border: 2px solid black;
    }

   </style>
</head>
<body>
   <header>
      <a href="#" class="logo">Hindu<span>i</span>sm.</a>
      <ul class="navlist">
         <li><a href="#home" class="active">Home</a></li>
         <li><a href="#about">About Hindiusm</a></li>
         <li><a href="#services">Services</a></li>
         <li><a href="#UK-Temples">UK-Temples</a></li>
         <li><a href="#contact">Contact Me</a></li>
         <li><a href="Puzzlegame.php">Puzzle Game</a></li>
      </ul>

      <div class="bx bx-menu" id="menu-icon">

      </div>
      <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </header>
    <div class="sidenav">
       <a href="imagegallery.php">Image Gallery</a>
       <a href="temple.php">Temple homepage</a>
    </div>

   <div class="main">
    <div class="container">
       <div class="container1">
          <h2 style="margin-bottom: 20px;">Opening times are...</h2>
          <h2>Between 9:00am &amp;</h2>
          <h2>15:30pm.</h2>
          <h2>Book a timeslot to visit the temple</h2>
          <h2>by clicking the button below!</h2>
          <button id="open-calendar">Open Calendar</button>
          <script>
              $(document).ready(function() {
                  $('#open-calendar').click(function() {
                      window.location.href = 'calendarevent/calender1.php';
                  });
               });
          </script>

        </div>
    </div>
   </div>
</body>
</html>