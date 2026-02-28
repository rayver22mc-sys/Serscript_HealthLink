<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SneakyLink: Remastered</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <style>
        body{
            margin: 0px;
            background-color: #083C52;

            /* Font */
            color: white;
            font-size: 30px;
            font-family: "Inter", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
        header{
            background-color: #062B3C;
            padding: 15px;

            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .section1{
            margin: 30px;
            padding-bottom: 10px;
        }

        .section2{
            display: flex;
            margin: 30px 30px;
            
            justify-content: space-between;
        }

        /* Section 1 */
        .statuscard1{
            width: 300px;
            height: 200px;
            background-color: rgba(0, 218, 255, 35%);
            padding: 15px;
        }
        .statuscard2{
            width: 300px;
            height: 200px;
            background-color: 	rgba(255, 200, 0, 35%);
            padding: 15px;
        }


        /* progress bar */
        .progress{
            width: 90%;
            height: 8px;
            margin-top: 30px;
            background-color: 	rgba(217, 217, 217, 22%);
            overflow: hidden;
        }
        .progress__fill{
            height: 100%;
            width: 100%;
            background-color: #FFC800;
        }



        .cardStatus{
            font-size: 30px; 
            margin-bottom: 0px;
        }
        .cardStatusDescription{
            font-size: 12px;
        }
        .miniStatus{
            font-size:20px; 
            margin-top: 8px;
        }
    </style>
</head>
<body>
    <?Php 
        $user = "Sean Tarrazona";
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

    <script>
        var caloriesBurned = 146;
        var dailyCalories = 2000;

        var steps = 8367;
        var stepsWeekly = 10000;

        var Workouts = 6;
        var workoutsWeekly = 10;

    // Status Cards 1
        document.getElementById("progress1").style.width = (caloriesBurned/dailyCalories)*100+"%";
        document.getElementById("status1").innerHTML = (caloriesBurned/dailyCalories)*100+"%";
        
    // Status Cards 2
        document.getElementById("progress2").style.width = (steps/stepsWeekly)*100+"%";
        document.getElementById("status2").innerHTML = steps;
        document.getElementById("Mainstatus2").innerHTML = steps;

    // Status Cards 3
        document.getElementById("progress3").style.width = (Workouts/workoutsWeekly)*100+"%";
        document.getElementById("status3").innerHTML = Workouts;
        document.getElementById("Mainstatus3").innerHTML = Workouts;
        document.getElementById("weeklyWorkout").innerHTML = workoutsWeekly;
    </script>
</body>
</html>