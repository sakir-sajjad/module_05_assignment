<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name"><br><br>
        <label for="name">Name:</label>
        <input type="email" name="mail"><br><br>
        <input type="submit" name="submit">

    </form>

    <?php
    include("person.php");
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $mail = $_POST["mail"];
        $person_details = new Person($name, $mail);
        $person_details->person_info();
    }
    ?>
</body>
</html>