<?php
    include("../DataBase/dataBaseConnection.php");
    session_start();
    if (isset($_POST['email'])) {
        $_SESSION['email'] = $_POST['email'];
    }
    $user = "null";
    if (isset($_SESSION['email'])){ $user = $_SESSION['email'];}
    $currentUser = $conn->query("SELECT id FROM users WHERE user = '$user'");
    $row = $currentUser->fetch_assoc();
    $id = $row['id'];
    $Calories = $conn->query("SELECT * FROM usercalories WHERE id = '$id'");
    $row2 = $Calories->fetch_assoc();

    $caloriesBurned = $row2["Calories_Burned"];
    $workoutCompleted = $row2["Workout_Completed"];

    $breakfastCalories = $row2["breakfast_Calories"];
    $lunchCalories = $row2["Lunch_Calories"];
    $dinnerCalories = $row2["Dinner_Calories"];

    $caloriesInput = '';
        if (isset($_POST['breakFastCaloriesSubmitBtn'])) {
            if($_POST['calorieInput'] <0){header("Location: MainDashBoard.php");}
            else{
                $caloriesInput = (int)$breakfastCalories + (int)$_POST['calorieInput'];
                $breakfastCalorieUpdate = "UPDATE `usercalories` SET `breakfast_Calories` = '$caloriesInput' WHERE `usercalories`.`id` = '$id'";
                mysqli_query($conn, $breakfastCalorieUpdate);
            }
            header("Location: MainDashBoard.php");
            exit();
        }

        if (isset($_POST['lunchCaloriesSubmitBtn'])) {
            if($_POST['calorieInput'] <0){header("Location: MainDashBoard.php");}
            else{
                $caloriesInput = (int)$lunchCalories + (int)$_POST['calorieInput'];
                $lunchCalorieUpdate = "UPDATE `usercalories` SET `lunch_Calories` = '$caloriesInput' WHERE `usercalories`.`id` = '$id'";
                mysqli_query($conn, $lunchCalorieUpdate);
            }
            header("Location: MainDashBoard.php");
            exit();
        }

        if (isset($_POST['dinnerCaloriesSubmitBtn'])) {
            if($_POST['calorieInput'] <0){header("Location: MainDashBoard.php");}
            else{
                $caloriesInput = (int)$dinnerCalories + (int)$_POST['calorieInput'];
                $dinnerCalorieUpdate = "UPDATE `usercalories` SET `dinner_Calories` = '$caloriesInput' WHERE `usercalories`.`id` = '$id'";
                mysqli_query($conn, $dinnerCalorieUpdate);
            }
            header("Location: MainDashBoard.php");
            exit();
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthLink: Dashboard</title>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../MainDashBoard/MainDashBoard.css">
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <header>
        <div style="display:flex; align-items:center;">
            <img src="../assets/heart.png" alt="Heart Icon">
            <p style="font-size: 30px; font-weight: 600;">Health<span style="color:#0CEFEA;">Link</span></p>
        </div>
    
        <nav>
            <div style="display:flex;">
                <a class="desktopNavButton" href="CoursePage.php">Articles</a>
                <a class="desktopNavButton" href="mainDashBoard.php" id="active">Dashboard</a>
                <a class="desktopNavButton" href="aboutPage.php">About</a>
                <a class="LogOutButton" href="../../indexss.php">Log out</a>


                <button class="phoneNavButton" onclick="phoneMenuToggle()" id="menuButton">☰</button>
                <div style="float: right; position: absolute; background-color: black; padding:0px; margin: 0px; display:none;" id="phoneMenuBar">
                    <a class="phoneNavButton" onclick="phoneMenuToggle()">Close</a>
                    <a class="phoneNavButton" href="coursePage.php">Course</a>
                    <a class="phoneNavButton" href="MainDashBoard.php" class="active">Dashboard</a>
                    <a class="phoneNavButton" href="aboutPage.php">About</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="section1">
            <p style="margin-bottom: 5px; font-weight: bold; font-size: 50px;">Welcome back, <?php echo $user; ?>! </p> 
            <p style="font-size: 15px;">Here's your fitness summary for today.</p>
        </div>
        <section class="row1">
            <div class="dataCard">
                <div>
                    <img src="../assets/caloriesBurnedLogo.png" alt="fire logo" height="100px">
                    <p class="blue">Today</p>
                </div>
                <p class="cardStatus" id="Mainstatus1">1,420</p>
                <p style="font-size: 12px;">calories burned</p>

                <!-- Progession bar -->
                <div class="progress"><div class="progress__fill" id="CaloriesBurned"></div></div>
                <p class="miniStatus blue"><span id="status1"></span> of daily goal</p>
            </div>

            <div class="dataCard">
                <div>
                    <img src="../assets/Workouts.png" alt="fire logo" height="100px">
                    <p class="yellow">Today</p>
                </div>
                <p class="cardStatus" id="Mainstatus3">0</p>
                <p class="cardStatusDescription">Workouts completed</p>

                <!-- Progession bar -->
                <div class="progress"><div class="progress__fill" id="WorkoutsCompleted"></div></div>
                <p class="miniStatus yellow"><span id="status3"></span> out of <span id="weeklyWorkout"></span> weekly</p>
            </div>
        </section>

        <section class="row2">
            <div class="exerciseDiv">
                <p>Today's Exercise Schedule</p>
            </div>

            <div class="dietCardDiv">
                <p>Calories & Diet Tracking</p>
                <div class="dietCard">
                    <div class="dietCardText">
                        <p>Breakfast</p>
                        <p id="breakfastCaloriesCount">0 cal</p>
                    </div>
                    <div class="progress"><div class="progress__fill" id="breakfastBar"></div></div>

                    <!-- Submit Breakfast Calories -->
                    <form action="" class="calorieForm" method="post">
                        <input type="text" name="calorieInput" placeholder="Input Calories....">
                        <input type="submit" value="SUBMIT   >" class="submit" name="breakFastCaloriesSubmitBtn">
                    </form>
                </div>
                <div class="dietCard">
                    <div class="dietCardText">
                        <p>Lunch</p>
                        <p id="lunchCaloriesCount">0 cal</p>
                    </div>
                    <div class="progress"><div class="progress__fill" id="lunchBar"></div></div>

                    <!-- Submit lunch Calories -->
                    <form action="" class="calorieForm" method="post">
                        <input type="text" name="calorieInput" placeholder="Input Calories....">
                        <input type="submit" value="SUBMIT   >" class="submit" name="lunchCaloriesSubmitBtn">
                    </form>
                </div>
                <div class="dietCard">
                    <div class="dietCardText">
                        <p>Dinner</p>
                        <p id="dinnerCaloriesCount">0 cal</p>
                    </div>
                    <div class="progress"><div class="progress__fill" id="dinnerBar"></div></div>
                    <!-- Submit lunch Calories -->
                    <form action="" class="calorieForm" method="post">
                        <input type="text" name="calorieInput" placeholder="Input Calories....">
                        <input type="submit" value="SUBMIT   >" class="submit" name="dinnerCaloriesSubmitBtn">
                    </form>
                </div>

                <div class="dietCard">
                    <div class="dietCardText">
                        <p>Total Calories</p>
                    </div>
                    <div class="progress"><div class="progress__fill" id="totalCaloriesBar"></div></div>
                </div>
            </div> 

            
        </section>
        <div class="chartDiv">
            <p>Weekly Activity Progress</p>
            <canvas id="weeklyActivityProgressChart" style="position: relative; height:60vh; width:80vw "></canvas>
        </div>
    </main>

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

    <script>
            var Workouts = <?php echo $workoutCompleted; ?>;
            var workoutsWeekly = 10;

        //Calories
            var breakfastCalories = <?php echo $breakfastCalories; ?>;
            var lunchCalories = <?php echo $lunchCalories; ?>;
            var dinnerCalories = <?php echo $dinnerCalories; ?>;

        // Max Calories
            var maxBreakfastCalories = 10000;
            var maxLunchCalories = 10000;
            var maxDinnerCalories = 10000;

            var caloriesBurned = breakfastCalories + lunchCalories + dinnerCalories;
            
            var dailyCalories = 20000;
            
            var totalCalories = breakfastCalories + lunchCalories + dinnerCalories;
            var totalMaxCalories = maxBreakfastCalories + maxLunchCalories + maxDinnerCalories;
        // Status Cards 1
            document.getElementById("CaloriesBurned").style.width = (caloriesBurned/dailyCalories) * 100 + "%";
            document.getElementById("status1").innerHTML = (caloriesBurned/dailyCalories) * 100 + "%";
            document.getElementById('Mainstatus1').innerHTML = caloriesBurned;

        // Status Cards 2
            document.getElementById("WorkoutsCompleted").style.width = (Workouts/workoutsWeekly) * 100 + "%";
            document.getElementById("status3").innerHTML = Workouts;
            document.getElementById("Mainstatus3").innerHTML = Workouts;
            document.getElementById("weeklyWorkout").innerHTML = workoutsWeekly;

        // Calories Cards
            document.getElementById("breakfastBar").style.width = (breakfastCalories/maxBreakfastCalories)*100+"%";
            document.getElementById("breakfastCaloriesCount").innerHTML = breakfastCalories + " cal";
            if(breakfastCalories < 1){document.getElementById("breakfastCaloriesCount").innerHTML = "Not Logged";}

            document.getElementById("lunchBar").style.width = (lunchCalories/maxLunchCalories) * 100 + "%";
            document.getElementById("lunchCaloriesCount").innerHTML = lunchCalories + " cal";
            if(lunchCalories < 1){document.getElementById("lunchCaloriesCount").innerHTML = "Not Logged";}

            document.getElementById("dinnerBar").style.width = (dinnerCalories/maxDinnerCalories) * 100 + "%";
            document.getElementById("dinnerCaloriesCount").innerHTML = dinnerCalories + " cal";
            if(dinnerCalories < 1){document.getElementById("dinnerCaloriesCount").innerHTML = "Not Logged";}

            document.getElementById("totalCaloriesBar").style.width = (totalCalories/totalMaxCalories) * 100 + "%";

        // Phone Navigation Bar
        function phoneMenuToggle(){
            if(document.getElementById("phoneMenuBar").style.display === "block"){
                document.getElementById("phoneMenuBar").style.display = "none";
            }
            else{
                document.getElementById("phoneMenuBar").style.display = "block";
            }
        }
    </script>



        <script>
            //Chart
            var mondayVal = 0;
            var tuesdayVal = 0;
            var wednesdayVal = 0;
            var thursdayVal = 0;
            var fridayVal = 0;
            var saturdayVal = 0;
            var sundayVal = 0;

            const myChart = new Chart("weeklyActivityProgressChart", {
            type: 'bar',
            data: {
                labels: ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                datasets: [{
                    label: 'Calories',
                    data: [mondayVal, tuesdayVal, wednesdayVal, thursdayVal, fridayVal, saturdayVal, sundayVal],
                    backgroundColor: '#06B6D4',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            min: 0,
                            max: 600,
                            stepSize: 150,
                            precision: 0
                        }
                    }]
                },
                legend: {
                    display: true
                }
            }
        });
    </script>
</body>
</html>