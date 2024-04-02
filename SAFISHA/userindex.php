<?php
include('connect.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    $username = $_POST['user'];
    // Retrieve other form fields similarly
    
    // Your signup logic here...
    
    // Redirect or display success message if needed
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
   rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
   crossorigin="anonymous">
   <link rel="stylesheet" href="user.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <!-- Picture Column -->
      <div class="col-md-6 style=">
        <img src ="recycle.1.jpeg" class="img-fluid" alt="Recycle symbol image" >
      </div>
      <!-- Form Column -->
      <div class="col-md-6">
        <form class="row g-3" method="POST" action="usereg.php">
          <div class="col-md-12">
            <h1 class="text-center mb-4">USER REGISTRATION</h1>
            
            <label for="inputFullname" class="form-label">Fullname</label>
            <input type="text" class="form-control"name="Fullname" id="Fullname" placeholder="Enter your Fullname">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">email</label>
            <input type="email" class="form-control" name="Email" id="Email" placeholder="Enter your email">
          </div>
          <div class="col-md-6">
            <label for="Phonenumber" class="form-label">Phonenumber</label>
            <input type="text" class="form-control" name="Phonenumber" id="Phonenumber" placeholder="Enter Phone Number">
          </div>
          <div class="col-md-6">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" name="Password" id="Password" placeholder="Enter password">
          </div>
          <div class="col-md-6">
            <label for="Confirm" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="cpass"  id="cpass" placeholder="Confirm Password">
          </div>
          <div class="col-md-6">
    <label for="Role" class="form-label">Role</label>
    <select class="form-select" id="Role" name="Role">
        <option value="recycler">Recycler</option>
        <option value="collector">Collector</option>
        <option value="requestor">Requestor</option>
    </select>
</div>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
