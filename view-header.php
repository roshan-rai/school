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
            background-color: #7F0909;
            overflow-x: hidden; /* no horizontal sliding scrolll */

        }

        /* Navigation Bar Styles */
        nav {
            background-color: #7F0909; /* Hogwarts red */
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
            background-image: url('hp.jpg'); /* Set header container background image */
            background-size: contain;
            background-position: center;
            text-align: center;
            padding: 20px;
            color: white;
            display: flex;
            align-items: center; /* Center content vertically */
            justify-content: space-between; /* Spread content horizontally */
        }

        .school-logo {
            max-width: 100px; /* Set logo size */
            max-height: 100px; /* Set logo size */
        }

        h1 {
            margin-right: auto; /* Remove the left margin to center the text */
            font-size: 25px;
            font-weight: bold;
            color: white;
            font-family: "Old English Text MT", serif;
        }

        /* Placeholder content for scrolling */
        section {
            height: 650px; /* Common height for placeholder content */
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
        <a href="#student">Student</a>
        <a href="#house">House</a>
        <a href="#award">Award</a>
    </nav>

    <!-- Header Container with Logo and School Name -->
    <div class="header-container">
        <!-- Replace 'logo.png' with your actual logo file -->
        <img src="hogwartsLogo.png" alt="School Logo" class="school-logo">
        <h1>Hogwarts School</h1>
    </div>

    <!-- Placeholder content for scrolling -->
    <section id="about">
        <?php
            include "about.php";
        ?>
    </section>

    <section id="admissions" style="background-color: #eee;">
        <h2>
            
        </h2>
         <?php
            include "admissions.php";
        ?>
    </section>
    
<section id="student" style="background-color: #eee;">
        <h2>Student</h2>
        <?php
            include "students.php";
        ?>
    </section>

        <section id="award" style="background-color: #eee;">
        <h2>Award</h2>
         <?php
            include "awards.php";
        ?>
    </section>
    
      <section id="house" style="background-color: #eee;">
        <h2>House</h2>
         <?php
            include "house.php";
        ?>
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
