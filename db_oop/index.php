
<?php

include "Dbh.php";
include "User.php";
include "viewuser.php";


?>

<!DOCTYPE html>

<html>


<head>
    <title></title>
</head>

<body>


<?php


$users =new ViewUser();

$users->showAllUsers();


?>






</body>



</html>




































