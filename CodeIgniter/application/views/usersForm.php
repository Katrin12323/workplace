<html>
<head>
    <title> Hamali be </title>
</head>

<body>
<h2> Enter the following data to calculate how much the transport of your luggage will cost. </h2>

<form action="http://localhost/CodeIgniter/index.php/Hamali/CalculateThePrice" method="post">

    <label for="distanceInKm"> At what distance the luggage will be transported? </label><br/> <br/>
        <input type="number" name="distanceInKm"> km. <br/><br/><br/>

    <label for="luggageInKg"> How many kilograms is the luggage to be transported? </label><br/> <br/>
         <input type="number" name="luggageInKg"> kg. <br/><br/><br/>

          <input type="submit" value="Calculate">
</form>

</body>
</html>