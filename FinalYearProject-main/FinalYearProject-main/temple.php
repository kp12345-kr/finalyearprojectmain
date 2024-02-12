<!DOCTYPE html>
<html>
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Portfolio Website </title>
    <link rel="stylesheet" type="text/css" href="StyleSheetCSS/MyHomepage.css">
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
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        background-color: white;
        padding: 20px;
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
       <a href="calendarbooking.php">Details about visiting</a>
    </div>

   <div class="main">
    <div class="container">
    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4840.318354656601!2d-1.1310572064209121!3d52.657102400000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487761a7a9e25121%3A0x3ca4f2dc0260d249!2sShree%20Swaminarayan%20Temple!5e0!3m2!1sen!2suk!4v1682602846237!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <form method="post" action="submitform.php">
      <h1>Contact Form:</h1>
       <label for="name">Name:</label>
       <input type="text" name="name" placeholder="Your Name">

       <label for="email">Email:</label>
       <input type="email" id="email" name="email" required>

       <label for="message">Message:</label>
       <textarea id="message" name="message" required minlength="10"></textarea>

       <input type="submit" value="Submit">
    </form>
    </div>
   </div>
</body>
</html>