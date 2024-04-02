<?php
include('connect.php');

if(isset($_POST) ) {
    // Handle form submission
    $Location = $_POST['Location'];
    $CompanyName = $_POST['CompanyName'];
    $RecyclerLicence=$_POST['recycler_licence']; 
    
    // Your signup logic here...
    // Assuming you have a table named 'recycler' with the following  columns 
    $sql = "INSERT INTO recycler (Location,CompanyName,recycler_licence) VALUES ('$Location', '$CompanyName', '$RecyclerLicence')";
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
