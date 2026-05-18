
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthLink: Landing Page</title>
    <link rel="stylesheet" href="src/LandingPage/landingPages.css">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <style>
        
    </style>
</head>
<body>
    <header>
        <!-- Logo -->
        <div class="logo">
            <img src="src/assets/heart.png" alt="Heart Icon">
            <p>Health</span><span style="color: #0CEFEA;">Link</span></p>
        </div>
        <!-- Desktop Nav -->
        <nav class="desktopNavButtons" id="desktopNavButtons">
            <a href="src/LogInPage/LoginPage.php?tab=register" class="signUpButton">Sign up</a>
            <a href="src/LogInPage/LoginPage.php" class="loginButton">Login</a>
        </nav>

        <!-- Phone Nav -->
        <div id="phoneNavButton">
            <button style="margin:0px;" onclick="togglePhoneBar()">☰</button>
        </div>
    </header>

    <!-- Phone Menu Bar -->
    <div class="phoneMenuBar" id="phoneMenuBar">
        <a href="src/LogInPage/LoginPage.php?tab=register">Sign up</a>
        <a href="src/LogInPage/LoginPage.php">Login</a>
    </div>
    <script src="LandingPage.js"></script>

    <main>
        <div>
            <h1 class="tagLine">Your Health Journey Starts Here</h1>
            <h2 class="heroTitle">Track Your<br><span>Health & Fitness</span></h2>
            <p class="supportingText">A modern health and fitness tracking system designed for students<br>and young adults. Monitor your workouts, track your diet, and<br>achieve your wellness goals.</p>
            <div class="ctaButtons">
                <a href="src/LogInPage/LoginPage.php" class="getStartedButton">Get Started</a>
                <a class="learnMoreButton" href="#Anchor">Learn More</a>
            </div>
        
            <div class="dataSection">
                <div><p>500+</p><span>Active Users</span></div>
                <div><p>10k+</p><span>Workouts Logged</span></div>
                <div><p>97%</p><span>Satisfaction</span></div>
            </div>
        </div>

        <div class="section2">
            <h1 id="Anchor">Everything You Need</h1>
            <p>Comprehensive tools for your health journey</p>
            <div class="featureList">
                <div class="featureItem">
                    <img src="src/assets/dumbell.png" alt="DumbBell">
                    <div class="featureItemText">
                        <h2>Workout tracking</h2>
                        <p>Login and monitor your exercise</p>
                    </div>
                </div>

                <div class="featureItem">
                    <img src="src/assets/apple.png" alt="DumbBell">
                    <div class="featureItemText">
                        <h2>Diet Monitoring</h2>
                        <p>Track meals and nutrition</p>
                    </div>
                </div>

                <div class="featureItem">
                    <img src="src/assets/calendar.png" alt="DumbBell">
                    <div class="featureItemText">
                        <h2>Schedule Planner</h2>
                        <p>Plan your fitness schedule</p>
                    </div>
                </div>

                <div class="featureItem">
                    <img src="src/assets/arrow.png" alt="DumbBell">
                    <div class="featureItemText">
                        <h2>Progress reports</h2>
                        <p>Visualize your achievements</p>
                    </div>
                </div>
            </div>

            
            <div class="cta-box">
                <h2>Ready to start your Journey?</h2>
                <p>Join hundreds of students achieving their health goals</p> <br>
                <a href="src/LogInPage/LoginPage.php" class="getStartedButton">Get Started Now</a>
            </div>
        </div>
    </main>
</body>
</html>