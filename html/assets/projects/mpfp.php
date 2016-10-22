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
										<h3>Mobile Platform for Future Projects (MPFP)</h3>
									</header>
									<div class="content">
										<p>During my first few semesters at Iowa State, I was determined to get involved with the Electrical Engineering community and to start gaining experience outside the classroom. I joined the student group Critical Tinkers to begin exploring different realms of Electrical Engineering. The MPFP is a <a href="http://www.pridemobility.com/jazzy/index.asp" target="_blank">power wheel chair</a> which has the seat removed leaving only the chassis and the joystick controller. We were able to tap into the wheel chair's controls and mimic the output that would normally be generated using the joystick with an <a href="http://arduino.cc/" target="_blank">Arduino</a> as our new source of control.</p>
										<p>With a heavy interest in robotics and interfacing the real world with the digital world, I became involved with furthering development for the MPFP. My goal with this project was to expand the connectivity of the device as well as being able to use different types of interfaces for control. With WiFi being readily available around campus, I decided to try my luck at integrating WiFi onto the MPFP using a <a href="http://www.rovingnetworks.com/WiFly">WiFly</a> as my method of wireless connectivity. Having the WiFly implemented, this gave me the ability to roam around campus wherever there is a WiFi signal. The next addition I was able to implement was adding in an external controller as different way to interface with the MPFP. I developed a <a href="http://processing.org/">Processing</a> application to interface with an <a href="https://www.google.com/search?q=xbox+360+controller&aq=0&um=1&ie=UTF-8&hl=en&tbm=isch&source=og&sa=N&tab=wi&ei=ldE2UdulKIGy2QXi4ICgAw&biw=1366&bih=605&sei=m9E2UfzLMeq-yQGXx4HgBw" target="_blank">XBox 360 controller</a> and then encoded the data so that the MPFP could use that data to move around. This gave the user a more intuitive experience when controlling the MPFP rather than using the keyboard to navigate.</p>
										<p>There are a still a few things that other students and I plan to implement as additions to the MPFP. We plan to add on a webcam so that we could have vision of where we were going as well as well as better a better autonomous experience. With the desire to make the platform more autonomous, we'd like to add in more safety features to avoid causing damage from running into obstacles. This consists of infrared and sonar sensors to detect objects around the chassis which will give us the ability to make judgements on proper movement to avoid collision.</p>
										<p>Here's a video of an early prototype using an ethernet adapter along with a wireless router to allow for wireless connectivity. We also have a Macbook streaming it's webcam feed for our vision.</p>
										<div class="video-container">
											<iframe width="100%" height="100%" src="./mpfp_files/a44ExuFoSow.htm" frameborder="0" allowfullscreen=""></iframe>
										</div>
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