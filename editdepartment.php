<html> 
<head>
    <title>Edit Department</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./resources/stylesheet.css">
</head> 
<body>
 
    <h1 class=banner>Edit the Department</h1>
     
    <form action="editDepartmentBackend.php" method="post">
        <div class= description>
            Enter the Department ID number you wish to search in order to display their profile.
        </div>
    
        Department ID Number: <input name="dept_id" type="text" required>
        <br>
		Department Name: <input name="name" type="text" required>
        <br>       
        Department Location: <input name="location" type="text" required>
        <br>
        <br>
        
        <br> 
        <input type="submit" value="Edit Department" name="form_result"> 
        <input type="reset">
    </form>
    <a href= "./managedepartmentphp.php"> Return back to main screen </a>
    <div id= copyright>
      The Techonauts: Bonnie Atelsek - Matthew Kabat - Nathan Murzello - Terrence Gaines
    </div>
    
</body> 
</html> 