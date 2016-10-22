<!DOCTYPE HTML>
<!-- Previously right-sidebar.html-->
<html>
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
									<div class="content">
										<section>
											<!--<iframe width="560" height="315" src="http://www.youtube.com/embed/FQc0r2CY2v8" frameborder="0" allowfullscreen></iframe>-->

											<header>
												<h3>Projects</h3>
											</header>	
											<p>For my senior design, we were to develop an automated chess set that would be able to play against a human while looking like another, "invisible", player was competing against them. We came up with a concept similar to the following video: </p>
											<p>
											<div class="video-container">
					<iframe width="100%" height="100%" src="./seniord_files/leP5AgcKNGA.htm" frameborder="0" allowfullscreen=""></iframe>
					</div>
					<br>
                          There were a few differences that we found when comparing the chess board in the video and our concept design. The first difference being that our board needs to be much quieter while moving chess pieces but still keeping a high speed when going across the board. Another idea we wanted to implement was having the ability to individually identify each piece. This way if, let's say, your pet koala walks across the chess board and moves some chess pieces out of their place, the computer would be able to identify each piece and bring them back into their previous position. These are just a few of the new concepts we wanted to implement into our design.<br><br>
                          For this project, I was part of the team who worked on achieving our goals for chess piece identification. Our concept consisted of creating wireless power transfer using induction to power the chess pieces, embedding a small microcontroller to blink an infrared LED at a designated frequency for identification, developing a circuit to power the transmitter circuit and the infrared receiving circuit, and designing a chess piece to hold these electronics.<br><br></p>
                          <img src="./seniord_files/witricityCircuit.png" width="100%" height="100%"><br>
                          <p align="center"><i>Transmitter Circuit Schematic - Curteousy of <a target="_blank" href="http://www.youtube.com/watch?v=eT3txWvMiJ8">gilbondfac</a></i><br><br></p>
                          <p>
                          We recently succeeded in transfering a high enough amount of energy to be able to power a rectifier circuit, an <a href="http://www.atmel.com/Images/doc2535.pdf" target="_blank">ATtiny13</a> microcontroller, and our infrared LED. This is a major step forward since this was the crucial factor that could have greatly set us back in regards of chess piece identification. Below is a video of our first successful demonstration of our wireless power transmission circuit: <br><br>
                          <div class="video-container">
                          <video id="video1" width="100%" height="100%" controls="" volume=".2">
                              <source src="seniord_files/videos/witricityTesting.mp4" type="video/mp4">
                              Your browser does not support HTML5 video.
                         </video>  
                         <script>
                         var video = document.getElementById('video1');
                         video.volume = 0.2;
                         </script>
                         </div>
                         <br><br>
                         The power consumption is currently a bit higher than we'd like it to be so we're currently refining our design to allow for more efficient power transfer between coils. After this, we plan to start designing chess pieces as well as the circuit boards to be placed within each piece to begin testing communication between the chess piece and the computer. 
					</p>
										</section>
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
