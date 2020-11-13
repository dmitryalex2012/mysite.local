
    <h1 class="h1Main">Урок 2</h1>

    <table class="tableMain">

        <caption>Таблица умножения</caption>

        <?php

        include "TableCell.php";

        /** Make table strings **/
        for ($tr=0; $tr<2; $tr++):
            $column = ($tr == 0) ? 1 : 6;
            $condition = ($tr == 0) ? 6 : 11;
            ?>

            <tr>
                <!-- make cells in column  -->
                <?php
                for ($i = $column; $i<$condition; $i++):
                ?>

                    <td class="td">

                        <?php
                        TableCell::FillTableCell($i);
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
