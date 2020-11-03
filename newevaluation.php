<html> 
     <!--Frontend/GUI page designed and developed by Bonnie Atelsek and Terrence Gaines--> 
     <head>
     <title>New Evaluation</title>
     <meta charset="utf-8"/>
     <link rel="stylesheet" href="./resources/newemployee.css">
     </head> 
     <body>
     <h1 class=banner>Enter your employee evaluation data</h1>
	 
	 <!--
	 The purchase of this form is to prompt the user to enter the required information and submit the results to the processing 
	 page called newemployeephp.php which will process the results of this form and send them to the database
	 -->
	 
     <form action="newevaluationphp.php" method="post">
	 
	 <!--There are special instructions grading criteria if the using is being graded for attending.-->
	 <!--The attendance criteria takes into consideration if the user has a zero attendance record.-->
	 
     <div class= description>
            Fill out all provided fields with the employee's evaluation information so that an evaluation can be added
            for them. <p>
			Rating Evaluation <p>
			(5 = Excellent, 4 = Good, 3 = Fair, 2 = Needs Improvement, 1 = Terrible)<p>
			For complaints: <p>   1 = none, 2 = 0 to 5, 3 = 6 to 10, 4 = 11 to 15, 5 = greater than 15
     </div>
      <!--If you would like to change the grade choice for each user choice then you would need to change the number assigned to the value attribute-->  
     <table> 
		   <tr>
                  <td align="left" valign="top" id="Contact"><strong>Evaluation ID:</strong></td>
                  <td align="left" valign="top"><input name="eval_id"  type="text" required /></td>
          </tr>
		   <tr>
                  <td align="left" valign="top" id="Contact"><strong>Employee ID:</strong></td>
                  <td align="left" valign="top"><input name="emp_id"  type="text" required /></td>
          </tr>
		  <tr>
                  <td align="left" valign="top" id="Contact"><strong>1. How many complaints?</strong></td>
                  <td align="left" valign="top"><input type="checkbox" name="value1" value="100"/>1<input type="checkbox" name="value1" value="90"/>2<input type="checkbox" name="value1" value="80"/>3<input type="checkbox" name="value1" value="70"/>4<input type="checkbox" name="value1" value="60"/>5</td>
          </tr>
		  <tr>
                  <td align="left" valign="top" id="Contact"><strong>2. Does the employee have good attendance?</strong></td>
                  <td align="left" valign="top"><input type="checkbox" name="value2" value="60"/>1<input type="checkbox" name="value2" value="70"/>2<input type="checkbox" name="value2" value="80"/>3<input type="checkbox" name="value2" value="90"/>4<input type="checkbox" name="value2" value="100"/>5</td>
          </tr>
          <tr>
                  <td align="left" valign="top" id="Contact"><strong>3.  Does employee follow directions well?</strong></td>
                  <td align="left" valign="top"><input type="checkbox" name="value3" value="60"/>1<input type="checkbox" name="value3" value="70"/>2<input type="checkbox" name="value3" value="80"/>3<input type="checkbox" name="value3" value="90"/>4<input type="checkbox" name="value3" value="100"/>5</td>
          </tr>
          <tr>
                  <td align="left" valign="top" id="Contact"><strong>4.  Does employee listen to the supervisor?</strong></td>
                  <td align="left" valign="top"><input type="checkbox" name="value4" value="60"/>1<input type="checkbox" name="value4" value="70"/>2<input type="checkbox" name="value4" value="80"/>3<input type="checkbox" name="value4" value="90"/>4<input type="checkbox" name="value4" value="100"/>5</td>
          </tr>
          <tr>
                  <td align="left" valign="top" id="Contact"><strong>5.  Is the employee a good team player?</strong></td>
                  <td align="left" valign="top"><input type="checkbox" name="value5" value="60"/>1<input type="checkbox" name="value5" value="70"/>2<input type="checkbox" name="value5" value="80"/>3<input type="checkbox" name="value5" value="90"/>4<input type="checkbox" name="value5" value="100"/>5</td>
          </tr>  
		  <tr>
		  <td><input name="verify" type="checkbox" required> I certify that all the information entered above is accurate.</td>
          </tr>	
		  <tr>
		  <td><input type="submit" value="Create Evaluation" name="form_result"> <input type="reset"></td>
		  </tr>
          	  
    </table>    
    </form>
    
    <div id= copyright>The Techonauts: Bonnie Atelsek - Matthew Kabat - Nathan Murzello - Terrence Gaines</div>
    
    </body> 
</html> 