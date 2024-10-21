<?php
// Start the session
session_start();

// Database connection parameters
$servername = "localhost"; // Change if your server is different
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "travel_app"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a delete request is made
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Prepare and execute the delete statement
    $stmt = $conn->prepare("DELETE FROM book_tour WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        // Record deleted successfully
        echo "<script>alert('Tour deleted successfully!');</script>";
    } else {
        // Error deleting record
        echo "<script>alert('Error deleting tour: " . $stmt->error . "');</script>";
    }
    
    $stmt->close();
}

// Fetch all booked tours
$sql = "SELECT * FROM book_tour";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tours</title>
    <style>
        /* General styling */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
        }

        h1 {
            margin-top: 20px;
            font-size: 2.5em;
            color: #2e3d49;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 1.2em;
            color: #555;
        }

        /* Container */
        .container {
            padding: 20px;
            max-width: 1200px;
            width: 100%;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            border-radius: 10px;
            overflow: hidden;
            animation: fadeInUp 0.7s ease-out;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #2e3d49;
            color: #ffffff;
            text-transform: uppercase;
            font-size: 0.85em;
            letter-spacing: 1px;
        }

        tr {
            transition: background-color 0.3s ease;
        }

        tr:nth-child(even) {
            background-color: #f8f9fb;
        }

        tr:hover {
            background-color: #e2e7ee;
            transform: scale(1.02);
            transition: 0.2s ease-in-out;
        }

        td {
            border-bottom: 1px solid #ddd;
        }

        /* Button styling */
        button {
            background-color: #ff4c4c;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9em;
            transition: background-color 0.3s ease;
            box-shadow: 0 5px 10px rgba(255, 76, 76, 0.1);
        }

        button:hover {
            background-color: #e63e3e;
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Back link styling */
        a {
            text-decoration: none;
            color: #2e3d49;
            font-size: 1.1em;
            margin-top: 20px;
            display: inline-block;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #1a2733;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            h1 {
                font-size: 2em;
            }

            table, th, td {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>All Tours</h1>
        <p>Here you can view all booked tours.</p>

        <?php if ($result->num_rows > 0): ?>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Number of People</th>
                    <th>Gender</th>
                    <th>Location</th>
                    <th>Preferred Time</th>
                    <th>Additional Information</th>
                    <th>Action</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['age']); ?></td>
                        <td><?php echo htmlspecialchars($row['no_of_people']); ?></td>
                        <td><?php echo htmlspecialchars($row['gender']); ?></td>
                        <td><?php echo htmlspecialchars($row['location']); ?></td>
                        <td><?php echo htmlspecialchars($row['preferred_time']); ?></td>
                        <td><?php echo htmlspecialchars($row['additional_information']); ?></td>
                        <td>
                            <form target="_self" method="POST" onsubmit="return confirm('Are you sure you want to delete this tour?');">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else: ?>
            <p>No tours booked yet.</p>
        <?php endif; ?>

        <a href="home.php">Go back to Home</a>
    </div>

    <?php
    // Close connections
    $conn->close();
    ?>
</body>
</html>
