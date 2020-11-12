<html>
     <!--Frontend/GUI page designed and developed by Bonnie Atelsek and Terrence Gaines--> 
     <head>
          <title>New Complaint</title>
          <meta charset="utf-8"/>
          <link rel="stylesheet" href="./resources/construction.css">
     </head>
     <body>
     <?php
	     ##this script sets up the connection with the database on the cloud 
	     require 'vendor/autoload.php';
         $client = new MongoDB\Client(
         'mongodb+srv://techno:techno123@cluster0.k9zfj.mongodb.net/EmployeeSystem?retryWrites=true&w=majority');
         $collection=$client->selectCollection('EmployeeSystem','Complaint');
	
         
         $approved = 0;
		 
         ##this section passes the values enter by the user to the database
	     $complaint_id = $_POST['complaint_id'];
          $emp_id = $_POST['emp_id'];
          $Reason = $_POST['Reason'];
	     $Details = $_POST['Details'];
	     
		 
		 ##this section check if the user input the correct data type.  
		 ##User will continue to receive an error message until they enter the correct data type as defined by the system
	
	     if (is_numeric($complaint_id)) {
      	      $approved++;
   	          }
	     else {
	          echo "\nError: A complaint id can only contain numbers.<br>";
	          }
    
	    if (is_numeric($emp_id)) {
	         $approved++;
	         }
	    else {
	         echo "\nError: An Employee ID can only contain numbers.<br>";
	         }
			 
	   
 	
	    if ($approved == 2) {
             echo "Complaint successfully added.";
	        
             $num_complaint_id=(int)$complaint_id;
             $num_emp_id=(int)$emp_id;
             
             $insert=array(
             '_id'=>$num_complaint_id,
             'emp_id'=>$num_emp_id,
             'Reason'=>$Reason,
		   'Details'=>$Details,
             );

        $collection->insertOne($insert);
        }
        else {
             echo "Operation unsuccessful: Complaint was not added, please try again.";
	         
        }


    ?>

    <div class = banner><a href= "./index.php"> Back </a></div>
    <div id= copyright>The Techonauts: Bonnie Atelsek - Matthew Kabat - Nathan Murzello - Terrence Gaines</div> 
  </body>
  </html>