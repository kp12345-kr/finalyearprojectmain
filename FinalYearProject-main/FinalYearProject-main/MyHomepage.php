<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Portfolio Website </title>
    <link rel="stylesheet" type="text/css" href="StyleSheetCSS/MyHomepage.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/27808bad2c.js" crossorigin="anonymous"></script>    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
         <li><a href="Quiz.php">Quiz Game</a></li>
         <li><a href="VideoCube.php">Watch video about temples</a></li>
      </ul>

      <div class="bx bx-menu" id="menu-icon">

      </div>
      <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </header>
    <script>
         $(document).ready(function() {
            $('.hamburger').click(function() {
              $('.navlist').toggle(); 
            });
         });
    </script>
    <section class="home" id="home">
       <div class="home-text">
          <div class="slide">
             <span class="one">Welcome</span>
             <span class="two">to</span>
          </div>
          <h1>Hinduism Website</h1>
          <h3>GO ON<span> CHECK IT OUT.</span></h3>
          <p>This website will show you what Hindiusm is about </br>
          and will allow you to learn new things.</p>
       </div>
       <div class="button">
          <a href="#" class="btn">Say Hello</a>
          <a href="#" class="btn2"><span><i class='bx bx-play'></i></span>Watch
          My Work</a>
       </div>
    </section>
    <section class="about" id="about">
       <div class="about-img">
          <img src="images1/hinduwallpaper.jpeg">
       </div>
       <div class="about-text">
          <h2>About <span>Me</span></h2>
          <h4>Hinduism is a diverse system of thought marked by a range of philosophies</h4>
          <p> Hinduism is the world's oldest religion in the manner of many scholars,
            with roots and customs going back more than 4,000 years. Today, with
            about 1.1 million followers, Hinduism is the third-largest religion behind
            Christianity and Islam. Approximately 95 percent of the world's Hindus live 
            in India. This is because, the religion has no specific founder; it is hard 
            to trace the origins and history. Hinduism is remarkable in regards to the
            substitute of not being a single religion but anthology of many traditions and
            philosophies. Hindus value many sacred writings as contrary to one holy book.
            Hinduism enfolds many religous ideas.</p>
            <a href="#" class="btn">More About</a>
       </div>
    </section>
    <section class="services" id="services">
      <div class="main-text">
         <p>What are the 3 major festivals in Hinduism</p>
         <h2><span>Hindu</span>Festivals</h2>
      </div>
      <div class="services-content">
        <div class="box">
            <div class="s-icons">
               <i class='bx bx-mobile-alt'></i>
            </div>
            <h3>Diwali</h3>
            <p>Diwali is one of the major religous festivals in Hinduism,
               Jainism, and Sikhism. The name is derived from the Sanskrit term
               dipavali, meaning "row of lights." The festival generally symbolizes
               the victory of light over darkness.</p>
            <a href="aboutDiwali.php" class="read">Read More</a>
        </div>
        <div class="box">
            <div class="s-icons">
               <i class='bx bx-code-alt'></i>
            </div>
            <h3>Hindu New Year</h3>
            <p>The celebration of the Hindu New Year is also related to agriculture. 
               It marks the end of one agricultural harvest season and the start of a 
               new one. The day is important for farmers, as it is the time for sowing 
               and reaping crops. The Hindu New Year is, therefore, a significant event 
               for both the religious and agricultural communities in India.</p>
            <a href="#" class="read">Read More</a>
         </div> 
         <div class="box">
            <div class="s-icons">
               <i class='bx bx-edit-alt'></i>
            </div>
            <h3>Holi</h3>
            <p>Holi is a popular and significant Hindu festival celebrated 
               as the Festival of Colours, Love and Spring. 
               It celebrates the eternal and divine love of the 
               god Radha and Krishna. </p>
            <a href="aboutDiwali.php" class="read">Read More</a>
         </div> 
      </div>
    </section>

    <section class="UK-Temples" id="UK-Temples">
      <div class="insidecontainer">
         <div class="cardbox">
            <div class="imgBx">
               <img src="images1/Loughborough-mandir.png">
   
               <h2>Loughborough Temple</h2>
               <p><br> This temple is 
                located in the heart of
                Loughborough town. Inside
                this maleficant temple, there 
                is a place of vibrant hindu worship;
                your mind becomes divine to peace
                and companion. 
               </p>
            </div>
         </div>
         <div class="cardbox">
            <div class="imgBx">
               <img src="images1/Leicester-mandir.jpeg">
               <h2>Leicester Temple</h2>
               <p><br> This temple is 
                located in the heart of
                Leicester city. Inside
                this maleficant temple, there 
                is a place of vibrant hindu worship;
                your mind becomes divine to peace
                and companion. 
               </p>
            </div>
         </div>
         <div class="cardbox">
            <div class="imgBx">
               <img src="images1/Wellingborough-mandir.jpeg">
               <h2>Wellingborough Temple</h2>
               <p><br> This temple is 
                located in the heart of
                Wellingborough town. Inside
                this maleficant temple, there 
                is a place of vibrant hindu worship;
                your mind becomes divine to peace
                and companion. 
               </p>
            </div>
         </div>
         <div class="cardbox">
            <div class="imgBx">
               <img src="images1/Birmingham-mandir.jpg" width="70%" height="auto">
               <h2>Birmingham Temple</h2>
               <p><br> This temple is 
                located in the heart of
                Birmingham city. Inside
                this maleficant temple, there 
                is a place of vibrant hindu worship;
                your mind becomes divine to peace
                and companion. 
               </p>
               <button onclick="window.location.href='birtemple.php'">View More</button>
            </div>
         </div>
         <div class="cardbox">
            <div class="imgBx">
               <img src="images1/Preston-mandir.jpeg">
               <h2>Preston Temple</h2>
               <p><br> This temple is 
                located in the heart of
                Preston town. Inside
                this maleficant temple, there 
                is a place of vibrant hindu worship;
                your mind becomes divine to peace
                and companion. 
               </p>
            </div>
         </div>
         <div class="cardbox">
            <div class="imgBx">
               <img src="images1/Manchester-mandir.jpg">
               <h2>Manchester Temple</h2>
               <p><br> This temple is 
                located in the heart of
                Manchester city. Inside
                this maleficant temple, there 
                is a place of vibrant hindu worship;
                your mind becomes divine to peace
                and companion. 
               </p>
            </div>
         </div>
         <div class="cardbox">
            <div class="imgBx">
               <img src="images1/ShreeSwaminarayan-temple.jpg">
               <h2>Shree Swaminarayan Temple</h2>
               <p><br> This temple is 
                located in the heart of
                Leicester city. Inside
                this maleficant temple, there 
                is a place of vibrant hindu worship;
                your mind becomes divine to peace
                and companion. 
               </p>
               <button onclick="window.location.href='temple.php'">View More</button>
            </div>
         </div>
       </div>
    </section>
    <section class="contact" id="contact">
       <div class="contact-text">
          <h2>Leave a <span>message for me!</span></h2>
          <h4>Any feedback about my wesbite will be great.</h4>
          <p> I would love to get feedback about anything that you
           liked or disliked about the website </p>
          <form action="PHP/calender.php" method="post">
             <button type="submit" name="button">Add Events to the calendar</button>
          </form>
       </div>
       <div class="contact-icons">
           <box-icon type='logo' name='facebook-circle'></box-icon>
           <box-icon type='logo' name='twitter'></box-icon>
           <box-icon name='instagram-alt' type='logo' ></box-icon>
           <box-icon name='youtube' type='logo' ></box-icon>
       </div>
       <div class="contact-form">
         <form action="/submit-form" method="post">
             <input type="text" placeholder="Your Name" required>
             <input type="email" placeholder="Your Email Address" required>
             <input type="tel" placeholder="Your Mobile Number" required>
             <textarea name="message" id="" cols="35" rows="10" placeholder="How Can I Help You" required></textarea>
             <input type="submit" value="Send Message" class="submit-btn" required>
        </form>
       </div>
    </section>
    <footer class="footer">
    <div class="inside-footer">
          <ul class="socialmedia-links">
            <li class="socialmedia-items"><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></a></i></li>
            <li class="socialmedia-items"><a href="#"><i class="fa-brands fa-square-twitter"></a></i></li>
            <li class="socialmedia-items"><a href="#"><i class="fa-brands fa-instagram"></a></i></li>
            <li class="socialmedia-items"><a href="#"><i class="fa-brands fa-square-tumblr"></a></i></li>
          </ul>
    </div>
    <div class="outer-footer">
         <p>Copyright &copy; Web Design Pro. All Rights Reserved</p>
    </div>
  </footer>
    <script>
        hamburger = document.querySelector(".hamburger");
        hamburger.onclick = function() {
            navBar = document.querySelector(".navlist");
            navBar.classList.toggle("active");
        }
    </script>
</body>
</html>
