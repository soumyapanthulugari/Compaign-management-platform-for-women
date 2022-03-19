<?php 
            /* $conn=mysqli_connect("localhost","root","","sch");
             if($conn->connect_error)
             {
                 die("connection failed".$conn->connect_error);
             }
             $sql="select Student_name,Email,Contact_no from registerstudent where Student_name='Arp'";
             $result=$conn->query($sql);
             if($result->num_rows>0)
             {
                 $i=1;
                 while($row=$result->fetch_assoc())
                 {
                    
                     echo "<tr><td>".$i++."</td><td>".$row["Student_Name"]."</td><td>".$row["Email"]."</td><td>".$row["Contact_no"]."</td></tr>";
                    
                 }
                 echo "</table>";
             }
             else echo "0 result";
             $conn->close();*/
             session_start();
             // print_r($_SESSION);
             // echo $_SESSION["us"] . "<br>"  ;

             $servername = "localhost";
$username = "root";
$password = "";
$dbname = "sch";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Student_name,Email,Contact_no FROM registerstudent where Student_name= '" . $_SESSION['us'] . "'";
$result = $conn->query($sql);
// print_r($result);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {



    


    // echo "Student_name: " . $row["Student_name"]. " - Email: " . $row["Email"]. " " . $row["Contact_no"]. "<br>";

    


  }
} else {
  echo "0 results";
}
$conn->close();

             ?>

























<?php 
            /* $conn=mysqli_connect("localhost","root","","sch");
             if($conn->connect_error)
             {
                 die("connection failed".$conn->connect_error);
             }
             $sql="select Student_name,Email,Contact_no from registerstudent where Student_name='Arp'";
             $result=$conn->query($sql);
             if($result->num_rows>0)
             {
                 $i=1;
                 while($row=$result->fetch_assoc())
                 {
                    
                     echo "<tr><td>".$i++."</td><td>".$row["Student_Name"]."</td><td>".$row["Email"]."</td><td>".$row["Contact_no"]."</td></tr>";
                    
                 }
                 echo "</table>";
             }
             else echo "0 result";
             $conn->close();*/
             session_start();
             // print_r($_SESSION);
             // echo $_SESSION["us"] . "<br>"  ;

             $servername = "localhost";
$username = "root";
$password = "";
$dbname = "sch";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Student_name,Email,Contact_no FROM registerstudent where Student_name= '" . $_SESSION['us'] . "'";
$result = $conn->query($sql);
// print_r($result);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {


        echo "<div class='bg-container' id='#userProfileSection'>";

        echo "<div class='display-container'>
            <img class='profile-img' src='https://iccfcare.com/wp-content/uploads/2020/03/Dr-Raina-Fateh.png' />
        </div>";
        echo "<div class='user-details-container'>";
        echo "<div class='user-details' id='userDetails'>";

        echo "  <p class='label'>Name : " . $row["Student_name"]. "</p>
                <p class='label'>Email :" . $row["Email"]. "</p>
                <p class='label'>Work-Experience :</p>
                <p class='label'>Extra-Curriculars :" . $row["Contact_no"]. "</p>
            </div>
        </div>
    </div>
";

    // echo "Student_name: " . $row["Student_name"]. " - Email: " . $row["Email"]. " " . $row["Contact_no"]. "<br>";

    


  }
} else {
  echo "0 results";
}
$conn->close();

             ?>






 

    




    

