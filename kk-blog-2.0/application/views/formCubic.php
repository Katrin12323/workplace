<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<h2> Add width, height and length and press 'Calculate'</h2>

<form action="http://localhost/CodeIgniter/index.php/Cubic/calculate" method="post">

    <label for="width"> Enter width of the the room: </label> <br/><br>
    <input type="text" name="width"> <br/><br/>

    <label for="height"> Enter height of the the room: </label> <br/><br>
    <input type="text" name="height"><br/> <br/>

    <label for="length"> Enter the length of the the room: </label> <br/><br>
    <input type="text" name="length"><br/> <br/>

    <input type="submit" value="Calculate">
</form>

</body>