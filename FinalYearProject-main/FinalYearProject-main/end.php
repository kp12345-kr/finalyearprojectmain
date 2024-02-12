<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="StyleSheetCSS/stylesheet2.css">
</head>
<body>
    <div class="boxcontainer">
        <div id="end" class="flex-center flex-column">
            <h1 id="finalScore">0</h1>
            <form class="end-form-container">
                <h2 id="end-text">Enter your name below to save your score!</h2>
                <input type="text" name="name" id="username" placeholder="Enter your name">
                <button class="btn" id="saveScoreBtn" type="submit" onclick="saveHighScore(event)">Save</button>
            </form>
            <a href="game.php" class="btn">Play Again</a>
            <a href="Quiz.php" class="btn">Go Home</a>
        </div>
    </div>
    <script src="end.js"></script>
</body>
</html>