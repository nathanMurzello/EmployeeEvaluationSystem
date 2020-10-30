<html> 
<head>
    <title>DATABASE TEST</title>
    <meta charset="utf-8"/>
</head> 
<body>
 
    <h1 class=banner id=dept>TEST CONNECTION</h1>
     
    <form class= dept action="testConnection.php" method="post">
        <div class= description>
            Fill in test info to test database connection.
        </div>
        
        Department Name: <input name="name" type="text" required>
        <br>
        
        Department ID Number: <input name="id" type="text" required> 
        <br>
        
        Department Manager: <input name="manager" type="text" required>
        <br>
        
        Department Location: <input name="location" type="text" required>
        <br>
        <br>
        
        <input name="verify" type="checkbox" required> I certify that all the information entered above is true and accurate to the best of my knowledge. 
        <p> 
        
        <p> 
        <input type="submit" value="Create Department"> 
        <input type="reset">
     
    </form>
    
    
</body> 
</html> 