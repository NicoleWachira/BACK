<?php
include('connect.php');
$unsuccess = 0;

// Define the admin email and password
$admin_email = 'admin@example.com';
$admin_password = 'admin123';

if(isset($_POST['Email'])) {
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $role = $_POST['Role']; // Get the selected role from the form

    // Check if the user is trying to log in as an admin
    if ($email == $admin_email && $password == $admin_password && $role == 'admin') {
        session_start(); // Start user session
        $_SESSION['email'] = $email;
        $_SESSION['role'] = 'admin';
        echo "<script>
                        alert('Admin Login successful');
                        window.location.href = 'admin_dashboard.php';
                        document.body.style.backgroundColor = 'red';
                      </script>";
        exit();
    } else {
        // Proceed with the regular user login process
        $sql = "SELECT * FROM user WHERE Email='$email'";
        $result = mysqli_query($conn, $sql); // Check connection to database

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            $password_hash = $user['Password'];

            // password_verify() - compares the hashed password with the password the user has inputted
            if (password_verify($password, $password_hash)) {
                // Session - to store user data (in variables) across multiple pages
                session_start(); // Start user session
                $_SESSION['email'] = $email;
                $_SESSION['id'] = $user['id'];
                $_SESSION['role'] = $user['role'];

                if ($user['role'] == $role) { // Check if the selected role matches the user's role
                    if($role == 'requestor') {
                        echo "<script>
                        alert('Requestor Login successful');
                        window.location.href = 'requestor.php';
                        document.body.style.backgroundColor = 'red';
                      </script>";
                        exit();

                    } elseif ($role == 'collector') {
                        echo "<script>
                        alert('Collector Login successful');
                        window.location.href = 'collector.php';
                        document.body.style.backgroundColor = 'red';
                      </script>";
                        exit();

                    } elseif ($role == 'recycler') {
                        echo "<script>
                        alert('Recycler Login successful');
                        window.location.href = 'recycler.html';
                        document.body.style.backgroundColor = 'red';
                      </script>";
                        exit();
                    }
                } 
            else {
                echo "<script> alert('Invalid login password'); </script>";
                    } // Set a different error code for role mismatch
                
            } else{
                echo "Invalid email";
            }
        } 
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-- Image -->
                    <img src="img/l1.jpeg" alt="green truck">
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Login</header>
                        <form method="POST" action="login.php">
                            <div class="input-field">
                                <input type="text" class="input" id="email" name="Email" required autocomplete="off">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="pass" name="Password" required>
                                <label for="pass">Password</label>
                            </div>
                            <div class="input-field">
                                <select class="form-select" id="Role" name="Role" aria-label="Role" required>
                                    <option value="">Select Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="recycler">Recycler</option>
                                    <option value="collector">Collector</option>
                                    <option value="requestor">Requestor</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" id="submit" value="Log in">
                            </div>
                        </form>
                        
                        <div class="signin">
                            <span>Don't have an account? <a href="userindex.php">Sign up here</a></span>
                        </div>
</body>
</html>