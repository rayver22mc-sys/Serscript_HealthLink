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
    $mondayTotalCalories = $row2["Monday_Total_Calories"];
    $tuesdayTotalCalories = $row2["Tuesday_Total_Calories"];
    $wednesdayTotalCalories = $row2["Wednesday_Total_Calories"];
    $thursdayTotalCalories = $row2["Thursday_Total_Calories"];
    $fridayTotalCalories = $row2["Friday_Total_Calories"];
    $saturdayTotalCalories = $row2["Saturday_Total_Calories"];
    $sundayTotalCalories = $row2["Sunday_Total_Calories"];

    $caloriesInput = '';

        if (isset($_POST['breakFastCaloriesSubmitBtn'])) {
            if($_POST['calorieInput'] <0){header("Location: MainDashBoard.php");}
            else{
                $caloriesInput = (int)$breakfastCalories + (int)$_POST['calorieInput'];
                $breakfastCalorieUpdate = "UPDATE `usercalories` SET `breakfast_Calories` = '$caloriesInput' WHERE `usercalories`.`id` = '$id'";
                mysqli_query($conn, $breakfastCalorieUpdate);

                $Day = date("l");
                switch($Day){
                    case 'Monday':
                        $mondayTotalCaloriesUpdate = (int)$mondayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Monday_Total_Calories` = '$mondayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Tuesday':
                        $tuesdayTotalCaloriesUpdate = (int)$tuesdayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Tuesday_Total_Calories` = '$tuesdayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Wednesday':
                        $wednesdayTotalCaloriesUpdate = (int)$wednesdayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Wednesday_Total_Calories` = '$wednesdayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Thursday':
                        $thursdayTotalCaloriesUpdate = (int)$thursdayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Thursday_Total_Calories` = '$thursdayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Friday':
                        $fridayTotalCaloriesUpdate = (int)$fridayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Friday_Total_Calories` = '$fridayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Saturday':
                        $saturdayTotalCaloriesUpdate = (int)$saturdayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Saturday_Total_Calories` = '$saturdayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Sunday':
                        $sundayTotalCaloriesUpdate = (int)$sundayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Sunday_Total_Calories` = '$sundayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                }
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

                $Day = date("l");
                switch($Day){
                    case 'Monday':
                        $mondayTotalCaloriesUpdate = (int)$mondayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Monday_Total_Calories` = '$mondayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Tuesday':
                        $tuesdayTotalCaloriesUpdate = (int)$tuesdayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Tuesday_Total_Calories` = '$tuesdayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Wednesday':
                        $wednesdayTotalCaloriesUpdate = (int)$wednesdayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Wednesday_Total_Calories` = '$wednesdayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Thursday':
                        $thursdayTotalCaloriesUpdate = (int)$thursdayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Thursday_Total_Calories` = '$thursdayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Friday':
                        $fridayTotalCaloriesUpdate = (int)$fridayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Friday_Total_Calories` = '$fridayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Saturday':
                        $saturdayTotalCaloriesUpdate = (int)$saturdayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Saturday_Total_Calories` = '$saturdayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Sunday':
                        $sundayTotalCaloriesUpdate = (int)$sundayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Sunday_Total_Calories` = '$sundayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                }
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

                $Day = date("l");
                switch($Day){
                    case 'Monday':
                        $mondayTotalCaloriesUpdate = (int)$mondayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Monday_Total_Calories` = '$mondayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Tuesday':
                        $tuesdayTotalCaloriesUpdate = (int)$tuesdayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Tuesday_Total_Calories` = '$tuesdayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Wednesday':
                        $wednesdayTotalCaloriesUpdate = (int)$wednesdayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Wednesday_Total_Calories` = '$wednesdayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Thursday':
                        $thursdayTotalCaloriesUpdate = (int)$thursdayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Thursday_Total_Calories` = '$thursdayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Friday':
                        $fridayTotalCaloriesUpdate = (int)$fridayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Friday_Total_Calories` = '$fridayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Saturday':
                        $saturdayTotalCaloriesUpdate = (int)$saturdayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Saturday_Total_Calories` = '$saturdayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                    case 'Sunday':
                        $sundayTotalCaloriesUpdate = (int)$sundayTotalCalories + (int)$_POST['calorieInput'];
                        $Update = "UPDATE `usercalories` SET `Sunday_Total_Calories` = '$sundayTotalCaloriesUpdate' WHERE `usercalories`.`id` = '$id'";
                        mysqli_query($conn, $Update);
                        break;
                }
            }
            header("Location: MainDashBoard.php");
            exit();
        }

        // Scheduler
        if (isset($_POST['schedule1'])) {
            $caloriesInput = (int)$dinnerCalories + (int)$_POST['calorieInput'];
            $dinnerCalorieUpdate = "UPDATE `usercalories` SET `dinner_Calories` = '$caloriesInput' WHERE `usercalories`.`id` = '$id'";
            mysqli_query($conn, $dinnerCalorieUpdate);
            header("Location: MainDashBoard.php");
            exit();
            }

        $schedule = $conn->query("SELECT * FROM exerciseschedule WHERE id = '$id'");
        $scheduleRow = $schedule->fetch_assoc();

        
        $schedule1Input = $scheduleRow['ExerciseSchedule1'];
        $schedule2Input = $scheduleRow['ExerciseSchedule2'];
        $schedule3Input = $scheduleRow['ExerciseSchedule3'];

        $schedule1Input = $scheduleRow['ExerciseSchedule1'];
        $schedule2Input = $scheduleRow['ExerciseSchedule2'];
        $schedule3Input = $scheduleRow['ExerciseSchedule3'];
        
        $schedule1Time = $scheduleRow['schedule1Time'];
        $schedule2Time = $scheduleRow['schedule2Time'];
        $schedule3Time = $scheduleRow['schedule3Time']; 

        $schedule1Duration = $scheduleRow['schedule1Duration'];
        $schedule2Duration = $scheduleRow['schedule2Duration'];
        $schedule3Duration = $scheduleRow['schedule3Duration'];
        
        $ExerciseSchedule1Status = $scheduleRow['ExerciseSchedule1Status'];
        $ExerciseSchedule2Status = $scheduleRow['ExerciseSchedule2Status'];
        $ExerciseSchedule2Status = $scheduleRow['ExerciseSchedule2Status'];

        $schedule1Status = empty($schedule1Input) ? 'flex' : 'none';
        $schedule2Status = empty($schedule2Input) ? 'flex' : 'none';
        $schedule3Status = empty($schedule3Input) ? 'flex' : 'none';

        if (isset($_POST['Add1'])){
            $task = $_POST['TaskInput1'];
            $schedule1Time = $_POST['schedule1Time'];
            $schedule1Duration = $_POST['schedule1Duration'];

            $exerciseUpdate = "UPDATE `exerciseschedule` SET `ExerciseSchedule1` = '$task' WHERE `id` = '$id'";
            $exerciseStatus = "UPDATE `exerciseschedule` SET `ExerciseSchedule1status` = 'Pending' WHERE `id` = '$id'";
            $exerciseTime = "UPDATE `exerciseschedule` SET `schedule1Time` = '$schedule1Time' WHERE `id` = '$id'";
            $exerciseDuration = "UPDATE `exerciseschedule` SET `schedule1Duration` = '$schedule1Duration' WHERE `id` = '$id'";
            mysqli_query($conn, $exerciseUpdate);
            mysqli_query($conn, $exerciseStatus);
            mysqli_query($conn, $exerciseTime);
            mysqli_query($conn, $exerciseDuration);
            header("Location: MainDashBoard.php");
            exit();
        }
        if (isset($_POST['Add2'])){
            $task2 = $_POST['TaskInput2'];
            $schedule2Time = $_POST['schedule2Time'];
            $schedule2Duration = $_POST['schedule2Duration'];
            $exerciseUpdate2 = "UPDATE `exerciseschedule` SET `ExerciseSchedule2` = '$task2' WHERE `id` = '$id'";
            $exerciseStatus2 = "UPDATE `exerciseschedule` SET `ExerciseSchedule2status` = 'Pending' WHERE `id` = '$id'";
            $exerciseTime2 = "UPDATE `exerciseschedule` SET `schedule2Time` = '$schedule2Time' WHERE `id` = '$id'";
            $exerciseDuration2 = "UPDATE `exerciseschedule` SET `schedule2Duration` = '$schedule2Duration' WHERE `id` = '$id'";
            mysqli_query($conn, $exerciseUpdate2);
            mysqli_query($conn, $exerciseStatus2);
            mysqli_query($conn, $exerciseTime2);
            mysqli_query($conn, $exerciseDuration2);
            header("Location: MainDashBoard.php");
            exit();
        }
        if (isset($_POST['Add3'])){
            $task3 = $_POST['TaskInput3'];
            $schedule3Time = $_POST['schedule3Time'];
            $schedule3Duration = $_POST['schedule3Duration'];

            $exerciseUpdate3 = "UPDATE `exerciseschedule` SET `ExerciseSchedule3` = '$task3' WHERE `id` = '$id'";
            $exerciseStatus3 = "UPDATE `exerciseschedule` SET `ExerciseSchedule3status` = 'Pending' WHERE `id` = '$id'";
            $exerciseTime3 = "UPDATE `exerciseschedule` SET `schedule3Time` = '$schedule3Time' WHERE `id` = '$id'";
            $exerciseDuration3 = "UPDATE `exerciseschedule` SET `schedule3Duration` = '$schedule3Duration' WHERE `id` = '$id'";
            mysqli_query($conn, $exerciseUpdate3);
            mysqli_query($conn, $exerciseStatus3);
            mysqli_query($conn, $exerciseTime3);
            mysqli_query($conn, $exerciseDuration3);
            header("Location: MainDashBoard.php");
            exit();
        }

        

        if (isset($_POST['finishTask1'])){
            if($ExerciseSchedule1Status == 'Completed'){header("Location: MainDashBoard.php"); exit();}
            else{
                $updateStatus = "UPDATE `exerciseschedule` SET `ExerciseSchedule1status` = 'Completed' WHERE `id` = '$id'";

                $workoutCompleted+=1;
                $updateStatus2 = "UPDATE `usercalories` SET `Workout_Completed` = '$workoutCompleted' WHERE `usercalories`.`id` = '$id'";
                mysqli_query($conn, $updateStatus);
                mysqli_query($conn, $updateStatus2);
                header("Location: MainDashBoard.php");
                exit();
            }

            
        }

        if (isset($_POST['finishTask2'])){
            if($ExerciseSchedule2status == 'Completed'){header("Location: MainDashBoard.php"); exit();}
            else{
                $updateStatus = "UPDATE `exerciseschedule` SET `ExerciseSchedule2status` = 'Completed' WHERE `id` = '$id'";

                $workoutCompleted+=1;
                $updateStatus2 = "UPDATE `usercalories` SET `Workout_Completed` = '$workoutCompleted' WHERE `usercalories`.`id` = '$id'";
                mysqli_query($conn, $updateStatus);
                mysqli_query($conn, $updateStatus2);
                header("Location: MainDashBoard.php");
                exit();
            }
        }

        if (isset($_POST['finishTask3'])){
            if($ExerciseSchedule3status == 'Completed'){header("Location: MainDashBoard.php"); exit();}
            else{
                $updateStatus = "UPDATE `exerciseschedule` SET `ExerciseSchedule3status` = 'Completed' WHERE `id` = '$id'";
                
                $workoutCompleted+=1;
                $updateStatus2 = "UPDATE `usercalories` SET `Workout_Completed` = '$workoutCompleted' WHERE `usercalories`.`id` = '$id'";
                
                mysqli_query($conn, $updateStatus);
                mysqli_query($conn, $updateStatus2);
                header("Location: MainDashBoard.php");
                exit();
            }
        }
        

        if (isset($_POST['deleteTask1'])){
            $deleteTask = "UPDATE `exerciseschedule` SET `ExerciseSchedule1` = '' WHERE `id` = '$id'";
            mysqli_query($conn, $deleteTask);
            header("Location: MainDashBoard.php");
            exit();
        }

    
        if (isset($_POST['deleteTask2'])){
            $deleteTask = "UPDATE `exerciseschedule` SET `ExerciseSchedule2` = '' WHERE `id` = '$id'";
            mysqli_query($conn, $deleteTask);
            header("Location: MainDashBoard.php");
            exit();
        }
        if (isset($_POST['deleteTask3'])){
            $deleteTask = "UPDATE `exerciseschedule` SET `ExerciseSchedule3` = '' WHERE `id` = '$id'";
            mysqli_query($conn, $deleteTask);
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
            </div>
        </nav>
        <!-- Phone Nav -->
        <div id="phoneNavButton">
            <button style="margin:0px;" onclick="togglePhoneBar()">☰</button>
        </div>
    </header>
    <!-- Phone Nav Bar -->
    <div class="phoneMenuBar" id="phoneMenuBar">
        <a href="coursePage.php">Courses</a>
        <a href="MainDashBoard.php" class="Active">Dashboard</a>
        <a href="aboutPage.php">About</a>
        <a href="../../indexss.php">Logout</a>
    </div>

    <main>
        <div class="section1">
            <p style="margin-bottom: 5px; font-weight: bold; font-size: 50px;">Welcome, <?php echo $user; ?>! </p> 
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

                <div style="display:<?php echo ($schedule1Status == 'flex') ? 'flex' : 'none'?>; ">
                    <form action="MainDashBoard.php" method="post" class="scheduleForm">
                        <input type="text" name="TaskInput1" placeholder="Enter Task Here..." class="exerciseInput">
                        <input type="time" name="schedule1Time" class="exerciseInput">
                        <input type="number" name="schedule1Duration" placeholder="Insert Duration Here..." class="exerciseInput">
                        <input type="submit" value="Add" name="Add1" class="exerciseSubmit">
                    </form>
                </div>
                <div  style="display:<?php echo ($schedule1Status == 'none') ? 'flex' : 'none'; ?>; justify-content: space-between;">
                    <div style="display: flex; flex-direction: column;">
                        <h2><?php echo $schedule1Input; ?></h2>
                        <p style="color: #00DAFF;"><?php echo $schedule1Time.' - '.$schedule1Duration.' min'?></p>
                    </div>
                    <div style="display: flex; flex-direction: column;">
                        <h2><?php echo $ExerciseSchedule1Status ?></h2>
                        <form action="MainDashBoard.php" method="post" class="buttonsForm">
                            <input type="submit" value="Finish Task" name="finishTask1" class="finishButton">
                            <input type="submit" value="Delete Task" name="deleteTask1" class="deleteButton">
                        </form>
                    </div>
                </div>



                <div style="display:<?php echo ($schedule2Status == 'flex') ? 'flex' : 'none'?>;">
                    <form action="MainDashBoard.php" method="post" class="scheduleForm">
                        <input type="text" name="TaskInput2" placeholder="Enter Task Here..." class="exerciseInput">
                        <input type="time" name="schedule2Time" class="exerciseInput">
                        <input type="number" name="schedule2Duration" placeholder="Insert Duration Here..."class="exerciseInput">
                        <input type="submit" value="Add" name="Add2" class="exerciseSubmit">
                    </form>
                </div>
                <div  style="display:<?php echo ($schedule2Status == 'none') ? 'flex' : 'none'; ?>; justify-content: space-between; background-color: 	rgba(41, 203, 230, 20%);">
                    <div style="display: flex; flex-direction: column;">
                        <h2><?php echo $schedule2Input;  ?></h2>
                        <p style="color: #00DAFF;"><?php echo $schedule2Time.' - '.$schedule2Duration.' min'?></p>
                    </div>
                    <div style="display: flex; flex-direction: column;">
                        <h2><?php echo $ExerciseSchedule1Status ?></h2>
                        <form action="MainDashBoard.php" method="post" class="buttonsForm">
                            <input type="submit" value="Finish Task" name="finishTask2" class="finishButton">
                            <input type="submit" value="Delete Task" name="deleteTask2" class="deleteButton">
                        </form>
                    </div>
                </div>


                <div style="display:<?php echo ($schedule3Status == 'flex') ? 'flex' : 'none'?>;">
                    <form action="MainDashBoard.php" method="post" class="scheduleForm">
                        <input type="text" name="TaskInput3" placeholder="Enter Task Here..." class="exerciseInput">
                        <input type="time" name="schedule3Time" class="exerciseInput">
                        <input type="number" name="schedule3Duration" placeholder="Insert Duration Here..." class="exerciseInput">
                        <input type="submit" value="Add" name="Add3" class="exerciseSubmit">
                    </form>
                </div>
                <div  style="display:<?php echo ($schedule3Status == 'none') ? 'flex' : 'none'; ?>; justify-content: space-between; background-color: 	rgba(41, 203, 230, 20%);">
                    <div style="display: flex; flex-direction: column;">
                        <h2><?php echo $schedule3Input; ?></h2>
                        <p style="color: #00DAFF;"><?php echo $schedule3Time.' - '.$schedule3Duration.' min'?></p>
                    </div>
                    <div style="display: flex; flex-direction: column;">
                        <h2><?php echo $ExerciseSchedule1Status ?></h2>
                        <form action="MainDashBoard.php" method="post" class="buttonsForm">
                            <input type="submit" value="Finish Task" name="finishTask3" class="finishButton">
                            <input type="submit" value="Delete Task" name="deleteTask3" class="deleteButton">
                        </form>
                    </div>
                </div>


                



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
        <div class="contactInfo">
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
        function togglePhoneBar(){
            if(document.getElementById("phoneMenuBar").style.display === "flex"){
                document.getElementById("phoneMenuBar").style.display = "none";
            }
            else{
                document.getElementById("phoneMenuBar").style.display = "flex";
            }
        }
    </script>



        <script>
            //Chart
            var mondayVal = <?php echo $mondayTotalCalories;?>;
            var tuesdayVal = <?php echo $tuesdayTotalCalories;?>;
            var wednesdayVal = <?php echo $wednesdayTotalCalories;?>;
            var thursdayVal = <?php echo $thursdayTotalCalories;?>;
            var fridayVal = <?php echo $fridayTotalCalories;?>;
            var saturdayVal = <?php echo $saturdayTotalCalories;?>;
            var sundayVal = <?php echo $sundayTotalCalories;?>;

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