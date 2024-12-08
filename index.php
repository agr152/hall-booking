<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Booking</title>
    <link rel="icon" href="img/system-logo.png" type="image/x-icon">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .banner {
            position: relative;
            height: 40vh; /* Responsive height */
            overflow: hidden;
        }

        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensure the image covers the area */
        }

        .banner h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 2.5em;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            text-align: center;
            -webkit-text-stroke: 1px whitesmoke;
        }

        .hall-container {
            display: inline-block;
            text-align: center;
            margin: 20px auto;
            padding: 20px;
            margin-left: 65px;
            border: 1px solid #ccc;
            border-radius: 8px;
            max-width: 400px; /* Maximum width */
            width: 90%; /* Responsive width */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .hall-image {
            width: 100%;
            border-radius: 8px;
        }

        .hall-name {
            margin: 15px 0;
            font-size: 1.5em;
        }

        .capacity {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .book-now {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        .book-now:hover {
            background-color: #218838;
        }

        /* Media Queries for responsiveness */
        @media (max-width: 600px) {
            .banner h1 {
                font-size: 1.5em;
            }

            .hall-name {
                font-size: 1.2em;
            }

            .book-now {
                padding: 8px 12px;
                font-size: 0.9em;
            }
        }
            
/* new line added*/

            nav {
                background-color: black;
                padding: 10px;
            }

            .navbar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    margin-left: 85%;
    display: flex;
            }

.navbar li {
    margin-right: 2px;
}

.navbar a {
    color: white;
    text-decoration: none;
    padding: 8px 16px;
    transition: color 0.3s, text-decoration 0.3s;
}

.navbar a:hover {
    color: #ffcc00; /* Change to desired hover color */
    text-decoration: underline;
}
.end-card{
    background-color: #ccc;
    height: 75px;
}
.end-card h4{
    margin-top: 20px;

}
.end-card h5{
    display: inline-block;
    margin-top: -50px;
}
    
</style>
</head>
<body>
        <div class="banner">
        <img src="img/system-cover.png"> <!-- Replace with your school banner image -->
        <h1>LOYOLA COLLEGE HALL BOOKING</h1>
    </div>
    <nav>
        <ul class="navbar">
            <?php
            if(isset($_SESSION["userName"])){
                echo "<li><a href='profilepage.php'>Profile Page</a></li>";
                echo "<li><a href='includes/logout.inc.php'>Log-Out</a></li>";
            }
            else{
                echo "<li><a href='login-page.php'>Login/Sign Up</a></li>";
                echo "<li><a href='admin.php'>Admin</a></li>";
            }
            ?>

        </ul>
    </nav>
    <div class="hall-container">
        <img src="img/MRF.jpg" alt="School Hall" class="hall-image">
        <h2 class="hall-name">MRF HALL</h2>
        <div class="capacity">
            <span class="capacity-number">Capacity: 100/👥</span>
        </div>
        <button class="book-now" id="mrf_btn" value="MRF Hall" onclick="window.location.href='./date-selection.php'">Book Now</button>
    </div>
    <div class="hall-container">
        <img src="img/YD.jpg" alt="School Hall" class="hall-image">
        <h2 class="hall-name">YD HALL</h2>
        <div class="capacity">
            <span class="capacity-number">Capacity: 160/👥</span>
        </div>
        <button class="book-now" onclick="window.location.href='./date-selection.php'">Book Now</button>
    </div>

    <div class="hall-container">
        <img src="img/Loyola-College-Admission-2023.png" style="height: 240px;"   alt="School Hall" class="hall-image">
        <h2 class="hall-name">LS HALL</h2>
        <div class="capacity">
            <span class="capacity-number">Capacity: 200/👥</span>
        </div>
        <button class="book-now" onclick="window.location.href='./date-selection.php'">Book Now</button>
    </div>

    <div class="hall-container">
        <img src="img/betram_hall.jpg" style="height: 240px;" alt="School Hall" class="hall-image">
        <h2 class="hall-name">BERTRAM HALL</h2>
        <div class="capacity">
            <span class="capacity-number">Capacity: 100/👥</span>
        </div>
        <button class="book-now" onclick="window.location.href='./date-selection.php'">Book Now</button>
    </div>

    <div class="hall-container">
        <img src="img/commerse.jpeg" alt="School Hall" class="hall-image">
        <h2 class="hall-name">COMMERCE HALL</h2>
        <div class="capacity">
            <span class="capacity-number">Capacity: 100/👥</span>
        </div>
        <button class="book-now" onclick="window.location.href='./date-selection.php'">Book Now</button>
    </div>

    <div class="hall-container">
        <img src="./img/MRF.jpg" alt="School Hall" class="hall-image">
        <h2 class="hall-name">BESKI HALL</h2>
        <div class="capacity">
            <span class="capacity-number">Capacity: 100/👥</span>
        </div>
        <button class="book-now" onclick="window.location.href='./date-selection.php'">Book Now</button>
    </div>

    <div class="end-card">
        <center><h4>Created by:-</h4></center>
        <center><h5>Antony Gnana Rohit (22-UCA-026)</h5></center>
</div>
</body>
</html>
