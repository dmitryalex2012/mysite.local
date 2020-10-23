
    <h1 class="h1Main">Урок 1</h1>

    <table class="tableMain">

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
