
.<!DOCTYPE html>
<?php
session_start();
$host="localhost";
$user="root";
$password="";
$con=mysqli_connect($host,$user,$password,"studentreg");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

            
 
                    
                    
   if (!empty($_POST['Username']) 
               && !empty($_POST['Password'])
                              && !empty($_POST['Usertype']))


            {

         // if($_POST['Usertype'] == $row["Usertype"]) 
          //{
             if($_POST['Usertype']=='Admin'){
                 $sql = "SELECT Password FROM studt where Username='" . $_POST['Username'] . "'";

             $result = mysqli_query($con, $sql);
        
if (mysqli_num_rows($result) > 0) {

$row = mysqli_fetch_assoc($result);
    
    
if($_POST['Password'] == $row["Password"])
{
   // echo "here";
    header("refresh:0; url=adminwel.html");
    exit();
//echo "<script> window.location.assign('\implemen\sturegister.html'); </script>";
}

              ?> <script type="text/javascript"> alert("Your entered wrong password ");</script><?php
                           header("refresh:0; url=loginnew.php");  
            
                       //header("refresh:0; url=loginnew.php");
                exit();
             }
                 
                   ?> <script type="text/javascript"> alert("You entered wrong username and password");</script><?php
                           header("refresh:0; url=loginnew.php");    
                 
                 
                 //  header("refresh:0; url=loginnew.php");
                 exit();

             }
                  

                 // echo 'Wrong password';
   // }
          
                       else if($_POST['Usertype']=='Faculty'){
                           $sql = "SELECT Password FROM registerfaculty where Faculty_name='" . $_POST['Username'] . "'";
             $result = mysqli_query($con, $sql);
        //echo "here";                        
//echo $_POST['Faculty_no'];
               // echo $_POST['Enrollment_no'];
if (mysqli_num_rows($result) > 0) {
    //echo "here";
    // output data of each row
$row = mysqli_fetch_assoc($result);
    //echo "here";
        $_SESSION['fname']=$_POST['Username'];

if($_POST['Password'] == $row["Password"])
{
   // echo "here";
    header("refresh:0; url=facultyseefeedback.php");
    exit();
//echo "<script> window.location.assign('\implemen\sturegister.html'); </script>";
}
    else
    //echo 'You have entered valid user name and password';
            	//header("refresh:0; url=loginnew.php");
        
         ?> <script type="text/javascript"> alert("Your entered wrong password ");</script><?php
                           header("refresh:0; url=loginnew.php"); 
    exit();
    
}
             else
                    //  header("refresh:0; url=loginnew.php");
                  ?> <script type="text/javascript"> alert("You entered wrong username and password");</script><?php
                           header("refresh:0; url=loginnew.php"); 
                           exit();

                 // echo 'Wrong password';
   // }
          }

                           
                               else if($_POST['Usertype']=='Student'){
                                    $sql = "SELECT Password FROM registerstudent where Enrollment_no='" . $_POST['Username'] . "'";
             $result = mysqli_query($con, $sql);
        //echo "here";                        
//echo $_POST['Faculty_no'];
               // echo $_POST['Enrollment_no'];
if (mysqli_num_rows($result) > 0) {
    //echo "here";
    // output data of each row
$row = mysqli_fetch_assoc($result);
   // echo "here";
        $_SESSION["enno"] =$_POST['Username'];

if($_POST['Password'] == $row["Password"])
{
   // echo "here";
    header("refresh:0; url=givefeedback.php");
                 

    exit();
//echo "<script> window.location.assign('\implemen\sturegister.html'); </script>";
}
    else
    //echo 'You have entered valid user name and password';
            	//header("refresh:0; url=loginnew.php");
        
        
         ?> <script type="text/javascript"> alert("Your entered wrong password ");</script><?php
                           header("refresh:0; url=loginnew.php"); 
    exit();
    
    
    
}
            // else
                                   
                                    ?> <script type="text/javascript"> alert("You entered wrong username and password");</script><?php
                           header("refresh:0; url=loginnew.php"); 
                      //header("refresh:0; url=loginnew.php");
                                 exit();

                 // echo 'Wrong password';
   // }
          }
                // header("refresh:0; url=loginnew.php");
                                   //exit();
                                   
                                   
     ?> <script type="text/javascript"> alert("You select wrong user");</script><?php
                           header("refresh:0; url=loginnew.php");       
                                   
                                   
                                   
                              // }
      
                           
                       }

              
              
              
              
              
          ?>

       
       
       
       
				
<html>
<head>
    <meta charset="utf-8">
	<title>Project</title>
	<style type="text/css">
          h1{
           color:#fff;
               margin-top: 50px;
               margin-left: 500px;
               
           }
        form{
            margin-top: 30px;
            margin-left: 500px;
            color: #fff;
        }
        button{
            margin-left: auto;
        }
        body{
                         background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(img24.jpeg);


 height: 100vh;
 background-size: cover;
 background-position: center;

        }
        *
{
    margin:0;
    padding:0;
}

.main-nav
{
    float: right;
    list-style: none;
    margin-top: 10px;

}
.main-nav li
{
    display:inline-block;
}
.main-nav li a
{
    color: white;
    text-decoration: none;
    padding: 5px 20px;
    font-family: "Roboto", sans-serif;
    font-size: 20px;
}
.main-nav li.active a
{
    border: 1px solid white;
}
.main-nav li a:hover
{
    border: 1px solid white;
}

}
.main-nav
{
    float: right;
    list-style: none;
    margin-top: auto;

}
.main-nav li
{
    display:inline-block;
}
.main-nav li a
{
    color: white;
    text-decoration: none;
    padding: 5px 20px;
    font-family: "Roboto", sans-serif;
    font-size: 20px;
}
.main-nav li.active a
{
    border: 1px solid white;
        transition: 0.6s ease;

}
.main-nav li a:hover
{
    border: 1px solid white;
    background-color: #fff;
    color: #000;
     transition: 0.6s ease;

}
        
        .button{
background-color: white;
            color: black;
            padding: 9px 25px;
            border: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            
        }
        .button1{
            background-color: white;
            color: black;
            border: 2px solid #4caf50;
            left: 40%;
            top:42%;
        }
         .button2{
            background-color: white;
            color: black;
            border: 2px solid #4caf50;
             left: 46%;
            top:42%;
             
             
        }
        .button:hover{
            background-color: #4caf50;
            color: white;
        }

        
           </style>
        
    
</head>
    <body>

    
            <header>



            <ul class="main-nav">
                        <li class="active"><a href="">Home</a></li>

            <li><a href="verification.html">Student Registration</a></li>
                            <li><a href="verifyfaculty.html">Faculty Registration</a></li>

           <!-- <li><a href="about.html">About us</a></li>-->
    

</ul>
        <br>
        <br>
    

        
                <h1>LOGIN HERE</h1>

	<!-- Student Registation -->
	<form action="/implemen/loginnew.php" method="post">
		
        <div class="sub"></div>
                        <div> 
                            <td>
                            <tr><label>Username:&nbsp;&nbsp;&nbsp;&nbsp;</label></tr>
                            <tr><input type="text" name="Username" required></tr> 
                            </td>
		</div>

		<br>

		<div>
            <tr>
		    <td><label>Password:&nbsp;&nbsp;&nbsp;</label></td>&nbsp;&nbsp;
                <td><input type="Password" name="Password"required></td>
                </tr>
            </div>
		<br>
		<div>
            <tr>
                <label>Usertype:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
               <select name="Usertype">
                                                   <option value="Select" >Select</option>

             <option value="Student">Student</option>
                <option value="Faculty">Faculty</option>
                <option value="Admin">Admin</option>
            </select>
                
            </tr>
		</div>
		<br>
        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button button1" type="submit" name="Login" value="Login">LOGIN</button>
       <!-- <a href="forgetpassword.php" class="button button2">FORGET PASSWORD</a>-->

                
            
	</form>
                
	<!--Button -->
	<div style="margin-top:500px"></div>


        </header>	    
</body>
</html>
