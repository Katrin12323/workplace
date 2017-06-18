<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Property</title>
</head>
<body>
<h2> Add new property  </h2>

<form action="http://localhost/CodeIgniter/index.php/House/addNewHouse" method="post">

    <label for="address"> Enter the address of the property: </label> <br/><br>
    <input type="text" name="address"> <br/><br/>

    <label for="area"> Enter the area of the property <br/> in square meters:  </label> <br/><br>
    <input type="number" name="area"><br/> <br/>

    <label> Enter the type of the property </label> <br/><br>
    <select name="propertyType">
        <option name="propertyType" value="Apartment">Apartment</option>
        <option name="propertyType" value="Maisonette">Maisonette</option>
        <option name="propertyType" value="house">House</option>
        <option name="propertyType" value="floor of a house">floor of a house </option>
    </select> <br> <br>

    <input type="submit" value="Submit">
</form>
</body>
