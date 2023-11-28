<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main">
    Jautajuma izveide
</div>
<?php
include "db.php";
if(isset($_POST['Saglabat'])){
        $sql = "INSERT INTO tests (question, first_answer, second_answer, correct)
        VALUES ('".$_POST["question"]."','".$_POST["first_answer"]."','".$_POST["second_answer"]."', '".$_POST["correct"]."')";
        if(mysqli_query($conn, $sql)){
                echo "";
        }else{
                echo "<p>error</p> ";
                echo "Error: " . $sql . "<br>" . $conn->error . "</h1>";
        }
}?>
    <form method="post"> 
        <div class="container">
            <label >Jautajums: </label><input class="question_box" type="text" name="question"><br>
            <label>1. atbilde: </label><input class="first_box" type="text" name="first_answer"><br>
            <label>2. atbilde: </label><input class="second_box" type="text" name="second_answer"><br>
            <label for="answer">Pareiza atbilde: </label>
            <select name="correct" id="answer">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </div>
            <button id="button" name="Saglabat"> Pievienot </button>
    </form>
</body>
</html>