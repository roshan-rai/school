<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXjzI9Og2+DmI5/zql3m0n77L3Fb5aYXdAQ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-b0vqNz+khPQDCIjOFq2xlFgZwN9A3/AgWFsqBxSxFfZVCX+/GOOq5EmzXfJom6Te" crossorigin="anonymous"></script>

    <title>Hogwarts School</title>
    
    <style>
        
header {
    background: url('background-image.jpg') center/cover no-repeat;
    height: 12vh;
    display: flex;
    align-items: center;
}
        .countdown-timer {
    position: fixed;
    bottom: 28px;
    right: 10px;
    background-color: aliceblue;
    padding: 10px;
    border-radius: 5px;
}

nav {
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    width: 100%}

nav.nav-item { display: block; 
                       padding: 12px 20px; 
                       border: 1px solid transparent; 
                       font-family: 'Montserrat', sans-serif; font-size: 12px; 
                       font-weight: 500; 
                       line-height: 1; 
                       letter-spacing: 0.05em; 
                       text-transform: uppercase; 
                       -webkit-transition: opacity 300ms ease; 
                       -moz-transition: opacity 300ms ease; 
                       -ms-transition: opacity 300ms ease; 
                       transition: opacity 300ms ease; }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-around;
}
li {
    display: inline;
}
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
            padding: 12px 20px;
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
            height: auto; /* Common height for placeholder content */
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
          header {
            position: fixed;
            top: 0;
            width: 100%;
            transition: background-color 0.3s ease; /* Add a smooth transition effect */
        }
        .modal-title {
            margin-bottom: 0;
            line-height: 1.5;
            color: black;
        }
   .navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    background-image: var(--bs-navbar-toggler-icon-bg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%;
}
        .navbar-toggler {
    padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
    font-size: var(--bs-navbar-toggler-font-size);
    line-height: 1;
    color: var(--bs-navbar-color);
    background-color: transparent;
    border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
    border-radius: var(--bs-navbar-toggler-border-radius);
    transition: var(--bs-navbar-toggler-transition);
}
        section h1{
            font-size: 2.5rem;
            color: black;
            text-align: center;
        }
        .like {
            cursor: pointer;
        }
    </style>
   
</head>

<body>


      <header>
    <nav class="nav-item">
            <ul>
                <li><a href="#about">About</a></li>
                <li> <a href="#admissions">Admissions</a></li>
                <li><a href="#student">Student</a></li>
                <li><a href="#house">House</a></li>
                <li><a href="#award">Award</a></li>
                <li>
                    <div class="search-bar">
                        <form class="d-flex" role="search">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
          
    </header>
    
    <!-- Header Container with Logo and School Name -->
    <div class="header-container">
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
         <?php
            include "admissions.php";
        ?>
    </section>
    
<section id="student" style="background-color: #eee;">
        <?php
            include "students.php";
        ?>
    </section>

        <section id="award" style="background-color: #eee;">
         <?php
            include "awards.php";
        ?>
    </section>
    
      <section id="house" style="background-color: #eee;">
         <?php
            include "house.php";
        ?>
    </section>
    <div class="countdown-timer" id="countdown-timer"></div>
 <script>
       const targetDate = new Date('2023-12-14T23:59:59');

    function updateTimer() {
        const now = new Date();
        const timeDifference = targetDate - now;

        if (timeDifference > 0) {
           const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            const hours = Math.floor(timeDifference / (1000 * 60 * 60));
            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

    const formattedTime = `${days}d ${formatTime(hours)}h:${formatTime(minutes)}m:${formatTime(seconds)}s left`;

            document.getElementById('countdown-timer').innerText = formattedTime;

            setTimeout(updateTimer, 1000);
        } else {
            document.getElementById('countdown-timer').innerText = 'Timer Expired';
        }
    }

    function formatTime(time) {
        return time < 10 ? `0${time}` : time;
    }

    // Initial call to start the timer
    updateTimer();
        document.addEventListener('DOMContentLoaded', function () {
            // Extract the hash from the URL (e.g., #house)
            var hash = window.location.hash.substring(1);

            // Check if the hash is not empty and the corresponding section exists
            if (hash && document.getElementById(hash)) {
                // Scroll to the section with the specified hash
                document.getElementById(hash).scrollIntoView();
            }
        });
        document.addEventListener("DOMContentLoaded", function() {
            var section = document.getElementById("students-by-house");

            // Scroll to the section smoothly
            section.scrollIntoView({ behavior: 'smooth' });
        });
    </script>
</body>

</html>
