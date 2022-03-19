.<!DOCTYPE html>
<?php
session_start();

$host="localhost";
$user="root";
$password="";
$dbname="sch";
$connection=mysqli_connect($host,$user,$password,$dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
//if($_SESSION[Enrollment_no]==true)
//{
   // echo"welcome"." ".$_SESSION["Enrollment_no"];
//}
//else
//{
    //header('location:sturegisterb.php');
//}
//>?
    











//<?php


if(isset($_POST['Submit'])){
$Student_name=$connection->real_escape_string($_POST['Student_name']);
    $Faculty_no=$connection->real_escape_string($_POST['Faculty_no']);
    $Enrollment_no=$connection->real_escape_string($_POST['Enrollment_no']);
$Branch=$connection->real_escape_string($_POST['Branch']);
$Contact_no=$connection->real_escape_string($_POST['Contact_no']);
$Email=$connection->real_escape_string($_POST['Email']);
$Address=$connection->real_escape_string($_POST['Address']);
$Password=$connection->real_escape_string($_POST['Password']);

//if(empty($Student_name) || empty($Faculty_no) || empty($Enrollment_no) || empty($Branch) || empty($Contact_no) ||empty($Email)|| empty($Address) || empty($Password))
//{
    
   // echo"You do not fill out the required field";

 //mysql_query("select Enrollment_no,Faculty_no from 'verifystudent';");

    
    $register_query="INSERT INTO `registerstudent`(`Student_name`, `Faculty_no`, `Enrollment_no`, `Branch`, `Contact_no`, `Email`, `Address`, `Password`)values('$Student_name','$Faculty_no','$Enrollment_no','$Branch','$Contact_no','$Email','$Address','$Password')";
    try{
       if($res= mysqli_query($connection,$register_query)){
        
           ?> <script type="text/javascript"> alert(" You successfully registered");</script><?php
                                 header("refresh:0; url=sc_login.html");
           exit();

            }else{
           
           ?> <script type="text/javascript"> alert(" You already registered");</script><?php
                    

                header("refresh:0; url=sc_login.html");
    exit();
    
           
            
            }
       ?> <script type="text/javascript"> alert("Error in registeration");</script><?php
                           header("refresh:0; url=sc_login.html");  
        }
    catch(Exception $ex){
       echo("error".$ex->getMessage());
    }
}
//}
?>

   
<html>
<head>
    <title></title>
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
             background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(International-Womens-history-month-.png);

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
    position: absolute;
    top: 83%;
    left: 45%;
    transform: translate(-50%,-50%);
}
.btn{
    border: 1px solid #fff;
    padding: 5px 30px;
    color: #fff;
    text-decoration: none;
    transition: 0.6s ease;
    
}
.btn:hover{
    background-color: #fff;
    color: #000;
}
    td{
        color: white;
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
            margin: 70px 50px;
            transition-duration: 0.4s;
            cursor: pointer;
            
        }
        .button1{
            background-color: white;
            color: black;
            border: 2px solid #4caf50;
            left: 38%;
            top:63%;
        }
         .button2{
            background-color: white;
            color: black;
            border: 2px solid #4caf50;
             left: 45%;
            top:63%;
             
             
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
                        <li><a href="sc_login.html">Login</a></li>

           
                           

            <!--<li><a href="about.html">About us</a></li>-->
                           <!-- <li><a href="">Logout</a></li>-->
    

</ul>
        <br>
        <br>
                <script type="text/javascript">
                function validateform(){
                    var Password=document.myform.Password.value;
                                        var Contact_no=document.myform.Contact_no.value;

                    if(Password.length<6){
                        alert("Password must be at least 6 characters long");
                    return false;
                    }
                    if(Contact_no.length<10){
                        alert("Contact no must be at least 10 characters long");
                    return false;
                    
                }
                }
                    
                    
                    
                
                
                
                </script>
    

        
                <h1>STUDENT REGISTRATION</h1>
                <!-- Student Registation -->
                <form action="registerr.php" method="POST" name="myform" onsubmit="return validateform()">
        
    <div class="sub"></div>
        
        <table border="0" cellspacing="10">
                        <tr>
                            <td>Name: </td>
                            <td><input type="text" name="Student_name" onkeyup="this.value=this.value.toUppercase();" required></td>
                         <? php // echo"Please enter this field";?>
                            </tr>
    
    <tr>
        <td>  Email:</td>
<td><input type="Email" name="Email" placeholder="xyz@gmail.com" required></td>
        </tr>

<tr>
        <td> Confirm Email:</td>
<td><input type="Email" name="Email" placeholder="xyz@gmail.com" required></td>
        </tr>
        
            <tr>
            <td>Projects: </td>
                <td><input type="text"  name="Faculty_no" required value="<?php echo(isset($_SESSION["fno"]))?$_SESSION["fno"]:" ";?>"></td>
                </tr>
            
        
        
            <tr>
                <td>Extra Curricular: </td>    
            <td> <input type="text" name="Enrollment_no" required value="<?php echo(isset($_SESSION["eno"]))?$_SESSION["eno"]:" ";?>"></td>
            </tr>
        
        
        
        <tr>
          <td>  Interest: </td>
           <td> <input type="text" name="Branch" required></td>
    </tr>
        
        <tr>
            <td>Contact no:</td> 
           <td> <input type="number" name="Contact_no" required></td>
    </tr>
        
        
        <tr>
         <td>   Address:</td>
           <td> <input type="text" name="Address" required></td>
        </tr>
        <tr>
         <td>   <label>Password:</label> </td>
         <td>   <input  type="Password" name="Password" required></td>
        </tr>
        
    </table>
        
        <tr>
     
         
    
        </tr>
                    <br>
                  <!--  <div class="button">
           <!-- <h1><input type="Submit" name="Submit" value="Submit" >     </h1>
                        <input style="color:black" class="btn" type="Submit" name="Submit" value="Submit">
                                                <input style="color:black" class="btn" type="Submit" name="Submit" value="Submit">

                        
                    -->
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button button1" type="Submit" name="Submit" value="Submit">SUBMIT</button>

                    <button class="button button2" type="Reset" name="Reset" >RESET</button>
        
        
     <!--   <div class="button">
        <a href="welcome.html" class="btn">SUBMIT</a>
             <a href="#" class="btn">CLEAR</a>
                </div>-->
            
    </form>
                
    <!--Button -->
    <div style="margin-top:500px"></div>


        </header>       
</body>
</html>

    
    