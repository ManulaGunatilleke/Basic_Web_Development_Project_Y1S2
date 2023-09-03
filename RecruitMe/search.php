<?php
include 'connectionphp.php';
$search_details='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from search where `Job Title` like '%$search%'");
        $stmt->execute();
        $search_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
    }else{
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from search");
        $stmt->execute();
        $search_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}

if(isset($_POST['computerSearch'])){
    $stmt = $con->prepare("select * from search where `Job Title` like '%software%'");
    $stmt->execute();
    $search_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

if(isset($_POST['accountingSearch'])){
    $stmt = $con->prepare("select * from search where `Job Title` like '%account%'");
    $stmt->execute();
    $search_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

if(isset($_POST['medicalSearch'])){
    $stmt = $con->prepare("select * from search where `Job Title` like '%doctor%'");
    $stmt->execute();
    $search_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

if(isset($_POST['marketingSearch'])){
    $stmt = $con->prepare("select * from search where `Job Title` like '%sales%'");
    $stmt->execute();
    $search_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

if(isset($_POST['managementSearch'])){
    $stmt = $con->prepare("select * from search where `Job Title` like '%project%'");
    $stmt->execute();
    $search_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
 
?>

<!DOCTYPE html>
<head>
<title>Search</title>
  <meta charset = "UTF-8">
  <meta meta http-equiv= "x-ua-compatible" content= "ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- connect style.css -->
  <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/search.css">
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

    <br><br>

<!-- my part -->
    <table border="0" height="100%" width="100%" cellspacing="20px" cellpadding="10px">
        <tr height="5%" width="100%" align="center">
            <td >
                <form action="#" method="post">
                    <input type="text" name="search" placeholder="Search title by job title">
                    <input type="submit" value="Search" name="save"> 
                    <a href="advanceSearch.php" class="searchText">Advance Search</a><br>
                    
                </form>
            </td>
        </tr>
        <tr height="10%" width="100%" align="center">
            <td >
                <h3>Top Categories</h3>
            </td>
        </tr>
        <tr height="45%" width="100%">
            <td>
                <div class="categoryView">
                    <div class="card">
                        <img src="images/pc.png" alt="Avatar" style="width:100%">
                        <div class="container">
                          <h5><b>Computer<br>&amp; IT</b></h5>
                          <form action="#" method="post" >
                            <button type="submit" name="computerSearch">See Jobs </button>
                          </form>
                        </div>
                    </div> 
                    
                    <div class="card">
                    <img src="images/accounting.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h5><b>Accounting<br> &amp; Finance</b></h5>
                        <form action="#" method="post" >
                            <button type="submit" name="accountingSearch">See Jobs </button>
                        </form>
                    </div>
                    </div> 

                    <div class="card">
                    <img src="images/health.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h5><b>Medical<br> &amp; Health</b></h5>
                        <form action="#" method="post" >
                            <button type="submit" name="medicalSearch">See Jobs </button>
                        </form>                    </div>
                    </div> 

                    <div class="card">
                    <img src="images/marketing.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h5><b><br><br>Marketing</b></h5>
                        <form action="#" method="post" >
                            <button type="submit" name="marketingSearch">See Jobs </button>
                        </form>                    </div>
                    </div> 

                    <div class="card">
                    <img src="images/setting.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h5><b>Project Management</b></h5>
                        <form action="#" method="post" ><br>
                            <button type="submit" name="managementSearch">See Jobs </button>
                        </form>
                    </div>
                    </div> 
                </div>
            </td>
        </tr>
        <tr height="10%" width="100%" align="left">
            <td >
                <h3 style="margin-left:30px; margin-bottom:0px;">Jobs Search Result:</h3>
            </td>
        </tr>
        <tr height="45%" width="100%">
            <td style="padding:5px">
                <div style="background-color:white;">
                <!-- loop the individual data -->
                    <?php
                        if(!$search_details)
                        {
                            echo '<div class="jobCard">
                            <table width="100%" height="100%" border="0">
                                <tr height="10%"   width="100%">
                                    <td width="100%" height="100%" align="center">
                                        <h4 style="margin:5px;">No Data Found</h4>
                                    </td>
                                </tr>
                            </table>   
                        </div>';
                        }
                        else{
                            foreach($search_details as $key=>$value)
                            {
                    ?>
                            <div class="jobCard">
                                <table width="100%" height="100%" border="0">
                                    <tr height="10%"   width="100%">
                                        <td width="100%" height="100%">
                                            <h4 style="margin:5px;"><?php echo $value['Job Title'];?></h4>
                                        </td>
                                        <td>
                                        <td rowspan="3">
                                            <button style="margin-right:30px;">Apply</button>
                                        </td>
                                    </tr>
                                    <tr height="10%"   width="100%">
                                        <td width="100%" height="100%">
                                            <div id="tagContainer">
                                            <div class="tagShade">
                                                <b>Salary:</b> &nbsp;Rs.<?php echo $value['Salary'];?>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr height="80%"   width="100%">
                                        <td width="100%" height="100%">
                                            <p style="margin:5px;" style="font-size:15px;">
                                                <b>Location:</b> <?php echo $value['Location'];?> &nbsp; | &nbsp;
                                                <b>Industry:</b> <?php echo $value['Industry'];?> &nbsp; | &nbsp;
                                                <b>Company:</b> <?php echo $value['Company'];?>
                                            </p>
                                        </td>
                                    </tr>
                                </table>   
                            </div>
                                
                    <?php
                            }
                            
                        }
                    ?>
                     
                    
                </div>
            </td>
        </tr>
    </table>   
    <!--end of my part  -->
    
</body>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</html>