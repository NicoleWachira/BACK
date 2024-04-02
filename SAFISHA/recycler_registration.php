<?php
include("connect.php");
if(isset($_POST['submit'])) {
  // Handle signup form submission
  // Your signup logic here...

  // Redirect to the login  page after successful booking
  header("Location:login.php");
  exit(); // Ensure script execution stops after redirection
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recycler Signup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="reg.css">
  
</head>
<body>
  <div class="container mt-5">
    <div class="form-container">
      <h1 class="text-center mb-4">Recycler Signup</h1>
      <form name="RecyclerSignup" action="recyclerq.php" method="POST">
        <div class="mb-3">
          <label for="Location" class="form-label">Location</label>
          <input type="text" class="form-control" id="Location" name="Location" placeholder="Enter Location">
        </div>
        <div class="mb-3">
          <label for="Company Name" class="form-label">Company Name</label>
          <input type="text" class="form-control" id="CompanyName" name="CompanyName" placeholder="Enter Company Name">
        </div>
        <div class="mb-3">
          <label for="Recycler Licence" class="form-label">Recycler Licence</label>
          <input type="text" class="form-control" id="RecyclerLicence" name="recycler_licence" placeholder="Enter Recycler Licence">
        </div>
        <button type="submit" style="background-color: green;" class="btn btn-primary">Submit</button>
        <!-- Add any other form fields or buttons here -->
      </form>
    </div>
    <div class="image-container">
      <img src="recycle2..jpg" alt="Green truck">
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
