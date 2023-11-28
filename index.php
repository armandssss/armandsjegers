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
    Tests
</div>
<?
include "db.php";
$sql="select * from tests";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
?>
    <div class="question"><? echo $row["question"] ?></div><br>
    <div id="1" class="first"><? echo $row["first_answer"] ?></div><br>
    <div id="2" class="second"><? echo $row["second_answer"] ?></div><br>

    <?}}?>
</body>
</html>