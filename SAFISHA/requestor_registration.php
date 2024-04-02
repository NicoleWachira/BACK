<?php
include("connect.php");
if(isset($_POST['submit'])) {
  // Handle signup form submission
  // Your signup logic here...
  
  // Redirect to the home page after successful booking
  header("Location:login.php");
  exit(); // Ensure script execution stops after redirection
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Requestor Signup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="reg.css">
</head>
<body>
  <div class="container mt-5">
    <div class="form-container">
      <h1 class="text-center mb-4">Requestor Signup</h1>
      <form name="RequestorSignup" action="requestorq.php" method="POST">
      <div class="col-md-12">
      <label for="Location" class="form-label">Location</label>
              <input type="text" class="form-control" name="Location" id="Location" placeholder="Enter Location">
            </div>
            <div class="col-md-12">
              <label for="WasteType" class="form-label">Waste Type</label>
              <select class="form-select" name="WasteType" id="WasteType" aria-label="Waste type">
                <option selected>Open this select menu</option>
                <option value="Organic">Organic</option>
                <option value="Solid">Solid</option>
                <option value="Liquid">Liquid</option>
                <option value="Recyclable">Recyclable</option>
                <option value="Hazardous">Hazardous</option>
              </select>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            </div>
        <button type="submit" style="background-color: green;" class="btn btn-primary" name="submit" >Submit</button>
  
        <!-- Add any other form fields or buttons here -->
      </form>
    </div>
    <div class="image-container">
      <img src="img/bin3.jpeg" alt="Recycling bins">
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>




