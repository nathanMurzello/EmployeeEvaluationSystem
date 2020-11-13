<html> 
<head>
    <title>App Security</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./resources/stylesheet.css">
</head> 
<body>
 
       
     
        
        
       
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
            <div class= description>
            This is a restricted page.  Please enter your password.
            </div>
            Enter Password <input type="password" name="pass"></input><br/>
            <input type="submit" name="Delete Department" value="Go"></input>
            </form>
    <?}
}
?>

     
    
    
    <div id= copyright>
      The Techonauts: Bonnie Atelsek - Matthew Kabat - Nathan Murzello - Terrence Gaines
    </div>
   
</body> 
</html> 