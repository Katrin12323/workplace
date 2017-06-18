<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calories counter</title>
</head>
<body>
<h1> Calculator for calories consumed by a person per day.</h1><br/><br/>
<h2> Add fats, proteins, alcohol and carbohydrates and press 'Calculate'</h2>

<form action="http://localhost/CodeIgniter/index.php/CaloriesCounter/counter" method="post">

    <label for="fats"> Enter the consumed fats per day: </label> <br/><br>
    <input type="text" name="fats"> <br/><br/>

    <label for="proteins"> Enter the consumed proteins per day: </label> <br/><br>
    <input type="text" name="proteins"><br/> <br/>

    <label for="alcohol"> Enter the consumed alcohol per day: </label> <br/><br>
    <input type="text" name="alcohol"><br/> <br/>

    <label for="carbohydrates"> Enter the consumed carbohydrates per day: </label> <br/><br>
    <input type="text" name="carbohydrates"><br/> <br/>

    <input type="submit" value="Calculate">
</form>

</body>