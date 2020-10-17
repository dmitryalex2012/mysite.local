<html lang="en">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Train WEB page</title>
  <link rel="stylesheet" href="NIX.css">
 </head>
 <body>

    <header>

        <nav>
            <ul class="menu">
                <li><a href="lessons1.php">Урок 1</a></li>
                <li><a href="lessons1.php">Урок 2</a></li>
            </ul>
        </nav>

    </header>

    <?php 
    include "includeNIX.php";
    ?>

    <h1 class="h1NIX"><?php echo "$hello"; ?></h1>


 </body>
</html>