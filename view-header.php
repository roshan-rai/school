<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogwarts School</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Georgia, sans-serif;
            background-color: #f4f4f4; /* Set your background color */
        }

        /* Navigation Bar Styles */
        nav {
            background-color: #7F0909; /* Set your navigation bar color */
            color: white;
            padding: 10px;
            text-align: center;
            display: flex;
            justify-content: space-around;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px; /* Increased margin for better spacing */
            font-size: 30px; /* Increased font size */
            position: relative;
        }

        nav a:hover {
            text-decoration: underline; /* Underline on hover */
        }

        /* Header Container Styles */
        .header-container {
            background-image: url('hp.jpg'); /* Set your header container background image */
            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 20px;
            color: white;
            display: flex;
            align-items: center; /* Center content vertically */
            justify-content: space-between; /* Spread content horizontally */
        }

        .school-logo {
            max-width: 100px; /* Set your logo size */
            max-height: 100px; /* Set your logo size */
        }

        h1 {
            margin-right: auto; /* Remove the left margin to center the text */
            font-size: 80px;
            font-weight: bold;
            font-family: "Times New Roman";
        }

        /* Placeholder content for scrolling */
        section {
            height: 800px; /* Common height for placeholder content */
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ddd;
        }

        /* Search Bar Styles */
        .search-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background-color: #fff; /* Set your search bar background color */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add box shadow for styling */
        }

        .search-bar input {
            padding: 5px;
            margin-right: 5px;
        }
        
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav>
        <a href="#about">About</a>
        <a href="#admissions">Admissions</a>
        <a href="#academics">Academics</a>
        <a href="#activities">Activities</a>
        <a href="#class">Class</a>
    </nav>

    <!-- Header Container with Logo and School Name -->
    <div class="header-container">
        <!-- Replace 'logo.png' with your actual logo file -->
        <img src="hogwartsLogo.png" alt="School Logo" class="school-logo">
        <h1>Hogwarts School</h1>
    </div>

    <!-- Placeholder content for scrolling -->
    <section id="about">
        <h2>About Us</h2>
        <p>
            Hogwarts School of Witchcraft and Wizardry, nestled amidst the enchanting landscape of the British countryside, is a place where magic comes to life and young witches and wizards embark on an extraordinary journey of discovery. The towering spires and ancient halls of Hogwarts echo with centuries of mystical wisdom and are a testament to the school's rich history. From the moment students step through the magical barrier at Platform 9¾, they are greeted by the majestic Hogwarts Express, which transports them to a realm of wonders. Within the castle's walls, students are immersed in a curriculum that encompasses the art of potion-making, the intricacies of spellcasting, and the fascinating study of magical creatures. Led by the wise and venerable Headmaster, Albus Dumbledore, Hogwarts instills not only academic knowledge but also values of friendship, courage, and the pursuit of truth. As students traverse the shifting staircases and secret passages, they forge bonds that last a lifetime, creating memories that are as enduring as the magic that courses through the very stones of Hogwarts School.
        </p>
    </section>

    <section id="admissions" style="background-color: #eee;">
        <h2>Admissions</h2>
        <p>Your admissions content goes here.</p>
    </section>

    <section id="academics" style="background-color: #eee;">
        <h2>Academics</h2>
        <p>Your admissions content goes here.</p>
    </section>

    <section id="activities" style="background-color: #eee;">
        <h2>Activities</h2>
        <p>Your admissions content goes here.</p>
    </section>

      <section id="House" style="background-color: #eee;">
        <h2>House</h2>
        <p>House information.</p>
    </section>

    <!-- Search Bar -->
    <div class="search-bar">
        <form class="d-flex" role="search">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</body>

</html>
