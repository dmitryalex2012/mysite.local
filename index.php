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
                <li><a href="index.php?valueKey=lessons1">Урок 1</a></li>
                <li><a href="index.php?valueKey=lessons2">Урок 2</a></li>
                <li><a href="index.php?valueKey=lessons3">Урок 3</a></li>
            </ul>
        </nav>

    </header>


    <main>

        <!--    File "index.php" is used as layout.
                The pages are loaded depends of "valueKey" value in NAV menu.
        -->
        <?php
        if (isset($_GET['valueKey'])){
            switch ($_GET['valueKey']){
                case "lessons1": include "lessons1.php"; break;
                case "lessons2": include "lessons2.php"; break;
                case "lessons3": include "lessons3.php"; break;
            }
        }
        else{
            include "hello.php";
        }
        ?>

     </main>


     <footer>

         <p class="pFooterMain">Designed by Dmitry Sechyn</p>

     </footer>

 </body>

</html>