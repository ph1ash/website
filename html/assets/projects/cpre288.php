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
										<h3>Autonomous iRobot - Embedded Systems Final Project</h3>
									</header>
									<div class="content">
										<p>The final project for CprE 288 consisted of developing software to allow for our <a href="http://www.irobot.com/en/us/robots/Educators.aspx" target="_blank">iRobot</a> to navigate through a maze by only using readings from infrared, sonar, cliff, and bump sensors. With limited forms of sensing, our team decided to have me develop a GUI to better help us navigate the maze. Using the <a href="http://processing.org/" target="_blank">Processing IDE</a>, I developed the following GUI</p>
										<img src="./cpre288_files/cpre288.JPG" alt="CprE 288 GUI" width="100%" height="100%">
										<br>
										<p>Whenever an event occured on the robot, the op code would be transferred over bluetooth which the GUI would pick up by listening to the COM port the receiver was on. This would change the cooresponding sensor red to indicate that the robot has came into contact with an object. It would then display this occurance in text via the newsfeed box. We were also able to get an accurate depicition of the environment by mapping the radar data onto the half circle grid. This data would be actively updated as soon as a new sonar or infrared scan had taken place.</p>
										<h2>Source Code</h2>
										<p><a href="./cpre288_files/Cpre288FinalProject.zip">Cpre288FinalProject.zip</a></p>
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