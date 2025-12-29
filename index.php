<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTech IT Solution</title>
    <link rel="shortcut icon" href="images/virtual.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>


<body>

    <?php
        include "header.php";
    ?>

    <section class="hero border" id="hero">
        <div class="hero_container">
            <h1 class="main_hero">Tech Problems? </h1>
            <h1 class="second_hero">I've Got You Covered.</h1>

            <p>Whether it's a slow PC, Wi-fi issues, software error or setting up new gear, We provide honest, affordable and stress-free IT suport</p>

            <a href="">Call a Tech</a>
        </div>
        <img src="images/techsupport.png" alt="">
    </section>

    <section class="gallery border" id="gallery">
         
        <div class="gallery_container">
           <h1 class="border">Services</h1>

            <div class="gallery_images">
                <div class="services-tile">
                    <img src="gallery/motherboard.png" alt="">
                    <h4>Computer and Laptop Support</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                </div>
                <div class="services-tile">
                    <img src="gallery/network.png" alt="">
                    <h4>Network Troubleshooting</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                </div>
                <div class="services-tile">
                    <img src="gallery/ssd.png" alt="">
                    <h4>Hardware Installion and Upgrade</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                </div>
                <div class="services-tile">
                    <img src="gallery/windows.png" alt="">
                    <h4>Operating System Installation</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                </div>
                <div class="services-tile">
                    <img src="gallery/gallery_5.jpg" alt="">
                    <h4>Virus and Malware Removal</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                </div>
                <div class="services-tile">
                    <img src="gallery/gallery_6.jpg" alt="">
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                </div>
            </div> <!-- end gallery images -->
        </div> <!-- end gallery container -->
    </section>

    <section class="about border" id="about" >
        <div class="about-container" >
            <div class="aboutUs-title">
                <h1 >About Us</h1>
            </div>
            <section class="aboutUs">
                <img src="gallery/AboutJBTech.png" alt="about photo">
                <div class="whyChooseUs">
                    <h3>Why People Choose Us</h3>
                   <ul>
                        <li>Clear, honest communication</li>
                        <li>affordable rates with no surprises</li>
                        <li>Mobile Help - we come to you</li>
                        <li>Practical Solutions, not tech talk</li>
                        <li>Experienced support for Windows, macOS networks and mobile devices</li>
                    </ul>    
                    <p class="phrase">Technology shouldn't be stressful - let us take care of it for you</p>
             
                </div> <!-- End whyChooseUs -->
            </section>

            
            
        </div>
    </section>

    <section class="contact-us border" id="contactUs">
        <div class="contact-us-container">
            
            <div class="contact-form-container" >
                <h2 class="contact-title">Contact Us</h2>
                <form class="contact-form">
                    <div class="form-input-container">
                        <label for="fname">Name</label><br>
                        <input type="text" id="fname" name="fname" class="form-input" require>
                    </div>
                    <div class="form-input-container">
                        <label for="lname">Email</label><br>
                        <input type="email" id="lname" name="lname" class="form-input" require>
            
                    </div>
                    <div class="form-input-container">
                        <label for="messsagebox">Type your message</label>
                        <textarea name="messagebox" id="messagebox" rows="20" cols="50" class="messageBox form-input" require></textarea>
                    </div>
                </form>
                <button type="submit" class="contactSubmit ">Submit</button>
            </div>
        </div>
    </section>

<?php
    include "footer.php";
?>


<script src="script.js" defer></script>

</body>
</html>