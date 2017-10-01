<!DOCTYPE HTML> 
<html>
<head>
    <title>Sign-Up</title>
    <script src="https:ajax.googleapis.com/ajax/libs/jquery.min.js"></script>  
     <title>Blood Donation</title>
          <link rel="icon" type="image/jpg" href="final.jpeg"> 
         <link rel="stylesheet" href="design.css"> 
         <div id="fixed">
             <div id="topline">
                 <img id="logo" src="final.jpeg" alt='' />
                 <header><h1>Blood Donations</h1></header>
                 
                 <?php
                     session_start();
                     if(!empty($_SESSION))
                     {
                         if($_SESSION['email'] <> NULL)
                         {
                             echo  '<nav1 style="color:black; font: 19px Times New Roman; margin:0 9px;">'  .$_SESSION['email'].  '</nav1> ';
                 ?>
                         <form action="logout.php">
                             <nav1 id="login"><a>Logout</a></nav1>
                         </form>
 
                 <?php
                         }
                         else
                         {
                 ?>
                             <a href="Login.php" id="login">Login</a>
                 <?php
                         }
                     }
                     else
                     {
                 ?>
 
                 <a href="Login.php" id="login">Login</a>
                     
                 <?php
                     }
                 ?>
             </div>
        </div>
             <nav id="links">
                 <ul>
                    <li><a href="home.php">Home</a></li>
                     <li><a href="">Donor</a></li>
                     <li><a href="">Recipient</a></li>
                     <li><a href="">Blood Bank</a></li>
                </ul>
            </nav>
</head>
<body> 
  <div id="Sign-Up" style="padding-left:450px;"> 
            <fieldset style="width:30%">
            <legend>Registration Form</legend>
            <table border="0">  
                
    <form id="signUpForm" method="POST" action="RegisterConnect.php"> 
            
                 <td id="label">National ID</td>
                             <td> 
                                 <div class="col">
                                     <input type="int" name="NationalId" class="textbox" placeholder="National Id">
                                     <span class="focus-border">
                                         <i></i>
                                     </span>
                                 </div>
                             </td>
                            
        <tr> 
                <td id="label">First Name</td>
                                 <td> 
                                     <div class="col">
                                         <input type="text" name="FirstName" class="textbox" placeholder="First Name">
                                         <span class="focus-border">
                                             <i></i>
                                         </span>
                                     </div>
                                 </td> 
        </tr>
                            
        <tr>
                <td id="label">Second Name</td>
                                 <td> 
                                     <div class="col">
                                         <input type="text" name="SecondName" class="textbox" placeholder="Second Name">
                                         <span class="focus-border">
                                             <i></i>
                                         </span>
                                     </div>
                                 </td> 
        </tr>

        <tr>
                <td id="label">Email Address</td>
                                 <td> 
                                     <div class="col">
                                         <input type="text" name="EmailAddress" class="textbox" placeholder="Email Address">
                                         <span class="focus-border">
                                             <i></i>
                                         </span>
                                     </div>
                                 </td> 
        </tr>
              
        <tr>
                <td id="label">Phone Number</td>
                                 <td> 
                                     <div class="col">
                                         <input type="int" name="PhoneNumber" class="textbox" placeholder="PhoneNumber">
                                         <span class="focus-border">
                                             <i></i>
                                         </span>
                                     </div>
                                 </td> 
        </tr>
 
        <tr>
                <td id="label">Age</td>
                                 <td> 
                                     <div class="col">
                                         <input type="int" name="Age" class="textbox" placeholder="Age">
                                         <span class="focus-border">
                                             <i></i>
                                         </span>
                                     </div>
                                 </td> 
        </tr>
                 
        <tr>
            <td>User Type</td>
        </tr>
                    <td>
                        <div class="col">
                        <input type="radio" name="Type" value="Donor" onclick="disableReasons()">Donor<br><br>
                        <input type="radio" name="Type" value="Recipient" id="reason" onclick="enableReasons()">Recipient<br>
                         <span class="focus-border">
                                <i></i>
                             </span>
                        </div>
                     </td>
         
        
            <tr>
                <div class="col">

                    Blood Group 
                    <select name ="BloodType">
                        <option value="A+"> A+</option>
                        <option value="A-"> A-</option>
                        <option value="B+"> B+</option>
                        <option value="B-"> B-</option>
                        <option value="AB+"> AB+</option>
                        <option value="AB-"> AB-</option>
                        <option value="O+"> O+</option>
                        <option value="O-"> O-</option>
                    </select>
                </div>
            </tr>
         <br>       
        <tr>
            <td>Reason</td></tr>
                <tr>
                    <div class="col">
                        <td id="reasons">
                    <input type="radio" name="Reason" value="Accident">Accident<br><br>
                    <input type="radio" name="Reason" value="Sickness">Sickness<br><br>
                    <input type="radio" name="Reason" value="Surgery">Surgery <br><br>
                    <input type="radio" name="Reason" value="Any other reason">Any other reason<br>
                        </td>
                    </div>
                </tr>
        <tr>
                <td id="label">Password</td>
                                 <td> 
                                     <div class="col">
                                         <input type="password" name="Password" class="textbox" placeholder="Password">
                                         <span class="focus-border">
                                             <i></i>
                                         </span>
                                     </div>
                                 </td> 
        </tr>
        <tr>
                <td id="label">Confirm Password</td>
                                 <td> 
                                     <div class="col">
                                         <input type="password" name="cpass" class="textbox" placeholder="Confirm Password">
                                         <span class="focus-border">
                                             <i></i>
                                         </span>
                                     </div>
                                 </td> 
        </tr>
        
        <tr> 
                               <td id="label">
                                     <div class="col">
                                         <input id="button" type="submit" name="submit" value="Sign-Up" class="btn">
                                         <span class="focus-border">
                                             <i></i>
                                         </span>
                                     </div>
                                 </td> 
                             </tr> 
                </form>
            </table> 
        </fieldset> 
    </div>

<script>
	var reasons = document.getElementById('reasons');
	
	function disableReasons(){
		reasons.style.display = 'none';
	}
	
	function enableReasons(){
		reasons.style.display = 'block';
	}
	
</script>

</body>
</html>

