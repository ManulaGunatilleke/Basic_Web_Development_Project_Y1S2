<!--IT21321436 Gunatilleke M. B. D. S-->
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="CSS/Employer.css">
     
    

    <title>For Employer</title> 
</head>
<body>

<div class="page">

    <?php

    include('Header.php');

    ?>
	
	
    <div class="container">
	

        <header>1.Sign up....2.Biling</header>

        <form action="HomePage.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
            <div class="first form ">
                <div class="Pesonal Details">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter your First name" name= "FName" required>
                        </div>
						
						<div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter your Last name" name= "LName" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" name= "DOB" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email" name= "email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter mobile number" name= "CNO" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name = "Gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="Company Details">
                    <span class="title">Company Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Job Title</label>
                            <select name = "jTitle" required>
                                <option disabled selected>Select Job Title</option>
                                <option>Full Time</option>
                                <option>Part Time</option>
                                <option>Internship</option>
								<option>Local Job</option>
								<option>Forign Job</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Company Name</label>
                            <input type="text" placeholder="Enter Company Name" name= "cName" required>
                        </div>

                        <div class="input-field">
                            <label>Company Email</label>
                            <input type="text" placeholder="Enter Company Email" name= "cmail" required>
                        </div>

                        <div class="input-field">
                            <label>Industry</label>
                            <select name = "Industry" required>
                                <option disabled selected>Select Industry</option>
                                <option>IT</option>
                                <option>Low</option>
                                <option>Engeneering</option>
								<option>Technology</option>
								<option> &lt;400000 </option>
                            </select>
                        </div>
						<div class="input-field">
                            <label>Location</label>
                            <input type="text" placeholder="Enter Company Location" name= "cLocation" required>
                        </div>
						<div class="input-field">
                            <label>Salary Range</label>
                            <select name = "sRange" required>
                                <option disabled selected>Select Job Title</option>
                                <option>25000</option>
                                <option>80000</option>
                                <option>100000</option>
								<option>400000</option>
								
                            </select>
                        </div>
					</div>	
                    <button class="nextBtn">
                        <span class="btnText">Continue to biling</span>
                        
                    </button>						
                                     
                </div> 
            </div>

            <div class="form second">
                <div class="details biling">
                    <span class="title">Payment Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Payment Type</label>
                            <select name = "pType" required>
                                <option disabled selected>Select the type</option>
                                <option>Paypal</option>
                                <option>Mastercard</option>
                                <option>Visacard</option>								
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Payment Amount</label>
                            <input type="number" placeholder="Enter Payment Amount" name= "pAmount" required>
                        </div>

                        <div class="input-field">
                            <label>Discription</label>
                            <input type="text" placeholder="Enter your discription" name= "Discription" required>
                        </div>

                        <div class="input-field">
                            <label>Card Number</label>
                            <input type="number" placeholder="Enter your Card Number" name= "cNo" required>
                        </div>

                        <div class="input-field">
                            <label>Date</label>                          
                            <input type="date" placeholder="Enter Payment date" name= "Date" required>
                        </div>
						
						<div class= "input-field">
					     
						 <label>Choose A Package</label>
                            <select name = "PKG" required>
                                <option disabled selected>Select A Package</option>
                                <option>Pro Package</option>
                                <option>Premio Package</option>
                                <option>Free Package</option>
								<option><Button>Special Offer</Button></option>
                            </select>
                    </div>  
						
                    </div>
                </div>

                <div class="details Bank">
                    <span class="title">Bank Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Bank Name</label>
                            <input type="text" placeholder="Enter Bank Name" name= "bName" required>
                        </div>

                        <div class="input-field">
                            <label>Bank Account Name</label>
                            <input type="text" placeholder="Enter Account Name" name= "bAccName" required>
                        </div>

                        <div class="input-field">
                            <label>Bank Account Number</label>
                            <input type="number" placeholder="Enter Account Number" name= "bAccNumber" required>
                        </div>

                        <div class="input-field">
                            <label>Location</label>
                            <input type="text" placeholder="Enter Address" name= "Location" required>
                        </div>
                    </div>
					
					 
					   
                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText" name="btnSubmit">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
			
        </form>
				
		
    </div>
	
	
    <?php

    include('Footer.php');

    ?>
	
	
</div>

    <script src="JS/Employer.js"></script>

    
</body>
</html>
<!--	

"jTitle" "cName" "cLocation" "sRange" "Industry" -> search
"bName" "bAccName" "bAccNumber" "Location" "pType"
"pAmount" "Discription" "cNo" "Date" "PKG"
-->