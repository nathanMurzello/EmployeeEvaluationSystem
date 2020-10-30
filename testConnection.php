<html>

  <head>
    <title>Database Real</title>
    <meta charset="utf-8"/>
  </head>
  
  <body>
    <!--Script to establish a connection with the database and insert user info.-->
    <?php
    echo "\nRunning PHP<br>";
    require 'vendor/autoload.php'; 
    echo "\nVendor Folder found<br>"; 
    $client = new MongoDB\Client(
      'mongodb+srv://techno:techno123@cluster0.k9zfj.mongodb.net/EmployeeSystem?retryWrites=true&w=majority');
    $collection=$client->selectCollection('EmployeeSystem','Department');
    echo "\nConnection Made<br>";
    
      $num_id=(int)$_POST['id'];
      $insert=array(
        '_id'=>$num_id,
        'name'=>$_POST['name'],
        'manager'=>$_POST['manager'],
        'location'=>$_POST['location'],
      );
      $collection->insertOne($insert);
      echo "\nData Uploaded<br>";
      ?>
    <!--Displays the back bar and the copyright bar at the bottom-->
    <div class = banner>
      <a href= "./test.php"> Back </a>
    </div>
        
    
    
  </body>

</html>