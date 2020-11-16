<html> 
<head>
    <title>Employee Profile</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./resources/profile.css">
</head> 
<body>
    <h1 class=banner> Employee Profile</h1>
     
    <div class=display>
        <?php
            //Script to establish a connection with the database.
            require 'vendor/autoload.php';
            $client = new MongoDB\Client(
              'mongodb+srv://techno:techno123@cluster0.k9zfj.mongodb.net/EmployeeSystem?retryWrites=true&w=majority');
            $collection=$client->selectCollection('EmployeeSystem','Employee');
            $ecollection=$client->selectCollection('EmployeeSystem','Evaluation');
      
            //get ID from form
            $ID = (int)$_POST['ID'];
            
            //find one employee and all their evals based on employee ID    
            $employee=$collection->findOne(['_id' =>$ID]);
            $evals=$ecollection->find(['employee id' =>$ID]);
            
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
            
            //if the employee does not exist, redirect to the error page
            if(empty($employee)) {
                header("Location: ./employeeDoesNotExist.html"); 
                exit;
            }
            
            //print out employee info
            echo($employee["first_name"] . " " . $employee["last_name"] . "<br>");
            echo("ID Number : " . $employee["_id"] . "<br>");
            echo($employee["address"]);
            echo (", " . $employee["city"] . " " . $employee["state"] . ", " . $employee["zip_code"] . "<br>");
            echo("Department: " . $employee["department"] . "<br>");
            
            //iterate through evals and calculate average
            $num=0;
            $avg=0;
            foreach ($evals as $cur) {
                $avg += (double)$cur["eval_score"];
                $num++;
            }
            $bonus = ($avg / $num);
            echo("Percent Bonus: " . $bonus . "%");
        ?>
        
    </div>
    
    <div class = back>
      <a href= "./managemeployeephp.php"> Manage Employee </a>
    </div>
    
    <div class = back>
      <a href= "./index.php"> Back </a>
    </div>
    
    <div id= copyright>
      The Techonauts: Bonnie Atelsek - Matthew Kabat - Nathan Murzello - Terrence Gaines
    </div>
    
</body> 
</html> 