<?php
if ((empty($_POST["lower"]) && empty($_POST["upper"]) && empty($_POST["difference"]))) {
} elseif ((empty($_POST["lower"]) || empty($_POST["upper"]) || empty($_POST["difference"]))) {
    echo "Entries Not Complete!";
} elseif (($_POST["upper"] < $_POST["lower"]) || ($_POST["difference"] >= $_POST["upper"])) {
    echo "Format of Range Not Correct! Check Inputted Data!";
} else {
    $lower = $_POST['lower'];
    $upper = $_POST['upper'];
    $difference = $_POST['difference'];
    include 'oop.php';
    $X = new ArithmeticProgression($lower, $upper, $difference);
    $X->ArithmeticProgress();
}
?>