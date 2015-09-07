<!DOCTYPE HTML>
<html>
    <!--Head-->
    <?php include 'head.php' ?>
    <body id="top">
        <!--Header-->
        <?php include 'header.php' ?>
        <div id="main">
            <section id="one">
            <h1>Random Thoughts</h1>
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
                    if($v !== "." && $v !== "..")
                    {
                    	$pageName = str_replace('_',' ',$v);
                        $pageName = str_replace(".php","",$pageName);
                        $pageName = ucfirst($pageName);
                        echo "<li><a href=\"$directory/" . $v . "\">$pageName</a></li>";
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
