<!DOCTYPE html>
<html>
<head>
    <title>Requestor Profile</title>
    <link rel="stylesheet" href="User profile.css">
</head>
<body>
    <div class="user-profile-container">
        <h1>Requestor Profile</h1>
        <div class="profile-details">
            <p class="user-details"><strong>Full Name:</strong> <?php echo $fullname;?></p>
            <p class="user-details"><strong>Email:</strong> <?php echo $email;?></p>
            <p class="user-details"><strong>Location:</strong> <?php echo $location;?></p>
            <p class="user-details"><strong>Waste Type:</strong> <?php echo $wastetype;?></p>
        </div>
        <div class="button-group">
            <a href="update_requestor.php"><button>Update Details</button></a>
            <a href="logout.php"><button>Log Out</button></a>
        </div>
    </div>
</body>
</html>