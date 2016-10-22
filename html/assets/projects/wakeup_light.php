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
										<h3>LED Wakeup Light</h3>
									</header>
									<div class="content">
										<p>Now that I'm out of school and working full time, waking up during the fall/winter/spring is getting pretty difficult. It was no problem at all during the summer since I was able to wake up with the sun. That's no longer the case as the winter months approach. So how could I set up something to try and recreate the sun rising? Hopefully a strip of white LEDs next to my window will do the trick!</p>
										<img src="images/LED_lights_off.jpg" width="100%" alt="Lights off"/>
										<br>
										<br>
										<img src="images/LED_lights_on.jpg" width="100%" alt="Lights on!"/>
										<div class="caption">
											These guys are bright!
										</div>
										<br>
										<p>The lights are currently set up to slowly turn on over a 30 minute period using PWM (Pulse-Width Modulation) control via an Arduino which controls the gate to a MOSFET. </p>
										<p>The next step is to switch over to an Electric Imp to allow for pulling the time off the interwebs. Luckily, the Electric Imp has a PWM output on it, so switching over to that entirely can eliminate the need for the Arduino!</p>
										<img src="images/electric_imp.jpg" width="100%" alt="The Electric Imp + breakout board"/>
										<br>
										<br>
										<h3>Oct 19th 2014 Update</h3>
										<p>Got everything ported over to the Electric Imp! When going through a test run I noticed that the lights were much dimmer than when I had them plugged in directly to a 12V source. Come to find out that the MOSFET I'm using requires ~5V to fully saturate. The Electric Imp can only output 3.3V. Dang.</p>
										<img src="images/LED_lights+imp.jpg" width="100%" alt="Imp + mounted LEDs" />
										<br><br>
										<p>No biggy though. I decided to implement an op amp to boost up the voltage from the Imp to the gate of the MOSFET. </p>
										<p>But wait... the UA741 op amp isn't a rail-to-rail device. This means that when I try to pull set the input pin low on the op amp, it won't properly pull to ground and shut off the output. There's a turn-on voltage we have to overcome on the internal circuitry. So, now I'm on the hunt for a TTL MOSFET to simplify things a bit! Maybe a high-side switch would work better...</p>
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