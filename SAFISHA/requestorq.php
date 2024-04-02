<?php
include('connect.php');

if(isset($_POST['submit'])) {
    // Handle form submission
    $location = $_POST['Location'];
    $wasteType = $_POST['WasteType'];
    
    // Assuming you have a table named 'requestor' with columns 'Location' and 'Wastetype'
    $sql = "INSERT INTO requestor (Location, Wastetype) VALUES ('$location', '$wasteType')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "<script>
                        alert(' Requestor Signup successful');
                        window.location.href = 'Login.php';
                        document.body.style.backgroundColor = 'red';
                      </script>";
        exit();
    } else {
        // Error occurred during insertion
        echo "Error: " . mysqli_error($conn);
    }
}
?>
