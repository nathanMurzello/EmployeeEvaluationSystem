<html>
     <!--Frontend/GUI page designed and developed by Bonnie Atelsek and Terrence Gaines--> 
     <head>
          <title>New Evaluation</title>
          <meta charset="utf-8"/>
          <link rel="stylesheet" href="./resources/construction.css">
     </head>
     <body>
     <?php
	     ##this script sets up the connection with the database on the cloud 
	     require 'vendor/autoload.php';
         $client = new MongoDB\Client(
         'mongodb+srv://techno:techno123@cluster0.k9zfj.mongodb.net/EmployeeSystem?retryWrites=true&w=majority');
         $collection=$client->selectCollection('EmployeeSystem','Evaluation');
	
         ##this section controls how each criteria question is weighted
	     $weight1 = .30;   ##criteria question 1 (30%)
	     $weight2 = .15;   ##criteria question 2 (15%)
	     $weight3 = .40;   ##criteria question 3 (40%)
	     $weight4 = .10;   ##criteria question 4 (10%)
	     $weight5 = .05;   ##criteria question 5 (5%)
         $approved = 0;
		 
         ##this section passes the values enter by the user to the database
	     $emp_id = $_POST['emp_id'];
         $eval_id = $_POST['eval_id'];
         $value1 = $_POST['value1'];
	     $value2 = $_POST['value2'];
	     $value3 = $_POST['value3'];
	     $value4 = $_POST['value4'];
	     $value5 = $_POST['value5'];
		 
		 ##this section check if the user input the correct data type.  
		 ##User will continue to receive an error message until they enter the correct data type as defined by the system
	
	     if (is_numeric($emp_id)) {
      	      $approved++;
   	          }
	     else {
	          echo "\nError: A employee id can only contain numbers.<br>";
	          }
    
	    if (is_numeric($eval_id)) {
	         $approved++;
	         }
	    else {
	         echo "\nError: An evaluation ID can only contain numbers.<br>";
	         }
			 
	    //calculate the evaluation raw score
        $score = (($value1*$weight1) + ($value2*$weight2) + ($value3*$weight3) + ($value4*$weight4) + ($value5*$weight5));
 	
	    if ($approved == 2) {
             echo "Evaluation successfully added.";
	         echo  "$emp_id, Evaluation raw score results are:, $score","%";
             $num_emp_id=(int)$_POST['emp_id'];
             $num_eval_id=(int)$_POST['eval_id'];
             $num_score=(double)$score;
             $insert=array(
             '_id'=>$num_eval_id,
             'employee id'=>$num_emp_id,
             'eval_score'=>$num_score
             );

        $collection->insertOne($insert);
        }
        else {
             echo "Operation unsuccessful: Evaluation was not added, please try again.";
	         echo  "$emp_id, Evaluation raw score results are:, $score","%";
        }


    ?>

    <div class = banner><a href= "./index.php"> Back </a></div>
    <div id= copyright>The Techonauts: Bonnie Atelsek - Matthew Kabat - Nathan Murzello - Terrence Gaines</div> 
  </body>
  </html>