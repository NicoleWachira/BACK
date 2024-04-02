<?php
include('connect.php');

if(isset($_POST) ) {
    // Handle form submission
    $Vehicleno = $_POST['Vehicleno'];
    $Licenceno = $_POST['Licenceno'];
    $Routes=$_POST['Routes']; 
    
    // Your signup logic here...
    // Assuming you have a table named 'recycler' with the following  columns 
    $sql = "INSERT INTO collector (Vehicleno,Licenceno,Routes) VALUES ('$Vehicleno', '$Licenceno', '$Routes')";
    $result =mysqli_query($conn, $sql);


    if($result) {
        // Data inserted successfully
        header("Location: login.php"); // Redirect to login page
        exit();
    } else {
        // Error occurred during insertion
        echo "Error: " . mysqli_error($conn);
    }
}
?>
