<?php
$pass = $_POST['pass'];

if($pass == "admin")
{
        include("deletedepartment.php");
}
else
{
    if(isset($_POST))
    {?>

            <form method="POST" action="secure.php">
            
            Pass <input type="password" name="pass"></input><br/>
            <input type="submit" name="submit" value="Go"></input>
            </form>
    <?}
}
?>

