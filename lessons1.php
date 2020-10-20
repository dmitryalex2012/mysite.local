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

    <h1 class="h1Main">Урок 1</h1>

    <table class="tableMain" border="5">

        <caption>Таблица умножения</caption>

        <?php
        /** Make table strings **/
        for ($tr=0; $tr<2; $tr++):
            $column = ($tr == 0) ? 1 : 6;
            $condition = ($tr == 0) ? 6 : 11;
        ?>

        <tr>
            <!-- Make socket in column  -->
            <?php
            for ($i = $column; $i<$condition; $i++):
            ?>

            <td class="td">

            <?php
                /** Fill the socket **/
                for ($j=1; $j<11; $j++) {

                    $result = $i * $j;
                    echo "$i x $j = $result" . "<br>";

                }
            ?>

            </td>

            <?php
            endfor;
            ?>

        </tr>

        <?php
        endfor;
        ?>

    </table>

</main>


<footer>

    <p class="pFooterMain">Designed by Dmitry Sechyn</p>

</footer>


</body>

</html>