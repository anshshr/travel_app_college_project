<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Tours</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
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

        .home-container {
            text-align: center;
            padding: 20px;
            margin: 20px 0;
        }

        h1 {
            color: #4CAF50;
            margin-bottom: 10px;
            font-size: 36px;
        }

        p {
            font-size: 18px;
            color: #555;
        }

        .tour-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            width: 100%;
            max-width: 1200px;
        }

        .tour-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
            position: relative;
        }

        .tour-card:hover {
            transform: translateY(-5px);
        }

        .tour-image img {
            width: 100%;
            height: 200px;
            object-fit: cover; /* Ensure the image covers the space without stretching */
        }

        .tour-details {
            padding: 15px;
        }

        .tour-details h2 {
            margin: 10px 0;
            font-size: 24px;
            color: #333;
        }

        .tour-details p {
            margin: 5px 0;
            color: #777;
        }

        .price {
            font-size: 20px;
            color: #ff5722; /* Price color */
            font-weight: bold;
        }

        .weather {
            font-size: 16px;
            color: #007BFF; /* Weather color */
        }

        .tour-duration {
            font-size: 16px;
            color: #555;
        }

        .tour-rating {
            font-size: 16px;
            color: #ffcc00; /* Rating color */
        }

        .description {
            font-size: 14px;
            color: #666;
            margin-top: 10px;
        }

    </style>
</head>
<body>
    <div class="home-container">
        <h1>Explore Available Tours</h1>
        <p>This page will display the tours available for users to choose from.</p>
    </div>

    <div class="tour-list">
        <div class="tour-card">
            <div class="tour-image">
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/26/72/61/f2/getaway-beach-resort.jpg?w=700&h=-1&s=1" alt="Beach Getaway">
            </div>
            <div class="tour-details">
                <h2>Beach Getaway</h2>
                <p>Location: Miami, FL</p>
                <p class="tour-duration">Duration: 5 days</p>
                <p class="price">$299</p>
                <p class="weather">Weather: Sunny</p>
                <p class="tour-rating">Rating: ★★★★☆</p>
                <p class="description">Relax on the beautiful beaches of Miami and enjoy water sports, sunbathing, and local cuisine.</p>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3_zL0hcGZCPvZKBtBge0ZhSsT26ZJnti0xw&s" alt="Mountain Adventure">
            </div>
            <div class="tour-details">
                <h2>Mountain Adventure</h2>
                <p>Location: Aspen, CO</p>
                <p class="tour-duration">Duration: 7 days</p>
                <p class="price">$499</p>
                <p class="weather">Weather: Snowy</p>
                <p class="tour-rating">Rating: ★★★★★</p>
                <p class="description">Experience the thrill of skiing and snowboarding in the breathtaking Rocky Mountains.</p>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8krWrB4K08M_IP9YwMzXfBHXeurmfDuOwqQ&s" alt="Cultural Tour">
            </div>
            <div class="tour-details">
                <h2>Cultural Tour</h2>
                <p>Location: Kyoto, Japan</p>
                <p class="tour-duration">Duration: 6 days</p>
                <p class="price">$699</p>
                <p class="weather">Weather: Mild</p>
                <p class="tour-rating">Rating: ★★★★☆</p>
                <p class="description">Explore ancient temples, beautiful gardens, and experience the rich culture of Japan.</p>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-image">
                <img src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-720x480/12/90/17/81.jpg" alt="Safari Adventure">
            </div>
            <div class="tour-details">
                <h2>Safari Adventure</h2>
                <p>Location: Serengeti, Tanzania</p>
                <p class="tour-duration">Duration: 8 days</p>
                <p class="price">$899</p>
                <p class="weather">Weather: Warm</p>
                <p class="tour-rating">Rating: ★★★★★</p>
                <p class="description">Witness the majestic wildlife of Africa in their natural habitat during this unforgettable safari.</p>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-image">
                <img src="https://veronikasadventure.com/wp-content/uploads/2023/12/harry-potter-city-escape-tour.jpg" alt="City Escape">
            </div>
            <div class="tour-details">
                <h2>City Escape</h2>
                <p>Location: New York City, NY</p>
                <p class="tour-duration">Duration: 4 days</p>
                <p class="price">$399</p>
                <p class="weather">Weather: Cloudy</p>
                <p class="tour-rating">Rating: ★★★☆☆</p>
                <p class="description">Discover the vibrant culture and iconic landmarks of New York City with this exciting tour.</p>
            </div>
        </div>
        <div class="tour-card">
    <div class="tour-image">
        <img src="https://content.r9cdn.net/rimg/dimg/83/d4/85f68013-city-20339-16489ec9b8b.jpg?crop=true&width=1020&height=498" alt="Kyoto Cultural Tour" class="tour-image">
    </div>
    <div class="tour-details">
        <h2>Kyoto Cultural Tour</h2>
        <p>Location: Kyoto, Japan</p>
        <p class="tour-duration">Duration: 7 days</p>
        <p class="price">$1,500</p>
        <p class="weather">Weather: Mild, 22°C</p>
        <p class="tour-rating">Rating: ★★★★☆</p>
        <ul class="tour-highlights">
            <li>Visit historic temples and shrines</li>
            <li>Traditional tea ceremony</li>
            <li>Explore the Arashiyama Bamboo Grove</li>
        </ul>
    </div>
</div>

<div class="tour-card">
    <div class="tour-image">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRh4AlTAmXutN9oAT1ERcI8w3AbEmUeQP0uA&s" alt="New York City Experience" class="tour-image">
    </div>
    <div class="tour-details">
        <h2>New York City Experience</h2>
        <p>Location: New York City, USA</p>
        <p class="tour-duration">Duration: 5 days</p>
        <p class="price">$2,000</p>
        <p class="weather">Weather: Sunny, 25°C</p>
        <p class="tour-rating">Rating: ★★★★☆</p>
        <ul class="tour-highlights">
            <li>Broadway show tickets</li>
            <li>Statue of Liberty tour</li>
            <li>Central Park bike rental</li>
        </ul>
    </div>
</div>

<div class="tour-card">
    <div class="tour-image">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0x7dlGYUjQlwW_aTeJglAPe8kMiuyPYiELQ&s" alt="Paris Romantic Getaway" class="tour-image">
    </div>
    <div class="tour-details">
        <h2>Paris Romantic Getaway</h2>
        <p>Location: Paris, France</p>
        <p class="tour-duration">Duration: 6 days</p>
        <p class="price">$2,800</p>
        <p class="weather">Weather: Pleasant, 24°C</p>
        <p class="tour-rating">Rating: ★★★★★</p>
        <ul class="tour-highlights">
            <li>Seine River dinner cruise</li>
            <li>Visit the Eiffel Tower</li>
            <li>Wine and cheese tasting tour</li>
        </ul>
    </div>
</div>

<div class="tour-card">
    <div class="tour-image">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2c/a1/e9/14/caption.jpg?w=500&h=400&s=1" alt="Tokyo Adventure" class="tour-image">
    </div>
    <div class="tour-details">
        <h2>Tokyo Adventure</h2>
        <p>Location: Tokyo, Japan</p>
        <p class="tour-duration">Duration: 8 days</p>
        <p class="price">$1,700</p>
        <p class="weather">Weather: Warm, 26°C</p>
        <p class="tour-rating">Rating: ★★★★☆</p>
        <ul class="tour-highlights">
            <li>Explore Shibuya and Shinjuku</li>
            <li>Sumo wrestling experience</li>
            <li>Visit historic temples and shrines</li>
        </ul>
    </div>
</div>

<div class="tour-card">
    <div class="tour-image">
        <img src="https://cdn.britannica.com/75/75775-131-1D05DD74/Colosseum-Rome.jpg" alt="Rome Historical Tour" class="tour-image">
    </div>
    <div class="tour-details">
        <h2>Rome Historical Tour</h2>
        <p>Location: Rome, Italy</p>
        <p class="tour-duration">Duration: 5 days</p>
        <p class="price">$2,200</p>
        <p class="weather">Weather: Warm, 27°C</p>
        <p class="tour-rating">Rating: ★★★★★</p>
        <ul class="tour-highlights">
            <li>Visit the Colosseum and Roman Forum</li>
            <li>Vatican City guided tour</li>
            <li>Italian cooking class</li>
        </ul>
    </div>
</div>


    </div>
</body>
</html>
