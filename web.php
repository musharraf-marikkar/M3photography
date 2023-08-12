<?php

$host="localhost";
$user="root";
$password="root";
$db="m3";
$con=new mysqli($host,$user,$password,$db);
$error=null;

if($con===false)
{
    die("Connection Error");
}
else{
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];           
        
        $sql="INSERT INTO contact(name,email) VALUES('$name','$email')";
        $con->query($sql);
        $error="<p style='color:green'>Message Sent</p>";
    }
        
}    
?>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>M3 Photography</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <header>
    <div class="logo">
      <img src="images/m3logo.png" alt="M3 Logo" class="logo-image">
    </div>
    <nav>
      <ul>
        <li><a href="#home" class="nav-link">Home</a></li>
		<li><a href="#about" class="nav-link">About</a></li>
        <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
        <li><a href="#contact" class="nav-link">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home" class="section fade-in">
      <h1>M3 Photography</h1>
      <p>Welcome to my M3 photography portfolio. Explore the beauty of the world through my lens.</p>
	    <section id="about" class="section fade-in">
    <h2>About</h2>
    <p>Welcome to my M3 photography portfolio! I am Musharraf Marikkar and I am passionate about capturing moments and expressing my creativity through the lens of my camera. With a focus on high quality photography, I strive to showcase the beauty, elegance, and precision of this art form. Each image I capture tells a unique story, blending technical skill with artistic vision. Through my portfolio, I invite you to explore the world as I see it, immersing yourself in the captivating details and striking compositions of my photography. Join me on this visual journey and let's celebrate the beauty of the world together.</p>
  </section>
      <img src="images/home1.jpg" alt="home1" class="landscape-image fade-in">
    </section>

    <section id="portfolio" class="section fade-in">
      <h2>Portfolio</h2>
      <div class="gallery">
        <img src="images/img1.jpg" alt="Image 1" class="portfolio-image">
        <img src="images/img2.jpg" alt="Image 2" class="portfolio-image">
        <img src="images/img3.jpg" alt="Image 3" class="portfolio-image">
		<img src="images/img4.jpg" alt="Image 4" class="portfolio-image">
		<img src="images/img5.jpg" alt="Image 5" class="portfolio-image">
		<img src="images/img6.jpg" alt="Image 6" class="portfolio-image">
      </div>
    </section>
	
<div id="slider">
    <img src="images/img7.jpg" alt="Image 7" class="slider-image">
    <img src="images/img8.jpg" alt="Image 8" class="slider-image">
    <img src="images/img9.jpg" alt="Image 9" class="slider-image">
    <img src="images/img10.jpg" alt="Image 10" class="slider-image">
  </div>
  </main>
<button id="toggleButton">Achievements</button>
  
  <div id="additionalInfo" style="display: none;">
    <h3>Additional Information</h3>
    <p>This is some additional information about my projects & achievements.</p>
	<ul>
      <li>My photographs were featured in the XYZ Gallery's annual photography exhibition, showcasing my unique perspective on urban landscapes</li>
      <li>My work was published in National Geographic's special edition book on wildlife photography, showcasing my ability to capture the beauty of nature</li>
      <li>I was honored with the Best Landscape Photographer award at the XYZ Photography Awards, recognizing my skill in capturing breathtaking natural landscapes</li>
      <li>I have a dedicated online following of over 100,000 photography enthusiasts on Instagram, who appreciate my creative approach and storytelling through images</li>
    </ul>
  </div>
  <h3>For reservations or bookings: </h3>




  <form id="contact-form" method="post" action="web.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
    
            <button type="submit" name="send">Submit</button>
    </form>




<aside>
  <section id="related-links" class="section fade-in">
    <h2>Related Links</h2>
    <ul>
      <li><a href="https://photographylife.com/photography-tips-for-beginners">Photography Tips</a></li>
      <li><a href="https://photographylife.com/camera-equipment-for-beginners">Camera Gear Recommendations</a></li>
      <li><a href="https://www.masterclass.com/articles/how-to-edit-photos">Editing Techniques</a></li>
      <li><a href="https://www.nationalgeographic.com/expeditions/interests/photography/">Photography Workshops</a></li>
    </ul>
  </section>


</aside>

  <footer>
    <section id="contact" class="section fade-in">
      <h2>Follow Me</h2>
      <div class="social-media">
        <ul>
          <li>
            <a href="https://www.facebook.com">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
        </ul>
      </div>
      <h2>Contact Me</h2>
      <div class="contact-info">
        <p>Email: m3photography@gmail.com</p>
        <p>Phone: +94 77 123 4567</p>
      </div>
    </section>
  </footer>
  
<script src="script.js"></script>
</body>
</html>