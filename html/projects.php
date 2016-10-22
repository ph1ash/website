<!DOCTYPE HTML>
<html>
    <!--Head-->
    <?php include 'head.php' ?>
    <body id="top">
        <!--Header-->
        <?php include 'header.php' ?>
        <div id="main">
            <section id="one">
            <h1>Projects</h1>
            <?php
                $directory = "assets/projects";
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
		    $fileInfo = pathinfo($v);
		    if($fileInfo['extension'] == 'php')
                    {
			$fileArray = $v;
			$pageName = $fileInfo['filename'];
                        $pageName = ucwords($pageName);
			$mtime = date("[M|d|y]", filemtime($directory."/".$v));
                        echo "<li><a href=\"$directory/" . $v . "\"><h3>$pageName</a> - $mtime</h3></li>";
			$lump = file_get_contents($directory."/".$v);
			$start_tag = "<p>";
			$end_tag = "</p>";
			$startpos = strpos($lump, $start_tag) + strlen($start_tag);
			if ($startpos !== false) {
    				$endpos = strpos($lump, $end_tag, $startpos);
    				if ($endpos !== false) {
					echo '<p>';
				        echo substr($lump, $startpos, $endpos - $startpos)." <a href=\"$directory/$v\">[...]</a>";
					echo '</p>';
    				}
			}
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
