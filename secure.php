<html> 
<head>
    <title>Manage Department</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./resources/stylesheet.css">
</head> 
<body>
 
       <h1 class=banner>Manage Department</h1>
     
        
        <div class= description>
            Please select one of the options to perform administrative functions for a department.
        </div>
       
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

     
    
    
    <div id= copyright>
      The Techonauts: Bonnie Atelsek - Matthew Kabat - Nathan Murzello - Terrence Gaines
    </div>
   
</body> 
</html> 