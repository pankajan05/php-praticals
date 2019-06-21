<!DOCTYPE html>
<html>
<body>

<?php
    $capitals = array( "Italy"=>"Rome", "France" => "Paris", "Germany" => "Berlin", "Greece" => "Athens", "United Kingdom"=>"London");
    
     foreach($capitals as $city => $capital){
         echo "The Capital of ". $city . " is ". $capital. "<br>";
     }
?>

</body>
</html>