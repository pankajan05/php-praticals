<html>
    <head><title>Employee</title>
    </head>
    <body>
        <h1>Form</h1>
        <h3>please fill this form</h3>
        
        <div>
        <form action="employee.php" method="post">
            <lavel>Forename:</lavel>
            <input type="text" name="fname"><br>
            <lavel>Address:</lavel>
            <input type="text" name="address"><br>
            <lavel>Email:</lavel>
            <input type="text" name="email"><br>
            <lavel>NIC:</lavel>
            <input type="text" name="nic"><br>
            <lavel>Date of Birth:</lavel>
            <input type="text" name="db"><br><br>
            
            <button type="submit" name="submit">Submit</button>
            <button type="submit" name="view">View All</button>
            <button type="button" name="reset">Reset</button>
            
            
            </form>
        </div>
        
        
        <?php
        /*
        $title = $_REQUEST['fname'];
        echo "<h1>$title</h1>"*/
        ?>
        
        <?php 
        include "connect.php";
        
        if(isset($_POST['submit'])){
            
        $fname = mysqli_real_escape_string($conn,$_POST['fname']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $nic = mysqli_real_escape_string($conn,$_POST['nic']);
        $db = mysqli_real_escape_string($conn,$_POST['db']);
        
        
        $sql = "insert into users (fname, address, email, nic, db) values ('{$fname}', '{$address}', '{$email}','{$nic}','{$db}')";
        
        echo $sql;
        
        if(mysqli_query($conn, $sql)){
            echo "New record is created successfully";
        }else{
            echo "Error";
        }
            
        }
        
        if (isset($_POST['view'])) {
            echo "<form method=\"post\">";
            echo "<br><label>color:</label><input type=\"color\" name=\"color\"><br>";
             echo "<label>no of cols</label><input type=\"number\" name=\"col\"><br>";
             echo "<label>no of rows</label><input type=\"number\" name=\"row\"><br>";
            echo"<button type=\"submit\" name=\"change\">change<button><br></form>";
            
            

            echo "<table border=\"1\">
            <thead>
                <tr><th>Fname</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Nic</th>
                    <th>Date of birth</th>
                </tr>
            </thead>";
        
        $sql = "select * from users";
        $result_set = mysqli_query($conn, $sql);
            
            $a = 0;
            while($result = mysqli_fetch_assoc($result_set)){
                $a++;
                if($a = $_POST['col'])
                    break;
                echo "<tr><td>".$result['fname']."</td>
                        <td>".$result['address']."</td>
                        <td>".$result['email']."</td>
                        <td>".$result['nic']."</td>
                        <td>".$result['db']."</td></tr>";
            }
            echo "</table>";
        }
        
        if(isset($_POST['reset'])){
            header: "Location: employee.php";
        }
        
        
        ?>
        
    </body>
    
    <script>
function myFunction() {
  document.getElementById("myForm").reset();
}
    </script>

</html>