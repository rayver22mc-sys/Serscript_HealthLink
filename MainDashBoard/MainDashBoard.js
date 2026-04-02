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