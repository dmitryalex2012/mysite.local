<?php
$time = date("H:i:s");
$value = "Current time $time";
setcookie("TestCookie", $value);


            session_name("Dmitry");
            session_start();

            $_SESSION['time'] = date("H:i:s");

?>


<?php
class A {

    public $tempA = 'tempA';

    public function tempA(){
        echo 'myTempA';
    }
}

class B extends A {

    public $tempB = 'tempB';

    public function tempA(){
        echo 'Hello myTempB';
    }
}

class C extends B {
    public $tempC = 'tempC';
}

$someObj = new A();  // no problems
$someOtherObj = new B(); // no problems
$lastObj = new C(); // still no problems
echo $lastObj->tempC . "<br>";
echo $lastObj->tempB . "<br>";

$someObj->tempA;
$someOtherObj->tempA;

?>


<?php
//const ONE = 1;
//const TWO = 22;
//
//class foo {
//    const TWO = ONE * 2;
//    const THREE = ONE + self::TWO;
//    const SENTENCE = 'Значение константы THREE - ' . self::THREE;
//}
//
//echo foo::THREE . PHP_EOL;
//echo foo::THREE;
?>


<?php
//    class MyClass
//    {
//        const CONSTANT = 'значение константы';
//        public $myTemp = 5;
//
//        function showConstant() {
//        echo  self::CONSTANT . ' 100%' . "\n";
//        }
//    }
//
//    $newClass = new MyClass();
//
//    echo MyClass::CONSTANT . "<br>";
//    echo MyClass::CONSTANT . "<br>";
//    $newClass->showConstant();
//    echo  "<br>";
//
//    echo $newClass->myTemp . "<br>";
//    echo $newClass::CONSTANT . "<br>";;
?>


        <?php
        //if ($_POST) {
        //    echo '<pre>';
        //    $post = $_POST;
        //    if (($post['personal']['name']) && ($post['personal']['email'])){
        //        echo htmlspecialchars(print_r($_POST, true));
        //    }
        //    echo '</pre>';
        //}
        ?>

        <!--    <form action="" method="post">-->
        <!--        Имя:    <label>-->
        <!--                    <input type="text" name="personal[name]" />-->
        <!--                </label><br />-->
        <!--        Email:  <label>-->
        <!--                    <input type="text" name="personal[email]" />-->
        <!--                </label><br />-->
        <!--        Пиво: <br />-->
        <!--                <label>-->
        <!--                    <select multiple name="beer[]">-->
        <!--                        <option value="warthog">Warthog</option>-->
        <!--                        <option value="guinness">Guinness</option>-->
        <!--                        <option value="stuttgarter">Stuttgarter Schwabenbräu</option>-->
        <!--                    </select>-->
        <!--                </label>-->
        <!--        <br />-->
        <!--        <input type="submit" value="Отправь меня!" />-->
        <!--    </form>-->


    <?php
//    echo $_COOKIE["TestCookie"] . "<br>" . $value . "<br>";
//
//    print_r($_COOKIE);
//    echo "<br>";
    ?>


<?php
//$bar = <<<EOT
//        bar
//EOT;
//echo $bar;
?>

    <?php
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

//        echo $_SESSION['time'] . "<br>";
//        var_dump($_SESSION);
//        echo  "<br>";
//        echo  "<br>";
//
//        echo session_id() . "<br>";
//        echo session_name() . "<br>";
//        echo "rpbrdoejjbs78tkj97ob95vu946dmsr3" . "<br>";
//        echo session_save_path() . "<br>";
//        echo  "<br>";
//
//        if (isset($_SESSION['time'])){
//            echo $_SESSION['time'];
//        } else{
//            echo 'No $_SESSION[\'time\']';
//        }
//        echo  "<br>";
//
//        if (empty($_SESSION['count'])) {
//            $_SESSION['count'] = 1;
//        } else {
//            $_SESSION['count']++;
//        }
//        $count = $_SESSION['count'];
//        echo '<p>';
//        echo "Здравствуйте, посетитель, вы видели эту страницу $count раз.";
//        echo '</p>';
//        echo  "<br>";
//
//
//        var_dump(session_get_cookie_params());
//        echo  "<br>";
//        $cookie = session_get_cookie_params();
//        var_dump($cookie['path']);
//        echo  "<br>";
//
//
//        $myFile = file("temp.txt");
//        var_dump($myFile);
//        echo  "<br>";
//
//        echo $_COOKIE["TestCookie"] . "<br>";
//        ?>