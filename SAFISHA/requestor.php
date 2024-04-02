<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="requesterhtml.css">
    <title>Requestor Home</title>    
</head>
<body>
<header>
    <nav>
        <div class="logo">
            SAFISHA
        </div>
        <ul class="nav-links">
            <li><a href="requestor.html">Home</a></li>
            <li><a href="About Us.html">About</a></li>
            <li><a href="requestor_profile.php">Requestor Profile</a></li>
            <li><a href="Contact us.html">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>
<br>
<br>
<br>
<div class="about">
    <h1>Requestor</h1>
</div>

<div class="image-container">
    <img src="req4.jpeg" alt="bucket bins">
    <img src="req2.jpeg" alt="trash bins">
    <img src="req3.jpeg" alt="person disposing waste">
</div>

<div class="container1">
    <div class="did-you-know">DID YOU KNOW</div>
    <p class="paragraph">Sorting garbage is vital for recycling and conserving resources. By separating materials like plastics, paper, and glass, we enable efficient recycling processes that save energy and reduce pollution. Proper waste sorting reduces the volume of waste sent to landfills, easing the strain on waste management systems and protecting the environment. It's also important to follow waste sorting regulations to avoid fines and contribute to a cleaner planet. Ultimately, sorting garbage supports a circular economy, where materials are reused, promoting sustainability for future generations.</p>
</div>
<br>
<br>
<br>
<div class="form-container">
<form method="POST" action="insert_request.php"> <!-- Update form action to profiler.php -->
        <!-- Add a hidden input field to indicate the request type -->
        <input type="hidden" name="requesttype" value="request">
        <button type="submit" >Make request</button>
    </form>
</div>

<script>
    // Function to handle success message display and disappearance after 4 seconds
    window.onload = function() {
        // Check if the success message element exists
        var successMessage = document.createElement("span");
        successMessage.textContent = "Request inserted successfully!";
        successMessage.style.color = "blue";
        successMessage.style.display = "none"; // Hide initially
        successMessage.style.transition = "opacity 1s"; // Smooth transition
        document.body.appendChild(successMessage); // Append to body

        // Function to show the success message
        function showSuccessMessage() {
            successMessage.style.display = "inline-block";
            setTimeout(function() {
                successMessage.style.opacity = 0; // Fade out
            }, 3000); // Disappear after 3 seconds
        }

        // Event listener for form submission
        var requestForm = document.getElementById("requestForm");
        requestForm.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission
            // Submit the form asynchronously
            fetch(requestForm.action, {
                method: requestForm.method,
                body: new FormData(requestForm)
            }).then(function(response) {
                if (response.ok) {
                    showSuccessMessage();
                    // Reset form after successful submission if needed
                    // requestForm.reset();
                }
            }).catch(function(error) {
                console.error('Error:', error);
            });
        });
    };
</script>
</body>
</html>
