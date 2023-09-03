<?php
include 'connectionphp.php';
$search_details='';
if(isset($_POST['save']))
{
  $jobSearch = $_POST['jobSearch'];
  $loactionSearch = $_POST['loactionSearch'];
  $industrySearch = $_POST['industrySearch'];
  $companySearch = $_POST['companySearch'];
  $stmt = $con->prepare("select * from search where `Job Title` like '%$jobSearch%' AND `Location` like '%$loactionSearch%' AND `Industry` like '%$industrySearch%' AND `Company` like '%$companySearch%'");
  $stmt->execute();
  $search_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
} 
?>
<!DOCTYPE html>
<head>
  <title>Advance Search</title>
  <meta charset = "UTF-8">
  <meta meta http-equiv= "x-ua-compatible" content= "ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- connect style.css -->
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="search.css">
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   
  <a class="navbar-brand" href="HomePage.php"><span style="padding-left: 50px;"><img src="images/RecruitMe.png" alt="recruit logo" width="180" height="75" class="P101_Header__LogoImage-felo84-1 efYqHU"><span style="padding-left: 50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="search.php">Job Search <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="advanceSearch.php">Salary Tools</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Build Resume.php">Upload/Buld Resume</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="TopEmployears.php">Top Employers</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Media Room</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Contact us</a>
      </li>
      <li class="nav-item" style="padding-left: 100px;">
       <a class="nav-link" href="Employer.php">For Employers</a>
      </li>
      <span style="padding-left: 50px;">
      <table width="0">
      <tr>
         <th colspan="2"><center><img src="images/Log in Icon.jpg" alt="recruit logo" width="60px" height="30" class="P101_Header__LogoImage-felo84-1 efYqHU"></center></th> 
      </tr>
      <tr>
         <td><a href="form.php">Sign in</a>&nbsp</td>
         <td><a href="loginn.php">Log in</a></td> 
      </tr>
      </table>
       <!--<span style="padding-left: 10px;">
       <li class="nav-item">
        <a class="nav-link" href="#Register">Sign in</a>
        <a class="nav-link" href="#Register">Log in</a>
      </li>-->  
      </li>
    </ul>
  </div>
</nav>

 <!-- your part -->
    <form action="#" method="post">
        <table border="0" height="100%" width="100%" cellspacing="20px" cellpadding="5px">
            <tr>
                <td colspan="2" style="background-color:gray;">
                    <p>Advanced Job Search / &nbsp;<a href="search.php" class="aText">Go Back</a></p>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jobType">Job Type:</label>
                    <select name="jobSearch" id="jobType">
                        <option value="">select</option>
                        <option value="software">Software engineering</option>
                        <option value="lawyer">Lawyer</option>
                        <option value="architecture">Architecture</option>
                        <option value="teacher">Teacher</option>
                        <option value="Accountant">Accountant</option>
                        <option value="Sales Manager">Sales Manager</option>
                        <option value="Project Manager">Project Manager</option>
                        <option value="Doctor">Doctor</option>

                    </select>
                </td>
                
                <td>
                    <label for="Company">Company:</label>
                    <select name="companySearch" id="Company">
                        <option value="">select</option>
                        <option value="wso2">WSO2</option>
                        <option value="law school">Law School</option>
                        <option value="design">Design</option>
                        <option value="Hemas">Hemas</option>
                        <option value="Durdans">Durdans</option>
                        <option value="Kist">Kist</option>
                        <option value="Hemas">Hemas</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="Location">Location:</label>
                    <select name="loactionSearch" id="Location">
                        <option value="">select</option>
                        <option value="galle">Galle</option>
                        <option value="colombo">Colombo</option>
                        <option value="kandy">Kandy</option>
                        <option value="malabe">Malabe</option>
                    </select>
                </td>

            

                <td>
                    <label for="industry">Industry:</label>
                    <select name="industrySearch" id="industry">
                        <option value="">select</option>
                        <option value="it">IT</option>
                        <option value="engineering">Engineering</option>
                        <option value="arts">Arts</option>
                        <option value="Health">Health</option>
                        <option value="Law">Law</option>
                        <option value="business">Business</option>
                        <option value="Teaching">Teaching</option>

                    </select>
                </td>
            </tr>
  
            <tr>
                <td>

                </td>
                <td>
                    <input type="submit" name="save" value="Search" />
                    <input type="reset" value="Reset" />
                </td>
            </tr>

        </table>
    </form>
    <br>
    <br>
    <div class="searchresult_container" style="background-color:white; margin:40px;">          
      <table cellpadding="1px" cellspacing="50px" width="100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Job Title</th>
            <th>Location</th>
            <th>Industry</th>
            <th>Company</th>
            <th>Salary</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
                <?php
                 if(!$search_details)
                 {
                    echo '<tr>
                      <td colspan="6">
                        No data Found
                      </td>
                    </tr>';
                 }
                 else{
                    foreach($search_details as $key=>$value)
                    {
                        ?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $value['Job Title'];?></td>
                        <td><?php echo $value['Location'];?></td>
                        <td><?php echo $value['Industry'];?></td>
                        <td><?php echo $value['Company'];?></td>
                        <td><?php echo $value['Salary'];?></td>
                        <td><button style="padding:0px; margin:8px;">Apply</button></td>
                    </tr>
                         
                        <?php
                    }
                     
                 }
                ?>
             
         </tbody>
      </table>
    </div>
    <!-- end of my part -->
</body>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</html>