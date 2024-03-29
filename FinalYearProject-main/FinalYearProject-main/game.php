<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Page</title>
    <link rel="stylesheet" href="StyleSheetCSS/stylesheet2.css">
    <link rel="stylesheet" href="StyleSheetCSS/game.css">
</head>
<body>
    <div class="boxcontainer">
        <div id="game" class="justify-center flex-column">
             <div id="hud">
                <div class="hud-item">
                  <div class="hud-item">
                     <p id="progressText" class="hud-prefix">
                        Question
                     </p>
                     <div id="progressBar">
                        <div id="progressBarFull"></div>
                     </div>
                  </div>
                </div>
                <div id="huditem">
                    <p class="hud-prefix">
                        Score 
                    </p>
                    <h1 class="hud-main-text" id="score">
                        0
                    </h1>
                </div>
             </div>
             <h1 id="question">What is the answer to this question</h1>
             <div class="choice-container">
                <img id="question-image" src="" alt="">
                <p class="choice-prefix">A</p>
                <p class="choice-text" data-number="1">Choice</p>
             </div>
             <div class="choice-container">
                  <img id="question-image" src="" alt="">
                  <p class="choice-prefix">B</p>
                  <p class="choice-text" data-number="2">Choice 2</p>
             </div>
             <div class="choice-container">
                <img id="question-image" src="" alt="">
                <p class="choice-prefix">C</p>
                <p class="choice-text" data-number="3">Choice 3</p>
             </div>
             <div class="choice-container">
                <img id="question-image" src="" alt="">
                <p class="choice-prefix">D</p>
                <p class="choice-text" data-number="4">Choice 4</p>
             </div>
        </div>
    </div>
    <script src="Javascript/Questiongame.js"></script>
</body>
</html>