<?php
// Start the session to retrieve data
session_start();

// Check if the session variables are set
if (!isset($_SESSION['booking_details'])) {
    header("Location: index.php"); // Redirect to the form page if no details are found
    exit();
}

$booking_details = $_SESSION['booking_details'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: linear-gradient(to right, #4facfe, #00f2fe);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .confirmation-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            max-width: 600px;
            text-align: center;
            position: relative;
            overflow: hidden;
            animation: slideIn 0.5s ease forwards;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        h1 {
            color: #4CAF50; /* Success color */
            margin-bottom: 20px;
            font-size: 32px;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: bounceIn 1s;
        }

        @keyframes bounceIn {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #555;
        }

        ul {
            list-style-type: none;
            padding: 0;
            text-align: left;
            animation: fadeInUp 1s ease forwards;
        }

        @keyframes fadeInUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        li {
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
            position: relative;
            overflow: hidden;
        }

        li strong {
            color: #333;
        }

        li::before {
            content: '';
            position: absolute;
            left: 0;
            width: 5px;
            height: 100%;
            background-color: #4CAF50; /* Indicator color */
            transform: scaleY(0);
            transition: transform 0.3s ease;
            z-index: 0;
        }

        li:hover::before {
            transform: scaleY(1);
        }

        .amount {
            margin-top: 30px;
            font-size: 24px;
            color: #ff4c4c;
            animation: fadeInUp 1s ease forwards;
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="confirmation-container">
        <h1>Booking Confirmation</h1>
        <p>Thank you for booking your travel tour! Here are your details:</p>
        <ul>
            <li><strong>Name:</strong> <?php echo htmlspecialchars($booking_details['name']); ?></li>
            <li><strong>Age:</strong> <?php echo htmlspecialchars($booking_details['age']); ?></li>
            <li><strong>Number of People:</strong> <?php echo htmlspecialchars($booking_details['no_of_people']); ?></li>
            <li><strong>Gender:</strong> <?php echo htmlspecialchars($booking_details['gender']); ?></li>
            <li><strong>Location:</strong> <?php echo htmlspecialchars($booking_details['location']); ?></li>
            <li><strong>Preferred Time:</strong> <?php echo htmlspecialchars($booking_details['preferred_time']); ?></li>
            <li><strong>Additional Information:</strong> <?php echo htmlspecialchars($booking_details['additional_information']); ?></li>
        </ul>
        <!-- Display dummy amount -->
        <div class="amount">
            Total Amount to Pay: $500
        </div>
        <div class="footer">We hope you have a wonderful experience!</div>
    </div>
</body>
</html>
