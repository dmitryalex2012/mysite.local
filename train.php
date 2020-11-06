<?php
$time = date("H:i:s");
$value = "Current time $time";
setcookie("TestCookie", $value);

if ($_POST) {
    echo '<pre>';
    $post = $_POST;
    if (($post['personal']['name']) && ($post['personal']['email'])){
        echo htmlspecialchars(print_r($_POST, true));
    }
    echo '</pre>';
}
?>

    <form action="" method="post">
        Имя:    <label>
                    <input type="text" name="personal[name]" />
                </label><br />
        Email:  <label>
                    <input type="text" name="personal[email]" />
                </label><br />
        Пиво: <br />
                <label>
                    <select multiple name="beer[]">
                        <option value="warthog">Warthog</option>
                        <option value="guinness">Guinness</option>
                        <option value="stuttgarter">Stuttgarter Schwabenbräu</option>
                    </select>
                </label>
        <br />
        <input type="submit" value="Отправь меня!" />
    </form>


    <?php
    // Вывести одно конкретное значение cookie
    echo $_COOKIE["TestCookie"] . "<br>" . $value . "<br>";

    // В целях тестирования и отладки может пригодиться вывод всех cookie
    print_r($_COOKIE);
    ?>
