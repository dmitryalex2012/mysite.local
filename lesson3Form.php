
<?php
/** Converting inputted string */
if (($_POST['inputData']) === ""){
    $inputtedString = "Вы ничего не ввели";
} else{
        $inputtedString = strrev($_POST['inputData']);
}
?>

<div  class="outForm">
    <form action="index.php" method="post">

        <p class="displayString"><?php echo $inputtedString; ?></p><br>

        <div class="outButton">
            <input type="submit" name="displayed" value="Назад">
        </div>

    </form>
</div>
