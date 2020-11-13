<html> 
<head>
    <title>Employee Profile</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./resources/newemployee.css">
</head> 
<body>
    <?php
        //Script to establish a connection with the database.
        require 'vendor/autoload.php';
        $client = new MongoDB\Client(
          'mongodb+srv://techno:techno123@cluster0.k9zfj.mongodb.net/EmployeeSystem?retryWrites=true&w=majority');
        $collection=$client->selectCollection('EmployeeSystem','Employee');
        $ecollection=$client->selectCollection('EmployeeSystem','Evaluation');
        //initialize variable with ID value
        $ID = (int)$_POST['ID'];
        
        //find one employee and their evals based on employee ID    
        $employee=$collection->findOne(['_id' =>$ID]);
        $evals=$ecollection->find(['employee id' =>$ID]);

        //if the employee does not exist, redirect to the error page
        if(empty($employee)) {
            header("Location: ./employeeDoesNotExist.html"); 
            exit;
        }
        
        //var_dump($employee); (For seeing the BSON object returned by query) 
        
        /*How to display information
        $employee["_id"];                 The employee ID
        $employee["first_name"];          
        $employee["last_name"];           
        $employee["address"];             
        $employee["city"];
        $employee["state"]; 
        $employee["zip_code"];
        $employee["department"];          The employee department number
        */
        
        //print out employee info
        echo($employee["first_name"] + " " + $employee["last_name"]);
        echo("ID Number : " + $employee["_id"]);
        echo($employee["address"] + ", " + $employee["city"] + " " + $employee["state"] + ", " + $employee["zip_code"]);
        echo("Department: " + $employee["department"]);

        //iterate through evals and calculate average
        $num=0;
        $avg=0;
        foreach ($evals as $cur) {
            $avg += $cur["eval_score"];
            $num++;
        }
        $bonus = ((double)$avg / $num);
        
        echo("Percent Bonus: " + $bonus + "%");
        
    ?>
    <h1 class=banner> Employee Profile</h1>
     
    
    
    <div id= copyright>
      The Techonauts: Bonnie Atelsek - Matthew Kabat - Nathan Murzello - Terrence Gaines
    </div>
    
</body> 
</html> 