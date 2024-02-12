<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleSheetCSS/stylesheet2.css">
    <style>
          .back-button {
              position: absolute;
              bottom: 10px;
              right: 10px;
              width: 220px;
              height: 100px;
              background-color: #eee;
              font-size: 18px;
              display: flex;
              justify-content: center;
              align-items: center;
              text-align: center;
              border: 8px solid black;
              box-sizing: border-box;
          }

          .back-button:hover {
              background-color: #ccc;
              color: #fff;
          }
   </style>
</head>
<body>
    <div class="boxcontainer">
       <div id="home" class="flex-column flex-center">
            <h1>Are you Ready?</h1>
            <a href="game.php" class="btn">Play</a>
            <a href="highscores.php"id="highscore-btn" class="btn">High Scores</a>
       </div>
       <a href="MyHomepage.php" class="back-button">Main homepage</a>
    </div>
</body>
</html>