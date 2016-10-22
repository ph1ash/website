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
										<h3>Factory Automation</h3>
									</header>
									<div class="content">
										<p>While working with the student group Critical Tinkers, another member and I had an interest in exploring more about how robotic assembly was incorporated into factories. We came up with the idea to use a robotic arm to assemble small LEGO™ structures using custom software that we planned to develop. The thing that made this project unique is that we wanted to be able to build structures in an interface that would be hosted online so that any device could connect to it and build a structure. With the increasing complications we ran into as we began to develop this project, we decided to break the project up into two parts, robotic arm control and GUI development. The robotic arm control group would be dealing directly with developing software to move the arm as well as creating a program to interface the GUI with the robotic arm while the GUI development would work soley on making a robust GUI interface. </p><p>
					As GUI development team leader, I made it a priority to break this project into small portions which could hopefully be completed with a relatively small amount of time to keep motivation on the project high as well as showing that the group is making steady progress to our end goal. The first goals that my team and I had were to figure out a programming language would allow for creating robust user interfaces as well as the ability to connect to a server and be able to push the generated structure data to the server so that it could be interpreted for use with the robotic arm. <br><br>
                         Determining the groups strengths allowed us to come to the decision of using Javascript as our language of choice due to the fact that it can be run in-browser as well as the ability to communicate with the server with relative ease. The only thing we needed to figure out now was how well Javascript could display graphics. A few of our team members had experience with the programming language <a href="http://processing.org/">Processing</a> which has <a href="https://jogamp.org/jogl/www/">JOGL</a> natively installed in the Processing development environment. With this powerful graphics library already implemented as well as having the ability to compile Processing code into Javascript, we decided that this would be our best choice.<br><br>
                         With the environment and language decided upon, we began our first attempts at developing our GUI. We hadn't had much experience with creating 3D structures previously, but with quite a bit of trial and error we managed to gain ground on making a functional GUI that began to look like how we imagined. Below is our most recent prototype which allows you to generate a block within the environment. The block placement hasn't been implemented yet, but we plan to add this feature in the near future.<br><br>
					</p>
					<a href="ct/index.html"target="_blank"><h2>Latest Version of the GUI</h2></a>
					<p><b>Note - This requires Javascript to run. Make sure your browser has the latest version of Javascript. Google Chrome seems to handle the application best.</b></p>
					<div class="processing-container">
						<iframe src="ct/index.html"></iframe>
					</div>
					<p>Use the WASD keys to move around, Z key to place a block (multiple blocks overlap for right now since they can't be placed yet), and the C key to re-center the environment</p>
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
