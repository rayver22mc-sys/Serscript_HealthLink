<!-- 
    NOTE: 
        Each of the status cards don't have their special logos
        The cards must be updated(they need to adapt based on screen size)
        Section 3 missing component (modifiable exercise schedule {Name|time|Statius})
        section 4 (Table for weekly activity progress)
        footer missing

        WARNING: Missing error handling
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthLink: Dashboard</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="MainDashBoard.css">
</head>
<body>
    
    <?php 
        if($_POST["User"] == ""){
            $user = "John Doe";
        }else{
            $user = $_POST["User"];
        }
    ?>

    <header>
        <h1 style="font-size: 35px; margin: 0px;">Health<span style="color: #0CEFEA;">Link</span> </h1>
        <p style="font-size: 35px; margin: 0px;">test</p>
    </header>

    <div class="section1">
        <p style="margin-bottom: 5px; font-weight: bold;">Welcome back, <?php echo $user ?>! </p> 
        <p style="font-size: 15px;">Here's your fitness summary for today.</p>
    </div>

    <div class="section2">
        <div class="statuscard1">
            <div></div>
            <p class="cardStatus" id="Mainstatus1">1,420</p>
            <p style="font-size: 12px;">calories burned</p>

            <!-- Progession bar -->
            <div class="progress">
                <div class="progress__fill" id="progress1"></div>
            </div>
            <p class="miniStatus"><span id="status1"></span> of daily goal</p>
        </div>


        <div class="statuscard2">
            <div></div>
            <p class="cardStatus" id="Mainstatus2"></p>
            <p class="cardStatusDescription">Steps taken</p>

            <!-- Progession bar -->
            <div class="progress">
                <div class="progress__fill" id="progress2"></div>
            </div>
            <p class="miniStatus"><span id="status2"></span> out of 10K goal</p>
        </div>


        <div class="statuscard1">
            <div></div>
            <p class="cardStatus" id="Mainstatus3"></p>
            <p class="cardStatusDescription">Workouts completed</p>

            <!-- Progession bar -->
            <div class="progress">
                <div class="progress__fill" id="progress3"></div>
            </div>
            <p class="miniStatus"><span id="status3"></span> out of <span id="weeklyWorkout"></span> weekly</p>
        </div>


        <div class="statuscard2">
            <div></div>
            <p class="cardStatus">1,420</p>
            <p class="cardStatusDescription">Progress Increased</p>
        </div>
    </div>

    <div class="section3">
        <div class="section3cards">
            <p class="section3cardname">Today's Exercise Schedule</p>
        </div>

        <div class="section3cards">
            <p class="section3cardname">Calories & Diet Tracking</p>
        </div>
    </div>

    <script src="MainDashBoard.js"></script>
</body>
</html>