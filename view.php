<html>
    <head>
        <title>View</title>
    </head>
    <body>
        
        <table border="1">
            <thead>
                <tr><th>Fname</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Nic</th>
                    <th>Date of birth</th>
                </tr>
            </thead>
        </table>
    
        <?php
            include "connect.php";
            
            $sql = "select * from the users";
            $result_set = mysqli_query($conn, $sql);
        
            for($result = mysqli_fetch_assoc($result_set)){
                
            }
        
        ?>
        
        
        
    </body>
</html>