<!-- IT21311086 
 Dharmadasa.P.S.K -->
<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background-image: url("images/job5.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;  
                background-size: contain;
               
            }
            input[type=text] {
                position:absolute;
                right:700px;
                width:300px;
                box-sizing: border-box;
                border:2px solid #ccc;
                border-radius: 4px;
                font-size: 14px;
                background-color: white;
                background-image: url('sss.png');
                background-position: 10px 10px; 
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
                transition: width 0.4s ease-in-out;

            }
            .leftcolumn{
                
                float:left;
                width:25%;
                height: 400px;
                padding:20px;
                overflow: scroll;
                
            }
            .rightcolumn{
                float:left;
                width: 65%;
                padding-left:20px;
                
            }
            .row:after{
                content: "";
                display: table;
                clear: both;
            }
            .scrolbox{
                background-color: rgb(234, 239, 243);
                width: auto;
                height: auto;
                padding: 10px;
               
            }
            
  
        </style>

    </head>
    <body>
	<?php

    include('Header.php');

    ?>
    <link rel="Header" href="Header.php">
        <h3 style="text-align:center;">Search Our available jobs below</h3>
        <form>
            <input type="text" name="search" placeholder="Search by job title , Keyword">
            <input style="position:absolute ; right:400px " type="text" name="search" placeholder="Location">
            <p style="position:absolute ; right:300px">Advanced</p>
        </form>
        <br>
        <br>
        <br>
        <h3 style="text-align:center;">Our Trending Jobs</h3>
        <div class="row">
        <div class="leftcolumn">
            <h3 style="text-align:center"><b>Job Vacancies</b></h3>
            <div class="scrolbox">
                <a href="https://www.hcltech.com/campaign/careers-sri-lanka">
                <img src="images/hcl_logo.png" width="70px" height="50px">
            <p>Software Engineerview Job

                HCL Financial Services
                Colombo · Full-time
                Posted 26 days ago
                via LinkedIn</p></a>
            </div>
                <br>
                <div class="scrolbox">
                    <a href="https://www.spotjobs.lk/job/sales-executive-show-room-10876">                    
					<img src="images/images1.png" width="70px" height="50px">
                <p>Showroom Sales ExecutiveShowroom Sales Executive
                    HopeHR
                    Sri Lanka
                </p></a>
                </div>
                    <br>
                    <div class="scrolbox">
                        <a href="https://www.glassdoor.com/Job-Descriptions/Machine-Operator.htm">
                        <img src="images/images1.png" width="70px" height="50px">
                 <p>Operators in Polonnaruwa
                    Owner
                    Polonnaruwa
                 </p> </a>
                    </div>
                    <br>
                    <div class="scrolbox">
                        <a href="https://jobeka.lk/jobs/Micronet-Global-Services-Merchandiser-2022-05-17-942092">
                        <img src="images/images2.jpg" width="70px" height="50px">

                         <p>Operators in Polonnaruwa
                             Owner
                            Polonnaruwa</p></a>
                    
                    </div>  
                        <br>
                        <div class="scrolbox">
                            <a href="https://rainbowpages.lk/other/unclassified/mahesh-e-mallawaratchie-enterprises/">
                            <img src="images/image3.jpg" width="70px" height="50px">
                        <p>Merchandiser in Sri Lanka
                            Micronet Global Services (Pvt) Ltd
                            Sri Lanka
                        </p></a>
                    </div>
                            <br>
                            <div class="scrolbox">
                                <a href="https://unionassurance.com/our-team/">
                                <img src="images/images5.jpg" width="70px" height="50px">
                            <p>Account Assistant (Male) in Sri Lanka
                                Mahesh Mallawaratchie Enterprises (Pvt) Ltd
                                Sri Lanka
                            </p> </a>
                        </div>
                                <br>
                                <div class="scrolbox">
                                    <a href="https://ikman.lk/en/ad/hotel-operations-executive-colombo-colombo">
                                    <img src="images/image3.jpg" width="70px" height="50px">
                                <p>Customer Service Executive in Sri Lanka
                                    Union Assurance PLC
                                    Sri Lanka
                                </p></a>
                                </div>
                                    <br>
                                    <div class="scrolbox">
                                        <a href="https://thirdspacemaths.typeform.com/to/uGPiLV6r?typeform-source=www.google.com">
                                        <img src="images/images4.jpg" width="70px" height="50px">
                                    <p>Hotel Operations Executive - Colombo
                                        AsianLanka
                                        Colombo
                                    </p></a>
                                </div>
          </div>
        <div class="rightcolumn">
            <h3 style="text-align: center;"><b>Our Trending Searches</b></h3>
            <a href="https://www.indeed.com/q-Driver-jobs.html?vjk=0c6506d14e171a92">
            <img src="images/driver1.jpg" width="200" height="120">
            </a>
            <a href="https://www.securityvacancies.com/">
            <img src="images/securitym.jpg" width="200" height="120">
            </a>
            <a href="https://www.alljobspo.com/sri-lanka-jobs/teacher-jobs-in-sri-lanka">
            <img src="images/teacher.jpg" width="200" height="120">
            </a>
            <a href="https://www.turing.com/jobs?s=ads_developers-bing-sem&n=1&campaignid=437075473&adid=1334808727168980&placement=freelance%20app%20developers%20resume&creativeid=&device=c&msclkid=3ce395fe5e8c1dbaab2af77194ec69d8">
            <img src="images/sdevoloper.jpg" width="200" height="120">
             </a>
             <h3 style="text-align:center"><b>Top hiring companies</b></h3>
             <a href="https://www.ibm.com/employment/client-experience/"> 
             <img src="images/ibm.jpg" width="200" height="120">
             </a>
             <a href="https://developers.turing.com/?s=ads_developers-bing-sem&n=1&campaignid=437075473&adid=1335908238432885&placement=oracle%20java%20programmer&creativeid=&device=c&msclkid=109983d844f71ec6a18ae150e2c4c240">
             <img src="images/oracle1.jpg" width="200" height="120">
             </a>
             <a href="https://www.amazon.jobs/en/job_categories">
             <img src="images/Amazon.jpg" width="200" height="120">
             </a>
             <a href="https://careers.microsoft.com/us/en">            
             <img src="images/microsoft.jpg" width="200" height="120">
             </a>
        </div>
    </div>
    <link rel="Footer" href="Footer.php">
    <?php

    include('Footer.php');

    ?>    
    </body>
</html>