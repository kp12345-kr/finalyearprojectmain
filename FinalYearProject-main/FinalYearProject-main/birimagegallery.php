<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Slider</title>
<style>
* {
   box-sizing: border-box;
   margin: 0;
  padding: 0;
}
body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgb(25,12,41);
}
.slider {
    position: relative;
    width: 60%;
    overflow: hidden;
}
.images {
    display: flex;
    width: 100%;
}
.images img {
    height: 400px;
    width: 100%;
    transition: all 0.15s ease;
}
.images input {
    display: none;
}
.dots {
    display: flex;
    justify-content: center;
    margin: 5px;
}
.dots label {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    border: solid #fff 3px;
    cursor: pointer;
    transition: all 0.15s ease;
    margin: 5px;
}
.dots label:hover {background: #fff;}
#img1:checked ~ .m1 {
    margin-left: 0;
}
#img2:checked ~ .m2 {
    margin-left: -100%;
}
#img3:checked ~ .m3 {
    margin-left: -200%;
}
#img4:checked ~ .m4 {
    margin-left: -300%;
}

.back-button {
  display: inline-block;
  padding: 20px 40px;
  background-color: #ccc;
  color: black;
  text-decoration: none;
  border-radius: 5px;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
}

.parent-element {
  position: relative; 
}

.back-button {
  position: absolute; 
  bottom: 10px; 
  right: 10px; 
}


.back-button:hover {
  background-color: #999;
  color: #fff;
}

</style>
</head>
<body>
    <div class="slider">
        <div class="images">
            <input type="radio" name="slide" id="img1" checked>
            <input type="radio" name="slide" id="img2">
            <input type="radio" name="slide" id="img3">
            <input type="radio" name="slide" id="img4">

            <img src="images1/Birminghamtemple1.jpg" class="m1" alt="img1">
            <img src="images1/Birminghamtemple2.jpg" class="m2" alt="img2">
            <img src="images1/Birminghamtemple3.jpg" class="m3" alt="img3">
            <img src="images1/Birminghamtemple4.jpg" class="m4" alt="img4">
        </div>
        <div class="dots">
            <label for="img1"></label>
            <label for="img2"></label>
            <label for="img3"></label>
            <label for="img4"></label>
        </div>
    </div>
    <a href="temple.php" class="back-button">Back</a>
</body>
</html>
