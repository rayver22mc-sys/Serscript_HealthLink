<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthLink: About</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../AboutPage/styles.css">
</head>
<body>
    <header>
        <!-- Logo -->
        <div class="logo">
            <img src="../assets/heart.png" alt="Heart Icon">
            <p>Health</span><span style="color: #0CEFEA;">Link</span></p>
        </div>
        <!-- Desktop Nav -->
        <nav class="desktopNavButtons" id="desktopNavButtons">
            <a href="coursePage.php">Courses</a>
            <a href="MainDashBoard.php">Dashboard</a>
            <a href="aboutPage.php" class="Active">About</a>
            <a class="LogOutButton" href="../../indexss.php">Log out</a>
        </nav>

        <!-- Phone Nav -->
        <div id="phoneNavButton">
            <button style="margin:0px;" onclick="togglePhoneBar()">☰</button>
        </div>
    </header>

    <!-- Phone Menu Bar -->
    <div class="phoneMenuBar" id="phoneMenuBar">
        <a href="coursePage.php" class="Active">Courses</a>
        <a href="MainDashBoard.php">Dashboard</a>
        <a href="aboutPage.php">About</a>
        <a href="../../indexss.php">Logout</a>
    </div>

    <div class="section1">
        <h1>About Us</h1>
    </div >

    <div style="background-color:#062B3C; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 300px;">
        <p style="text-align: center; font-size: 30px;">A team of four developers willing to learn and develop systems for minor shops to major companies, providing them <br> with a well-designed web application that is responsive and easy for new users to understand.</p>
    </div>

    <section class="userProfilesDiv">
        <div>
            <img src="../assets/Hamsirani_ProfilePicture.jpg" alt="An image of Rayver Hamsirani" height="350px" >
            <div>
                <h2>Rayver Saavedra Hamsirani</h2>
                <p>Full stack Developer</p>
            </div>
        </div>
        <div>
            <img src="../assets/Ku_ProfilePicture.jpeg" alt="An image of Rayver Hamsirani" height="350px" width="350px" >
            <div>
                <h2>Beatriz Mae Ku</h2>
                <p>Full stack Developer</p>
            </div>
        </div>
        <div>
            <img src="../assets/Hamsirani_ProfilePicture.jpg" alt="An image of Rayver Hamsirani" height="350px" >
            <div>
                <h2>Justine Honrado</h2>
                <p>Designer</p>
            </div>
        </div>
        <div>
            <img src="../assets/Hamsirani_ProfilePicture.jpg" alt="An image of Rayver Hamsirani" height="350px" >
            <div>
                <h2>Anthony Gabriel Limba Vitug</h2>
                <p>Full stack Developer</p>
            </div>
        </div>
        <br>
    </section>
    
    <div style="background-color:#062B3C; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 300px;" class="section1">
        <h1>Our Mission</h1>
    </div >
    <div column; justify-content: center; align-items: center; height: 300px;>
        <p style="text-align: center; font-size: 30px;"><br><br>To empower users to take control of their physical and mental health through a user-friendly, one platform open‑source <br> web system to schedule exercises, view previous exercises, and browse credible health related articles.</p>
    </div>
    
    <footer>
        <div>
            <h2>HealthyLivingTeam</h2>
        </div>
        <div>
            <p style="text-decoration:underline;">Contact Information</p>
            <p>+63 947 564 6767</p>
            <a href="mailto:HealthyLivingTeam@gmail.com" style="color: white;">HealthyLivingTeam@gmail.com</a>
        </div>
    </footer>

    <script src="../AboutPage/aboutPage.js"></script>
</body>
</html>