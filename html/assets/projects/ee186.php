<!DOCTYPE HTML>
<!-- Previously right-sidebar.html-->
<html>
	<!--Head-->
	<?php include 'head.php'; ?>
	
	<body class="right-sidebar loading">
	
		<!-- Header -->
			<?php include 'header.php';?>
		
		<!-- Main -->
			<article id="main">

				<header class="special container">
					<h2>The best way to predict the future is to <strong>create it</strong></h2>
				</header>
					
				<!-- One -->
					<section class="wrapper style4 container">
					
						<div class="row oneandhalf">
							<div class="8u">
								
								<!-- Content -->
									<header>
										<h3>8x10 LED Matrix - EE 186 Final Project</h3>
									</header>
									<div class="content">
										<p>My groupmate and I both had a deep interest in how LCD screens, TVs, or any sort of display, worked. We decided to look into these devices a bit more to see what we could come up with. After doing a good amount of research, we came upon the basic concept of an LED matrix. We thought this would give us good insight into how a basic display functioned and was constructed.</p>
										<p>We based our design on an <a href="http://www.instructables.com/id/810-LED-Matrix-with-4017/">Instructable</a> we found when conducting research. Below is our first revision of the LED matrix running some sample code we developed. <br></p>
										<img src="./ee186_files/ee186proto.jpg" width="100%">
										<br>
										<img src="./ee186_files/ee186proto2.jpg" width="100%">
										<br>
										<p>After our developing our first prototype and getting frustrated with dealing with loose connections, we chose to design a PCB so that we'd have a sturdier platform for the matrix. We used EAGLE to design some of the parts we were using as well the PCB. The following pictures are of the front and back layouts for the PCB.</p>
										<br>
										<img src="./ee186_files/ee186final.jpg" width="100%">
										<br>
										<img src="./ee186_files/ee186final2.jpg" width="100%">
										<br>
										<p>With a solid platform to work with, we were able to further our progress in our program design. The final product allows the user to directly connect to the Arduino via a serial connection giving the ability to write to the matrix. Once the Arduino receives the desired string of characters, it will reference those characters from an array and will display the data repeatedly, like a scrolling marquee. The video below is of a user typing in the string "hello" and "whatsup" then sending it to the board via a serial terminal.</p>
										<br>
										<div class="video-container">
											<video id="video1" width="100%" height="100%" controls="" volume=".2">
					                            <source src="https://fbcdn-video-d-a.akamaihd.net/hvideo-ak-xpf1/v/t42.1790-2/1358634_10151566957541593_36652_n.mp4?oh=a7191b660b51f8f8c658a3a0ac5d0360&oe=543CA1B8&__gda__=1413263840_816dcccf89cacdd51d0d952442f91066" type="video/mp4">
					                            Your browser does not support HTML5 video.
					                        </video>  
										</div>
										<h2>Source Code</h2>
										<!--<div style=" clear: both;">&nbsp;</div>-->
										<p><a href="./ee186_files/EE186_Final.zip">EE186_Final.zip</a></p>
									</div>
	
							</div>
							<div class="4u">
								
								<!-- Sidebar -->
									<?php include 'sidebar.php';?>

							</div>
						</div>					
					</section>
			</article>

		<!-- Footer -->
			<?php include 'footer.php'; ?>

	</body>
</html>