<?php
/**
 * Created by PhpStorm.
 * User: Mahan
 * Date: 7/14/2018
 * Time: 9:11 AM
 */
echo str_word_count("Hello world!");


if(isset($_GET['submit']))

{
    $name = $_GET['name'];
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="get" action="<?php echo htmlentities ($_SERVER['PHP_SELF']); ?>">

    <input type="text" name="name"><br>
    <input type="submit" name="submit" value="Submit Form">
</form>
</body>
</html>
