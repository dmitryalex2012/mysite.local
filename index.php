<html lang="en">

 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Train WEB page</title>
 <link rel="stylesheet" href="index.css">
 <link rel="stylesheet" href="lessons1.css">
 <link rel="stylesheet" href="lessons2.css">
 </head>

 <body>

    <header>

        <nav>
            <ul class="menu">
                <li><a href="index.php">NIX</a></li>
                <li><a href="lessons1.php">Урок 1</a></li>
                <li><a href="lessons2.php">Урок 2</a></li>
            </ul>
        </nav>

    </header>


    <main>

        <?php
        include "includeNIX.php";
        ?>

        <h1 class="h1Main"><?php echo "$hello"; ?></h1>

     </main>


     <footer>

         <p class="pFooterMain">Designed by Dmitry Sechyn</p>

     </footer>

 </body>

</html>