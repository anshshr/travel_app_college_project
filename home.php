<?php
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Guest';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel App - Home</title>
    <link rel="stylesheet" href="home_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Home Page Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('https://imgcdn.stablediffusionweb.com/2024/4/7/2ddb903f-5cce-4464-9d98-b9483649217b.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        /* Navbar Styles */
        nav {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 8px;
            padding: 10px 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px;
        }

        nav a {
            color: #ffcc00;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: rgba(255, 204, 0, 0.3);
            color: #fff;
        }

        .home-container {
            background-color: rgba(0, 0, 0, 0.7); /* Transparent black background for the content */
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            max-width: 800px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: 36px;
            color: #ffcc00;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .options {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            margin-top: 20px;
        }

        .option {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            width: 45%;
            text-align: center;
            transition: all 0.3s ease;
            color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        .option:hover {
            background-color: rgba(255, 255, 255, 0.4);
            transform: scale(1.05);
        }

        .option i {
            font-size: 50px;
            margin-bottom: 15px;
            color: #ffcc00;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .btn {
            background-color: #ffcc00;
            color: #333;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #e6b800;
        }

        #toggleMessage {
            margin-top: 20px;
            padding: 10px;
            border: none;
            background-color: #ffcc00;
            color: #333;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #toggleMessage:hover {
            background-color: #e6b800;
        }

        @media (max-width: 768px) {
            .options {
                flex-direction: column;
            }

            .option {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="my_tours.php">My Tours</a></li>
            <li><a href="settings.html">Settings</a></li>
        </ul>
    </nav>

    <div class="home-container">
        <h1>Welcome, <?php echo $name; ?>!</h1>
        <p id="welcomeMessage">Start exploring the world with our travel tours.</p>
        
        <div class="options">
            <div class="option">
                <i class="fas fa-suitcase-rolling"></i>
                <h2>Book a Travel Tour</h2>
                <p>Plan your dream trip today by booking a travel tour. Choose from a variety of destinations.</p>
                <a href="book-tour.php" class="btn">Book Now</a>
            </div>

            <div class="option">
                <i class="fas fa-map-marked-alt"></i>
                <h2>Look for Available Tours</h2>
                <p>Discover the tours available right now and explore new places to travel.</p>
                <a href="available-tour.php" class="btn">Explore Tours</a>
            </div>
        </div>
        
     
</body>
</html>
