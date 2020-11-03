<html> 
<head>
    <title>Search Employee</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./resources/newemployee.css">
</head> 
<body>
 
    <h1 class=banner>Please enter the employee ID</h1>
     
    <form action="employeeprofile.php" method="post">
        <div class= description>
            Enter the employee ID number of the employee you wish to search in order to display their profile.
        </div>
    
        Employee ID Number: <input name="ID" type="text" required>
        <br>
        
        <br> 
        <input type="submit" value="Create Employee" name="form_result"> 
        <input type="reset">
    </form>
    
    <div id= copyright>
      The Techonauts: Bonnie Atelsek - Matthew Kabat - Nathan Murzello - Terrence Gaines
    </div>
    
</body> 
</html> 