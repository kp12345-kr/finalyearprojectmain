<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="diwali.css">
</head>
<body>
  <div class="container">
       <div class="candle">
           <div class="flame"></div>
           <div class="wick"></div>
           <div class="wax"></div>
       </div>
       <div class="candle1">
           <div class="flame1"></div>
           <div class="wick1"></div>
           <div class="wax1"></div>
       </div>
       <div class="envelope-wrapper">
            <div class="envelope">
                <div class="letter">
                    <div class="text">
                       <a href="FestivalsDiwali.php" class="back-button">More on diwali!</a>
                       <a href="FestivalsHoli.php" class="back-button">More on holi!</a>
                    </div>
                </div>
            </div>
            <div class="heart"></div>
        </div>
    </div>
    <script>
        const envelope = document.querySelector('.envelope-wrapper');
        envelope.addEventListener('click', () => {
            envelope.classList.toggle('flap');
        });
    </script>
    
</body>
</html>