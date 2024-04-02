<!DOCTYPE html>
<html>
<head>
    <title>Collectors</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="collector.css">
</head>
<body>
<header>
    <nav>
        <div class="logo">
            SAFISHA
        </div>
        <ul class="nav-links">
            <li><a href="collector.html">Home</a></li>
            <li><a href="About Us.html">About</a></li>
            <li><a href="">CollectorProfile</a></li>
            <li><a href="Contact us.html">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>
<br>
<br>
<br>

<div class="about">
    <h1>Collector</h1>
</div>

<div class="image-container">
    <img src="truck2.jpg" alt="garbage truck2">
    <img src="truck3.jpg" alt=" green truck3">
    <img src="truck4.jpg" alt="green truck4">
</div>

<div class="container1">
    <div class="did-you-know">Importance of segregation</div>
    <p class="paragraph">By segregating waste at the source, collectors contribute to a sustainable future, promoting environmental health and resource preservation. Embracing segregation practices empowers collectors to reduce landfill usage, fostering a cleaner and greener planet for all.</p>
</div>

<div class="form-container">
    <form action="insert_collection.php" method="POST">
        <input type="hidden" name="requesttype" value="Pickup">
        <button type="submit">Accept request</button>
    </form>
</div>
</body>
</html>