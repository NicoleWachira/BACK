<?php
include("connect.php");

if(isset($_POST)){
    $username = $_POST['Fullname'];
    $email = $_POST['Email'];
    $Phonenumber = $_POST['Phonenumber'];
    $password = $_POST['Password'];
    $cpassword = $_POST['cpass'];
    $role = $_POST['Role'];

    $sql="SELECT * FROM user WHERE Fullname='$username'";
    $result=mysqli_query($conn,$sql);
    $count_user=mysqli_num_rows($result);

    $sql2="SELECT * FROM user WHERE Email='$email'";
    $myresult=mysqli_query($conn,$sql2);
    $count_email=mysqli_num_rows($myresult);

    if($count_user==0 && $count_email==0){ 
    if($password==$cpassword){
        $hash=password_hash($password,PASSWORD_DEFAULT);
        $mysql="INSERT INTO user(Fullname,Email,Phonenumber,Password,role) VALUES ('$username', '$email', '$Phonenumber', '$hash', '$role')";
        $result_result=mysqli_query($conn,$mysql);

        if($role == 'requestor'){
            echo "<script>
                        alert('Signup successful');
                        window.location.href = 'requestor_registration.php';
                        document.body.style.backgroundColor = 'red';
                      </script>";
            exit();
        }else if($role =='collector'){
            echo "<script>
                        alert('Signup successful');
                        window.location.href = 'collector_registration.php';
                        document.body.style.backgroundColor = 'red';
                      </script>";
            exit();
        }else{
            echo "<script>
                        alert('Signup successful');
                        window.location.href = 'recycler_registration.php';
                        document.body.style.backgroundColor = 'red';
                      </script>";
            exit();
        }

        }
    }
    else{
        if($count_user>0){
            echo"<script>
            window.location.href='userindex.php';
            alert('Username already exists!!');
            </script>";
        }
        if($count_email>0){
            echo"<script>
            window.location.href='userindex.php';
            alert('Email already exists!!');
            </script>";
        }
       }   
    
}
?>
