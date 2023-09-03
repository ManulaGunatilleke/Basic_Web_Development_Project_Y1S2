<!--IT21321436 Gunatilleke M. B. D. S-->
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="CSS/Build Resume.css">
     
    



    <?php

    include('Header.php');

    ?>
	
	<div class="container2">
    <form class = "Main" >
    <table class = "tableTwo">
		<tr colspan = "2" align = "left">
		   <th class = "Basic">Basic Details</th>
		</tr>
		<tr>
		   <td class = "image">
		   
		     <form class "imageup" method="post" enctype="multipart/form-data">
             <input type = "hidden" value = "1000000" name = "MAX_FILE_SIZE">
             <p><input type="file" name="uploadedfile1"></p>
             <input type = "submit" name = "submit" value = "upload">
             
			 <?php
             
             
             if(isset($_POST["submit"])) {
				$target_path = "uploads/";
				$target_file = $target_path . basename($_FILES["uploadedfile1"]["name"]);
				if(isset($_FILES["uploadedfile1"])) {
                    if (move_uploaded_file($_FILES["uploadedfile1"]["tmp_name"],$target_file)){
					    echo "The file ". basename( $_FILES["uploadedfile1"]["name"]). " is uploaded.";
					    //$conn=new mysqli("127.0.0.1","root","","recruitme");//Create Connection
                        //$sql="insert into resume('image')Values('$target_file')";
					    if ($conn->query($sql)==True)
                        {
                        echo "<br/><br/>";
					    header("Location: BuildResume.php");
                        }
					    else{
						    echo "Error:".($sql.$conn->error);
					    }
                    }
               
                }
			}
			?> 
			
			 
		   </td>
		   
		   
		   <td class = "form">
		    
			  <div class="container3">
                <form class = "BasicDetails" action = "HomePage.php">
				<table class = "forBasic">
				<tr>
                  <td><label class = "lable">First Name: </label></td>
                  <td>&nbsp;&nbsp;&nbsp;<input type="text" id="fname" name="firstname" placeholder="Enter Your First Name"></td>
                </tr>
				
				<tr>
                  <td><label class = "lable">Last Name: </label></td>
                  <td>&nbsp;&nbsp;&nbsp;<input type="text" id="lname" name="lastname" placeholder="Enter Your Last Name"></td>
                </tr>
				
				<tr>
                  <td><label class = "lable">Age: </label></td>
                  <td>&nbsp;&nbsp;&nbsp;<input type="text" id="lname" name="Age" placeholder="Enter Your Age"></td>
				</tr> 
				
				<tr>
				  <td><label class = "lable">Email: </label></td>
                  <td>&nbsp;&nbsp;&nbsp;<input type="text" id="lname" name="Email" placeholder="Enter Your Email"></td>
				</tr>
				
				<tr>
				  <td><label class = "lable">Phone: </label></td>
                  <td>&nbsp;&nbsp;&nbsp;<input type="text" id="lname" name="Phone" placeholder="Enter Your Phone"></td>
				</tr>  
				</table>
			    </form>
			  </div>
		   </td>
		</tr>
		
    </table>		
    </form>
    </div>
	<hr class = "hrT">
	<div class="container2">
    <form class = "Main">
    <table class = "tableTwo">
		<tr colspan = "2" align = "left">
		   <th class = "Basic">Advanced Details</th>
		</tr>
		<tr>
		   <td class = "image2"></td>
		   <td class = "form">
		    
			  <div class="container3">
                <form class = "BasicDetails">
				<table class = "forBasic">
				<tr>
                  <td><label class = "lable">sex: </label></td>
                  <td>&nbsp;&nbsp;&nbsp;<select name = "Gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select></td>
                </tr>
				
				<tr>
                  <td><label class = "lable">Choose Ethnicity Race/definition: </label></td>
                  <td>&nbsp;&nbsp;&nbsp;<select name = "Ethnicity" required>
                                <option disabled selected>Select Ethnicity</option>
                                <option>White</option>
                                <option>Black or African American</option>
                                <option>American Indian or Alaska Native</option>
								<option>Asian</option>
								<option>Native Hawaiian or Other Pacific Islander</option>
                            </select></td>
                </tr>
				
				<tr>
                  <td><label class = "lable">Protected veteran status Am I a protected viteran: </label></td>
                  <td>&nbsp;&nbsp;&nbsp;<select name = "veteran" required>
                                <option disabled selected>Select one</option>
                                <option>Yes</option>
                                <option>No</option>                                
                            </select></td>
				</tr> 
				
				<tr>
				  <td><label class = "lable">Upload Cv: </label></td>
                  <td>&nbsp;&nbsp;&nbsp;<form method="post" enctype="multipart/form-data">
                    <input type = "hidden" value = "1000000" name = "MAX_FILE_SIZE">
                    <input type="file" name="uploadedfile1">
                    <input type = "submit" name = "submit1" value = "upload">
			        </form> 
					
					
					<?php
             
                    
                    if(isset($_POST["submit1"])) {
				    $target_path = "uploads/";
				    $target_path = $target_path . basename($_FILES["uploadedfile1"]["name"]);
                    if (move_uploaded_file($_FILES["uploadedfile1"]["tmp_name"],$target_path)){
					$conn=new mysqli("127.0.0.1","root","","recruitme");//Create Connection
                    $sql1="insert into resume('CV')Values('$target_path')";
					if ($conn->query($sql1)==True)
                    {
                    echo "<br/><br/>";
					header("Location: BuildResume.php");
                    }
					else{
						echo "Error:".($sql1.$conn->error);
					}
                }
               
            }
			?> 
					
					
					
					
				<tr>
				    <td></td>
					<td><br/>&nbsp;&nbsp;&nbsp;<input type="submit" name = "submit2" Value="Submit"></p></td>
				</tr>
				
				
				
		<?php
				if(isset($_POST["submit2"])) {
                require "dbconfig";
                        
                $sql = "insert into resume('First_Name','Last_Name','Age','Email','Phone','Sex')
	            Values('FName','LName','Age','Email','Phone','Gender');";

                if (mysqli_query($conn, $sql)) {
                 echo "New record created successfully";
                } else {
                 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

				mysqli_close($conn);
				header("Location: HomePage.php");
				}
?>
				
			 
			      </td>
				</tr>
				
				
				 
				</table>
			    </form>
			  </div>
		   </td>
		</tr>
		
    </table>		
    </form>
    </div>
	
	<?php

    include('Footer.php');

    ?>
	


    
    
</body>
</html>