<html> 
     <!--Frontend/GUI page designed and developed by Bonnie Atelsek and Terrence Gaines--> 
     <head>
     <title>New Complaint</title>
     <meta charset="utf-8"/>
     <link rel="stylesheet" href="./resources/newemployee.css">
     </head> 
     <body>
     <h1 class=banner>Enter your Complaint about the Employee</h1>
	 
	 <!--
	 The purchase of this form is to prompt the user to enter the required information and submit the results to the processing 
	 page called newemployeephp.php which will process the results of this form and send them to the database
	 -->
	 
     <form action="newcomplaintphp.php" method="post">
	 
	 <!--There are special instructions grading criteria if the using is being graded for attending.-->
	 <!--The attendance criteria takes into consideration if the user has a zero attendance record.-->
	 
     <div class= description>
            Fill out all provided details to report a complaint on this employee. <p>
			
     </div>
      <!--If you would like to change the grade choice for each user choice then you would need to change the number assigned to the value attribute-->  
     <table> 
		   <tr>
                  <td align="left" valign="top" id="Contact"><strong>Complaint ID:</strong></td>
                  <td align="left" valign="top"><input name="complaint_id"  type="text" required /></td>
          </tr>
		   <tr>
                  <td align="left" valign="top" id="Contact"><strong>Employee ID:</strong></td>
                  <td align="left" valign="top"><input name="emp_id"  type="text" required /></td>
          </tr>
		  <tr>
                  <td align="left" valign="top" id="Contact"><strong>Reason for Complaint</strong></td>
                  <td align="left" valign="top"><input type="text" value="value1"/></td>
          </tr>
		 <tr>
                  <td align="left" valign="top" id="Contact"><strong>Details</strong></td>
                  <td align="left" valign="top"><input type="text" value="value2"/></td>
          </tr>
		  <tr>
		  <td><input name="verify" type="checkbox" required> I certify that all the information entered above is accurate.</td>
          </tr>	
		  <tr>
		  <td><input type="submit" value="Submit Complaint" name="form_result"> <input type="reset"></td>
		  </tr>
          	  
    </table>    
    </form>
    
    <div id= copyright>The Techonauts: Bonnie Atelsek - Matthew Kabat - Nathan Murzello - Terrence Gaines</div>
    
    </body> 
</html> 