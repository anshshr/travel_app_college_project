<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Travel Tour</title>
    <link rel="stylesheet" href="styles.css">
    <style>
  
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('https://img6.arthub.ai/65fb7822-89af.webp'); 
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        .home-container {
            background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent black background */
            padding: 40px;
            border-radius: 12px;
            max-width: 600px;
            margin: 100px auto; /* Center the container */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: 28px;
            color: #ffcc00;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            font-size: 16px;
            margin-bottom: 30px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px; /* Space between inputs */
        }

        label {
            font-size: 16px;
            margin-bottom: 5px;
        }

        input, select, textarea {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            width: 100%; /* Make inputs full width */
        }

        input:focus, select:focus, textarea:focus {
            border-color: #ffcc00; /* Highlight border on focus */
            outline: none;
        }

        button {
            background-color: #ffcc00;
            color: #333;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e6b800;
        }

        .error-message {
            color: #ff6666; /* Error message color */
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="home-container">
        <h1>Book Your Travel Tour</h1>
        <p>This page will allow users to book travel tours.</p>
        
        <form id="booking-form" action="book_tour_people.php" method="POST">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <div class="error-message" id="nameError"></div>
            </div>
            <div>
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required min="1">
                <div class="error-message" id="ageError"></div>
            </div>
            <div>
                <label for="numberOfPeople">Number of People:</label>
                <input type="number" id="numberOfPeople" name="no_of_people" required min="1">
                <div class="error-message" id="peopleError"></div>
            </div>
            <div>
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <div class="error-message" id="genderError"></div>
            </div>
            <div>
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>
                <div class="error-message" id="locationError"></div>
            </div>
            <div>
                <label for="time">Preferred Time:</label>
                <input type="datetime-local" id="time" name="preferred_time" required>
                <div class="error-message" id="timeError"></div>
            </div>
            <div>
                <label for="additionalInfo">Additional Information:</label>
                <textarea id="additionalInfo" name="additional_information" rows="4"></textarea>
            </div>
            <div>
                <button type="submit">Book Tour</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('booking-form').addEventListener('submit', function(event) {
            let valid = true;

            // Clear previous error messages
            document.querySelectorAll('.error-message').forEach(msg => msg.innerText = '');

            // Validate Name
            const name = document.getElementById('name').value.trim();
            if (!name) {
                document.getElementById('nameError').innerText = 'Name is required.';
                valid = false;
            }

            // Validate Age
            const age = document.getElementById('age').value;
            if (age < 1) {
                document.getElementById('ageError').innerText = 'Age must be at least 1.';
                valid = false;
            }

            // Validate Number of People
            const numberOfPeople = document.getElementById('numberOfPeople').value;
            if (numberOfPeople < 1) {
                document.getElementById('peopleError').innerText = 'Number of people must be at least 1.';
                valid = false;
            }

            // Validate Gender
            const gender = document.getElementById('gender').value;
            if (!gender) {
                document.getElementById('genderError').innerText = 'Please select your gender.';
                valid = false;
            }

            // Validate Location
            const location = document.getElementById('location').value.trim();
            if (!location) {
                document.getElementById('locationError').innerText = 'Location is required.';
                valid = false;
            }

            // Validate Preferred Time
            const preferredTime = document.getElementById('time').value;
            if (!preferredTime) {
                document.getElementById('timeError').innerText = 'Preferred time is required.';
                valid = false;
            }

            // Prevent form submission if validation fails
            if (!valid) {
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
