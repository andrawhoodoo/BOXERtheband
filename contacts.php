<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="resources/css/style.css">
		<link rel="stylesheet" type="text/css" href="resources/css/queries.css">
		
		<title>BOXER</title>
	</head>
	<body>
		<nav>
			<div class="container">
				<div id="logo-name">
					<a href="index.html" class="logo-link">
						<div class="logo">
							<img src="resources/img/BoxerLogoFinal.png" alt="Boxer Logo">
						</div>
						BOXER
					</a>
				</div>
				<a class="mobile-nav-icon js--nav-icon">
					<i class="fas fa-bars fa-2x"></i>
				</a>
				<ul class="nav-links">
					<li><a href="about.html" class="about-link">About</a></li>
					<li><a href="music.html" class="music-link">Music</a></li>
					<li><a href="events.html" class="events-link">Events</a></li>
					<li><a href="#" class="contacts-link active active-contacts">Contact Us</a></li>
				</ul>
			</div>
		</nav>
		
		

		<section id="contacts" class="nav-avoid">
			<div class="mobile-correct">
				<div class="header contacts-bg">
					<div class="container">
						<h1 class="header-title contacts-text">CONTACT &nbsp; US</h1>
					</div>
					<img class="header-img-splash" src="resources/img/BoxerLogoCrop.png" alt="Boxer Logo">
				</div>


				<div class="container form-container">	
					<div class="contact-form-header">
						<h2 class="contacts-text">Feel free to send us a message!<span class="header-icon"><i class="fas fa-pencil-alt"></i></span></h2>
					</div>
					<div id="contact-form">
                        <form method="post" action="resources/php/mailer.php">
                           <div class="submit-response-table table">
                           		<?php
                                   if($_GET['success'] == 1) {
                                       echo "<div class=\"tableRow\">
                                                <div class=\"form-messages success\">
                                                    We got it! Your message has been sent.
                                                </div>
                                            </div>";
                                   }
                                   if($_GET['success'] == -1) {
                                       echo "<div class=\"tableRow\">
                                                <div class=\"form-messages error\">
                                                    Sorry, something went wrong. Please try again.
                                                </div>
                                            </div>";
                                   }
                                ?>
                           </div>
                            <div class="contact-form-body table">
                                
                                <div class="input-group tableRow">
                                    <label for="name" class="col contacts-bg contacts-text"><i class="fas fa-user"></i>&nbsp; Name:</label>
                                    <div class="input-holder col">
                                        <input id="name" class="form-control" type="text" placeholder="Enter Name Here" required>
                                    </div>

                                </div>
                                <div class="input-group tableRow">
                                    <label for="email" class="col contacts-bg contacts-text"><i class="fas fa-at"></i>&nbsp; Email:</label>
                                    <div class="input-holder col">
                                        <input id="email" class="form-control" type="email" placeholder="Enter Email Here" required>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="input-group message-group">
                                    <label for="message" class="contacts-bg contacts-text"><i class="fas fa-envelope-square"></i> Message:</label>
                                    <div class="wysiwyg">
                                        <textarea name="message" id="message" class="form-control" placeholder="Enter Your Message"></textarea>
                                    </div>
                                </div>
                                <input type="submit" class="submit-button contacts-bg contacts-text" value="Submit">   
                            </div>
                        </form>
					</div>
				</div>

				<div class="container shout-out">
				   <img src="resources/img/BoxerLogoFinal.png" alt="Boxer Logo" class="shout-out-img">
					<h4>We love our family, &nbsp;friends, &nbsp;and fans.</h4>
				</div>
				<div class="empty-div"></div>
			</div>
		</section>
		
   		
   		
   		<!-- Footer -->
		<footer>
			<div class="social-bar">
				<div class="container">
					<ul class="social-links">
						<li><a href="https://www.facebook.com/BOXERtheband" target="_blank">
							<i class="fab fa-facebook fa-2x fb footer-normal-i"></i>
							<i class="fab fa-facebook fb footer-small-i"></i>
						</a></li>
						<li><a href="https://open.spotify.com/artist/2o97G0Sck4rrvI7zyAOyPK" target="_blank">
							<i class="fab fa-spotify fa-2x sp footer-normal-i"></i>
							<i class="fab fa-spotify sp footer-small-i"></i>
						</a></li>
						<li><a href="#" target="_blank">
							<i class="fab fa-soundcloud fa-2x sc footer-normal-i"></i>
							<i class="fab fa-soundcloud sc footer-small-i"></i>
						</a></li>
						<li><a href="https://www.youtube.com/channel/UCWpONSFUjE5nIld_pk2WniQ/featured" target="_blank">
							<i class="fab fa-youtube fa-2x yt footer-normal-i"></i>
							<i class="fab fa-youtube yt footer-small-i"></i>
						</a></li>
						<li><a href="#" target="_blank">
							<i class="fab fa-apple fa-2x ap footer-normal-i"></i>
							<i class="fab fa-apple ap footer-small-i"></i>
						</a></li>
						<li><a href="#" target="_blank">
							<i class="fab fa-instagram fa-2x in footer-normal-i"></i>
							<i class="fab fa-instagram in footer-small-i"></i>
						</a></li>
					</ul>
				</div>
			</div>
		</footer>
       
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="resources/js/script.js"></script>
        

        
	</body>
</html>
