<?php

class TableCell
{
    /** Performs fill table cell.
     *
     *  Change digits color.
     *
     * Each string fills like as:
     *                           <p><span class="$color">"Digit"</span>...<span class="$color">"Digit"</span></p>
     *
     * @param $i
     */

    public static function FillTableCell($i){

        /** Filling the string in table cell **/
        for ($j=1; $j<11; $j++) {

            $result = $i * $j;
            $resultString = "$i x $j = $result";
            $stringLength = strlen($resultString);  /** string length **/

            /** Changing digits color  in sequences: yellow, blue, red, green **/
            $color = "green";
            $resultOut = "<p>";

            for ($counter = 0; $counter < $stringLength; $counter++):

                if (($resultString{0} == " ") || $resultString{0} == "x" || ($resultString{0} == "=")) {
                    $resultOut .= "<span class=\"black\">" . $resultString{0} . "</span>";
                } else {
                    if ($color === "red") {
                        $color = "green";
                    } elseif ($color === "green") {
                        $color = "yellow";
                    } elseif ($color === "yellow") {
                        $color = "blue";
                    } else {
                        $color = "red";
                    }

                    $resultOut .= "<span class=\"$color\">" . $resultString{0} . "</span>";
                }

                $resultString = substr($resultString, 1);

            endfor;

            $resultOut .= "</p>";
            echo $resultOut;
        }
    }

}

