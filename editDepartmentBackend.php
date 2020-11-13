<html>

  <head>
    <title>Edit Department</title>
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
    //the approved variable holds how many fields have had their input types approved 
    $approved = 0;
    
    //create variables to hold values from the input form
    $name = $_POST['name'];
    $id = $_POST['id'];
    $manager = $_POST['manager'];
    $location = $_POST['location'];
    
   
    //regex patterns to validate inputs
    $num_pattern = '/\d/';
    
    //all following if statements are validating the fields edited by the user to make sure
    //they contain the correct data types
    if (is_numeric($id)) {
      $approved++;
    }
    else {
      echo "Error: A department ID can only contain numbers.<br>";
    }
    

    //if all fields have been approved, the department will be updated in the database 
    if ($approved == 4) {
      $num_id=(int)$_POST['id'];

      $collection->updateOne(
          ['_id'=>$num_id],
          [
            '$set'=>[
                'name'=>$name,
                'manager'=>$manager,
                'location'=>$location,
            ]
          ]
      );
    }
    else {
      echo "Operation unsuccessful: Employee was not edited, please try again.";
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
