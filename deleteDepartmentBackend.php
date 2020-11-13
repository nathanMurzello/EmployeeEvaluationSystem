<html>

  <head>
    <title>Delete Department</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./resources/construction.css">
  </head>
  
  <body>
    
    <!--Script to establish a connection with the database.-->
    <?php
    require 'vendor/autoload.php';
    $client = new MongoDB\Client(
      'mongodb+srv://techno:techno123@cluster0.k9zfj.mongodb.net/EmployeeSystem?retryWrites=true&w=majority');
    $collection=$client->selectCollection('EmployeeSystem','Department');
   
    //the approved variable checks that the input is an employee ID
    $approved = 0;
    
    //create variable to hold number from the input form
    $depID = $_POST['dept_id'];
   
    //regex patterns to validate inputs
    $num_pattern = '/\d/';
    
    //all following if statements are validating the fields edited by the user to make sure
    //they contain the correct data types
    if (is_numeric($depID)) {
      $approved++;
    }
    else {
      echo "Error: A Department ID can only contain numbers.<br>";
    }

    //if all fields have been approved, the data will be delted from the database 
    if ($approved == 1) {
      $num_depID=(int)$depID;
      $delete= $collection->deleteOne(['_id' => $num_depID]);
      echo("Department deleted successfully.");
    }
    else {
      echo "Operation unsuccessful: Department was not deleted, please try again.";
    }
    ?>

    <!--Displays the back bar and the copyright bar at the bottom-->
    <div class = banner>
      <a href= "./manageemployeephp.php"> Back </a>
    </div>
        
    <div id= copyright>
      The Techonauts: Bonnie Atelsek - Matthew Kabat - Nathan Murzello - Terrence Gaines
    </div>
    
    
  </body>

</html>