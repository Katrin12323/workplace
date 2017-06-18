<html>
<head>

</head>
<body>
    <form action="http://localhost/CodeIgniter/index.php/Students/saveStudent" method="POST">
        <label for="firstName">First Name: </label>
        <input type="text" name="firstName">

        <label for="lastName">Last Name: </label>
        <input type="text" name="lastName">

        <label for="class">Class: </label>
        <input type="number" name="class">

        <label for="success"> Success: </label>
        <input type="text" name="success">

        <input type="submit" value="Save the student into the database">
    </form>
</body>
</html>