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
  <title>Collector Signup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="reg.css">
  
</head>
<body>
  <div class="container mt-5">
    <div class="form-container">
      <h1 class="text-center mb-4">Collector Signup</h1>
      <form name="CollectorSignup" action="collectorq.php" method="POST">
        <div class="mb-3">
          <label for="VehicleRegistration" class="form-label">Vehicle Registration</label>
          <input type="text" class="form-control" id="VehicleRegistration" name="Vehicleno" placeholder="Enter Vehicle Number">
        </div>
        <div class="mb-3">
          <label for="LicenceNumber" class="form-label">Licence Number</label>
          <input type="text" class="form-control" id="LicenceNumber" name="Licenceno"placeholder="Enter Licence Number">
        </div>
        <div class="mb-3">
          <label for="Routes" class="form-label">Routes</label>
          <input type="text" class="form-control" id="Routes" name="Routes" placeholder="Enter Routes Used">
        </div>
        <button type="submit" style="background-color: green;" class="btn btn-primary">Submit</button>
        <!-- Add any other form fields or buttons here -->
      </form>
    </div>
    <div class="image-container">
      <img src="truck.1.jpg" alt="Green truck">
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
