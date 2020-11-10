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
        
        
        //find the employee based on their ID
        $criteria = array('_id' => $ID);
        $cursor = $collection->findOne($criteria);
        
        //if the employee does not exist, redirect to the error page
        $valid = db.collection.find({_id: '$ID'}, {_id: 1}).limit(1);
        if ($valid == 0) {
            header("Location: ./employeeDoesNotExist.html"); 
            exit;
        }
        
        foreach($cursor as $document) {  
            var_dump($document);  
        }
        
    ?>
    <h1 class=banner> Employee Profile</h1>
     
    
    
    <div id= copyright>
      The Techonauts: Bonnie Atelsek - Matthew Kabat - Nathan Murzello - Terrence Gaines
    </div>
    
</body> 
</html> 