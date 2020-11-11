<html> 
<head>
    <title>Delete Employee</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./resources/stylesheet.css">
</head> 
<body>
 
    <h1 class=banner>Delete Employee</h1>
     
    <form action="newemployeephp.php" method="post">
        <div class= description>
            Enter the Employee ID to display the record that you would like to delete.
        </div>
    
        
        
        Employee ID Number: <input name="id" type="password" required>
        <br>
        
        
        <br>
        
        <input name="verify" type="checkbox" required> I certify that all the information entered above is true and accurate to the best of my knowledge. 
        <br>
        
        <br> 
        <input type="submit" value="Delete Employee" name="form_result"> 
        <input type="reset">
    </form>
    <a href= "./manageemployeephp.php"> Return back to main screen </a>
    <div id= copyright>
      The Techonauts: Bonnie Atelsek - Matthew Kabat - Nathan Murzello - Terrence Gaines
    </div>
    
</body> 
</html> 