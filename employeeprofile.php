<html> 
<head>
    <title>Employee Profile</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./resources/newemployee.css">
</head> 
<body>
    <?php
        require 'vendor/autoload.php';
        $client = new MongoDB\Client(
          'mongodb+srv://techno:techno123@cluster0.k9zfj.mongodb.net/EmployeeSystem?retryWrites=true&w=majority');
        $collection=$client->selectCollection('EmployeeSystem','Employee');
    
        $ID = $_POST['ID'];
        
        $employee=$collection->findOne($ID);
        echo("Searching");
        var_dump($employee); 
        /*find the employee based on their ID
        $criteria = array('_id' => $ID);
        $cursor = $collection->findOne($criteria);
        */
        //if the employee does not exist, redirect to the error page
        if(!empty($employee)) {
            header("Location: ./employeeDoesNotExist.html"); 
            exit;
        }
        
        echo("Success!");
        
        
        
    ?>
    <h1 class=banner> Employee Profile</h1>
     
    
    
    <div id= copyright>
      The Techonauts: Bonnie Atelsek - Matthew Kabat - Nathan Murzello - Terrence Gaines
    </div>
    
</body> 
</html> 