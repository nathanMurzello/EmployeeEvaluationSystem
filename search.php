<html> 
<head>
    <title>Search Employee</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./resources/newemployee.css">
</head> 
<body>
 
    <h1 class=banner>Employee Search Engine</h1>
     
    <form action="employeeprofile.php" method="post">
        <div class= description>
            Enter the employee ID number of the employee you wish to search in order to display their profile. The
            employee must already have been entered in the website and must have a valid employee ID number.
        </div>
    
        Employee ID Number: <input name="ID" type="text" required>
        <br>
        
        <br> 
        <input type="submit" value="Find Employee" name="form_result"> 
    </form>
    
    <div id= copyright>
      The Techonauts: Bonnie Atelsek - Matthew Kabat - Nathan Murzello - Terrence Gaines
    </div>
    
</body> 
</html> 