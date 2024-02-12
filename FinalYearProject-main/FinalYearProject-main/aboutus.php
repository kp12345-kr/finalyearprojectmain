<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" 
  integrity="sha512-q8/ztQ/JBvGTTS5GK68zN5NHR1IL0Nl1Gjxauz95uWg10Fvoo5pUcbq6UzJ6WQFd8l12BYZ2Qxh1X4IBSNf+Wg==" 
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
  integrity="sha512-PBfXYb7wAbR6PpUdMgU6aGj6Ld/NQ2HznD3FjGMzZo7VvAc2Q0Lq3BFl0YzTymyBYRlOzW0m0m/dlBcbmZ94jA==" 
  crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="text-input"> 
                <textarea class="from-text" placeholder="Enter text"></textarea>
                <textarea class="from-to" placeholder="Translation" readonly disabled></textarea>
            </div>
            <ul class="controls">
                <li class="row from">
                    <div class="icons">
                        <i class="fas fa-volume-up"></i>
                        <i class="fas fa-copy"></i>
                    </div>
                    <select>
                        <option value="en-US">English</option>
                        <option value="hi-IN">Hindi</option>
                        <option value="ne-NP">Nepali</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>

