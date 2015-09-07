<!DOCTYPE HTML>
<html>
	<!--Head-->
	<?php include 'head.php' ?>
	<body id="top">
		<!--Header-->
		<?php include 'header.php' ?>
		<div id="main">
			<section id="one">
			<?php 
				$directory = "assets/blurbs";
				$contents = scandir($directory);
				if ($contents)
				{
					foreach($contents as $key => $value)
					{
						if ($value == "." || $value == "..")
						{
							unset($key);
						}
					}
				}
				echo "<ul>";
				foreach ($contents as $k => $v)
				{
					if($v != "." || $v != "..")
					{						
						$result = $v !== "." ;
						echo "$result";
						echo "<li><a href=\"$directory/" . $v . "\">link text</a></li>";
					}
				}
				echo "</ul>";
			?>
			</section>
		</div>
		<!-- Footer -->
		<?php include 'footer.php' ?>
		<!-- Scripts -->
		<?php include 'scripts.php' ?>
	</body>
</html>
