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
$hostname = 'localhost';
$dbname = 'trainweb';
$user = 'sitemanufactura';
$pass = '200384';

$connection = new mysqli($hostname, $user, $pass, $dbname);

if ($connection->connect_error) {
    die("Ошибка подключения: " . $connection->connect_error);
} else{
    echo "connected" . "<br>";
}


$sql = "SELECT
            test1.id as test_id, test1.title as test_title,
            test2.note as test2_note
        FROM test1
        LEFT OUTER JOIN test2 ON test1.id=test2.id";

$results = $connection->query($sql);
foreach ($results as $result){
    echo "<pre>";
    print_r($result);
    echo "</pre>";
}




//$sql = "CREATE TABLE test2 (
//          ID CHAR(5),
//          title VARCHAR(200) NOT NULL,
//          content VARCHAR(200),
//          note NUMERIC(8,2),
//          PRIMARY KEY (ID)
//)";

        //$sql = "DROP TABLE instructorNew";
//if ($connection->query($sql) === TRUE) {
//    echo "Таблица instructorNew создана успешно" . "<br>";
//} else {
//    echo "Ошибка создания таблицы: " . $connection->error;
//}



//$sql = "INSERT INTO test2 (title, content, note)
//        VALUES ('train12', 'Ivanov2', 5);";
//
//if ($connection->query($sql) === TRUE) {
//    echo "Успешно созданы новые записи" . "<br>";
//} else {
//    echo "Ошибка: " . $sql . "<br>" . $connection->error;
//}



//$sql = "SELECT title FROM test1";
//$query = $connection->query($sql);
//if ($query->num_rows > 0) {
//    while($row = $query->fetch_assoc()) {
//        echo "id:" . $row["title"] . "<br>";
//    }
//} else {
//    echo "0 результат";
//}



//$line = 3;
//$sql = "DELETE FROM test1 WHERE id = $line";
//
//if ($connection->query($sql) === TRUE) {
//    echo "Успешно удалена id = $line";
//} else {
//    echo "Ошибка: " . $sql . "<br>" . $connection->error;
//}
//
//$connection->close();
//?>


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

<?php
$connection->close();
?>