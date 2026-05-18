<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthLink: Courses</title>
    <link rel="stylesheet" href="../CoursePage/coursePages.css">
</head>
<body>
    <header>
        <!-- Logo -->
        <div class="logo">
            <img src="assets/heart.png" alt="Heart Icon">
            <p>Health</span><span style="color: #0CEFEA;">Link</span></p>
        </div>
        <!-- Desktop Nav -->
        <nav class="desktopNavButtons" id="desktopNavButtons">
            <a href="" class="Active">Courses</a>
            <a href="">Dashboard</a>
            <a href="">About</a>
        </nav>

        <!-- Phone Nav -->
        <div id="phoneNavButton">
            <button style="margin:0px;" onclick="togglePhoneBar()">☰</button>
        </div>
    </header>

    <!-- Phone Menu Bar -->
    <div class="phoneMenuBar" id="phoneMenuBar">
        <a href="" class="Active">Courses</a>
        <a href="">Dashboard</a>
        <a href="">About</a>
    </div>

    <main>
        <img src="assets/template-image.jpg" alt="test" class="roundImage">
        <div style="display:flex; margin-top: 70px;">
            <div class="desktopFilterSection">
                <!-- filter 1 -->
                <button onclick="toggleFilter1()">Health </button>
                    <div class="filter1" id="filter1">
                        <button>Health 1</button>
                    </div>

                <!-- filter 2 -->
                <button onclick="toggleFilter2()">Fitness </button>
                    <div class="filter2" id="filter2">
                        <button>Fitness 1</button>
                    </div>
            </div>
            <div>
                <h1 class="tagLine">Explore Top Courses</h1>
                <div class="buttonContainer">
                    <button class="getStartedButton">GET STARTED</button>
                    <button class="learnMoreButton">LEARN MORE</button>
                </div>
            </div>
        </div>

        <div class="mobileFilterSection">
            <!-- filter 1 -->
            <button onclick="toggleFilter1()">Health</button>
                <div class="filter1" id="filter1">
                    <button>Health 1</button>
                </div>

            <!-- filter 2 -->
            <button onclick="toggleFilter2()">Fitness</button>
                <div class="filter2" id="filter2">
                    <button>Fitness 1</button>
                </div>
        </div>

        <div class="coursesDiv">
            <div>
                <h2>Course 1</h6>
            </div>

            <div>
                <h2>Course 2</h6>
            </div>

            <div>
                <h2>Course 3</h6>
            </div>
        </div>
    </main>
    

<script src="coursePage.js"></script>
</body>
</html>