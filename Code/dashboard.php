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

$sql = "SELECT Student_name,Email,Contact_no, Faculty_no FROM registerstudent where Student_name= '" . $_SESSION['us'] . "'";
$result = $conn->query($sql);
// print_r($result);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

        echo " <script>

            let userDetailsContainer = document.getElementById('userDetails');

function addingResultsToPage(result) {
    let {
        name,
        email,
        workExperience,
        extraCurriculars
    } = result;
    let resultContainer = document.createElement('div');
    resultContainer.classList.add('result-item');
    let nameEl = document.createElement('p');
    nameEl.textContent = 'Name ' + name;
    resultContainer.appendChild(nameEl);

    let emailEl = document.createElement('p');
    emailEl.textContent = 'Email ' + email;
    resultContainer.appendChild(emailEl);

    let workExperienceEl = document.createElement('p');
    workExperienceEl.textContent = 'Work Experience ' + workExperience;
    resultContainer.appendChild(workExperienceEl);

    let extraCurricularsEl = document.createElement('p');
    extraCurricularsEl.textContent = 'ExtraCurriculars ' + extraCurriculars;
    resultContainer.appendChild(extraCurricularsEl);
}

function displayResults(search_results) {
    for (let result of search_results) {
        addingResultsToPage(result);
    }
}

function fetchResults() {
    let url = '';
    let options = {
        method: 'GET'
    };
    fetch(url, options)
        .then(function(response) {
            return response.json();
        })
        .then(function(jsonData) {
            let {
                search_results
            } = jsonData;
            displayResults(search_results);
        });
}
fetchResults();



        </script>";

        
        
        echo "<div style='margin-top:200px; background-color:grey;margin-right:70vh;margin-left:70vh' id='#userProfileSection'>";

        echo "<div style='color:purple;text-align:center;padding-top:20px'>
            <img style='height:20vh' src='https://iccfcare.com/wp-content/uploads/2020/03/Dr-Raina-Fateh.png' />
        </div>";
        echo "<div class='user-details-container'>";
        echo "<div class='user-details' id='userDetails'>";

        echo "  <p style='color:purple;text-align:center'>Name : " . $row["Student_name"]. "</p>
                <p style='color:purple;text-align:center'>Email :" . $row["Email"]. "</p>
                <p style='color:purple;text-align:center'>Work-Projects : ". $row["Faculty_no"] ."</p>
                <p style='color:purple;text-align:center'>Contact Number :" . $row["Contact_no"]. "</p>
            </div>
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






 

    

