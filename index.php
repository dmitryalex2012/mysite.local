<?php

//session_name('abc');
session_start();


        $_SESSION['time'] = date("H:i:s");

//echo session_save_path();

//        session_destroy();

?>


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


<!--        --><?php
//
//        $user = 'sitemanufactura';
//        $pass = '200384';
//
//        try {
//            $dbh = new PDO('mysql:host=localhost;dbname=trainweb', $user, $pass);
//
//            $query = "SELECT * FROM `test1`";
//            foreach($dbh->query($query) as $row) {

//                echo "<pre>";
//                print_r($row);
//                echo "</pre>";

//                print $row['id'] . "\r\n";
//                print $row['title'] . "\r\n";
//                print $row['content'] . "\n";
//                print $row['note'] . "\n";
//                echo  "<br>";
//            }

//            $query = 'SELECT * FROM `test1`';

//            $query = "SELECT * FROM `test1` WHERE id = '1'";

//            $result = $dbh->query($query);
//            foreach ($result as $row){
//                echo "<pre>";
//                print_r($row['id']);
//                echo "</pre>";
//            }

//            $dbh = null;
//        } catch (PDOException $e) {
//            print "Error!: " . $e->getMessage() . "<br/>";
//            die();
//        }
//        ?>

        <?php


        echo $_SESSION['time'] . "<br>";
        var_dump($_SESSION);
        echo  "<br>";

        echo session_name() . "<br>";
        echo session_id() . "<br>";

//        var_dump(session_get_cookie_params());
//        echo  "<br>";
//        $cookie = session_get_cookie_params();
//        var_dump($cookie['path']);
//        echo  "<br>";

//        echo session_save_path();

        ?>


        <!--    File "index.php" using as layout.
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

<?php

//        session_destroy();

?>