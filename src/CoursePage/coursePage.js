function togglePhoneBar(){
    if(document.getElementById("phoneMenuBar").style.display === "flex"){
        document.getElementById("phoneMenuBar").style.display = "none";
    }else{
        document.getElementById("phoneMenuBar").style.display = "flex";
    }
}

function toggleFilter1(){
    if(document.getElementById("filter1").style.display === "block"){
        document.getElementById("filter1").style.display = "none";
    }else{
        document.getElementById("filter1").style.display = "block";
    }
}

function toggleFilter2(){
    if(document.getElementById("filter2").style.display === "block"){
        document.getElementById("filter2").style.display = "none";
    }else{
        document.getElementById("filter2").style.display = "block";
    }
}


function toggleHealthCare() {
    document.querySelectorAll(".HealthCare").forEach(el => {
        el.style.display = "flex";
    });
    document.querySelectorAll(".Nutrition").forEach(el => {
        el.style.display = "none";
    });
    document.querySelectorAll(".PhysicalHealth").forEach(el => {
        el.style.display = "none";
    });
}

function toggleNutrition() {
    document.querySelectorAll(".Nutrition").forEach(el => {
        el.style.display = "flex";
    });
    document.querySelectorAll(".HealthCare").forEach(el => {
        el.style.display = "none";
    });
    document.querySelectorAll(".PhysicalHealth").forEach(el => {
        el.style.display = "none";
    });
}
function togglePhysicalHealth() {
    document.querySelectorAll(".PhysicalHealth").forEach(el => {
        el.style.display = "flex";
    });
    document.querySelectorAll(".Nutrition").forEach(el => {
        el.style.display = "none";
    });
    document.querySelectorAll(".HealthCare").forEach(el => {
        el.style.display = "none";
    });
}

function clearFilter1() {
    document.querySelectorAll(".Nutrition").forEach(el => {
        el.style.display = "flex";
    });
    document.querySelectorAll(".PhysicalHealth").forEach(el => {
        el.style.display = "flex";
    });
    document.querySelectorAll(".HealthCare").forEach(el => {
        el.style.display = "flex";
    });
}

// mobile
function toggleFilter1(){
    if(document.getElementById("filter1").style.display === "block"){
        document.getElementById("filter1").style.display = "none";
    }else{
        document.getElementById("filter1").style.display = "block";
    }
}
function toggleFilter2(){
    if(document.getElementById("filter2").style.display === "block"){
        document.getElementById("filter2").style.display = "none";
    }else{
        document.getElementById("filter2").style.display = "block";
    }
}

function togglePopUp(courseNum){
    switch (courseNum) {
        case 1:
            if(document.getElementById("course1popUp").style.display === "block"){
                document.getElementById("course1popUp").style.display = "none";
            }else{
                document.getElementById("course1popUp").style.display = "block";
            }
            break;
        
        case 2:
            if(document.getElementById("course2popUp").style.display === "block"){
            document.getElementById("course2popUp").style.display = "none";
            }else{
                document.getElementById("course2popUp").style.display = "block";
            }
            break;
        case 3:
            if(document.getElementById("course3popUp").style.display === "block"){
            document.getElementById("course3popUp").style.display = "none";
            }else{
                document.getElementById("course3popUp").style.display = "block";
            }
            break;
        case 4:
            if(document.getElementById("course4popUp").style.display === "block"){
            document.getElementById("course4popUp").style.display = "none";
            }else{
                document.getElementById("course4popUp").style.display = "block";
            }
            break;
        case 5:
            if(document.getElementById("course5popUp").style.display === "block"){
            document.getElementById("course5popUp").style.display = "none";
            }else{
                document.getElementById("course5popUp").style.display = "block";
            }
            break;
        case 6:
            if(document.getElementById("course6popUp").style.display === "block"){
            document.getElementById("course6popUp").style.display = "none";
            }else{
                document.getElementById("course6popUp").style.display = "block";
            }
            break;
        case 7:
            if(document.getElementById("course7popUp").style.display === "block"){
            document.getElementById("course7popUp").style.display = "none";
            }else{
                document.getElementById("course7popUp").style.display = "block";
            }
            break;
        case 8:
            if(document.getElementById("course8popUp").style.display === "block"){
            document.getElementById("course8popUp").style.display = "none";
            }else{
                document.getElementById("course8popUp").style.display = "block";
            }
            break;
        case 9:
            if(document.getElementById("course9popUp").style.display === "block"){
            document.getElementById("course9popUp").style.display = "none";
            }else{
                document.getElementById("course9popUp").style.display = "block";
            }
            break;
        case 10:
            if(document.getElementById("course10popUp").style.display === "block"){
            document.getElementById("course10popUp").style.display = "none";
            }else{
                document.getElementById("course10popUp").style.display = "block";
            }
            break;
        case 11:
            if(document.getElementById("course11popUp").style.display === "block"){
            document.getElementById("course11popUp").style.display = "none";
            }else{
                document.getElementById("course11popUp").style.display = "block";
            }
            break;
        case 12:
            if(document.getElementById("course12popUp").style.display === "block"){
            document.getElementById("course12popUp").style.display = "none";
            }else{
                document.getElementById("course12popUp").style.display = "block";
            }
            break;
        case 13:
            if(document.getElementById("course13popUp").style.display === "block"){
            document.getElementById("course13popUp").style.display = "none";
            }else{
                document.getElementById("course13popUp").style.display = "block";
            }
            break;
        case 14:
            if(document.getElementById("course14popUp").style.display === "block"){
            document.getElementById("course14popUp").style.display = "none";
            }else{
                document.getElementById("course14popUp").style.display = "block";
            }
            break;
        case 15:
            if(document.getElementById("course15popUp").style.display === "block"){
            document.getElementById("course15popUp").style.display = "none";
            }else{
                document.getElementById("course15popUp").style.display = "block";
            }
            break;
        case 16:
            if(document.getElementById("course16popUp").style.display === "block"){
            document.getElementById("course16popUp").style.display = "none";
            }else{
                document.getElementById("course16popUp").style.display = "block";
            }
            break;
        case 17:
            if(document.getElementById("course17popUp").style.display === "block"){
            document.getElementById("course17popUp").style.display = "none";
            }else{
                document.getElementById("course17popUp").style.display = "block";
            }
            break;
        case 18:
            if(document.getElementById("course18popUp").style.display === "block"){
            document.getElementById("course18popUp").style.display = "none";
            }else{
                document.getElementById("course18popUp").style.display = "block";
            }
            break;
        case 19:
            if(document.getElementById("course19popUp").style.display === "block"){
            document.getElementById("course19popUp").style.display = "none";
            }else{
                document.getElementById("course19popUp").style.display = "block";
            }
            break;
        case 20:
            if(document.getElementById("course20popUp").style.display === "block"){
            document.getElementById("course20popUp").style.display = "none";
            }else{
                document.getElementById("course20popUp").style.display = "block";
            }
            break;
    }
}

function CloseTogglePopUp(courseNum){
    switch (courseNum) {
        case 1:
            document.getElementById("course1popUp").style.display = "none";
            break;
        
        case 2:
            document.getElementById("course2popUp").style.display = "none";
            break;
        
        case 3:
            document.getElementById("course3popUp").style.display = "none";
            break;

        case 4:
            document.getElementById("course4popUp").style.display = "none";
            break;

        case 5:
            document.getElementById("course5popUp").style.display = "none";
            break;

        case 6:
            document.getElementById("course6popUp").style.display = "none";
            break;

        case 7:
            document.getElementById("course7popUp").style.display = "none";
            break;

        case 8:
            document.getElementById("course8popUp").style.display = "none";
            break;

        case 9:
            document.getElementById("course9popUp").style.display = "none";
            break;

        case 10:
            document.getElementById("course10popUp").style.display = "none";
            break;

            
        case 11:
            document.getElementById("course11popUp").style.display = "none";
            break;

        case 12:
            document.getElementById("course12popUp").style.display = "none";
            break;

        case 13:
            document.getElementById("course13popUp").style.display = "none";
            break;
            
            
        case 14:
            document.getElementById("course14popUp").style.display = "none";
            break;
            
        case 15:
            document.getElementById("course15popUp").style.display = "none";
            break;

        case 16:
            document.getElementById("course16popUp").style.display = "none";
            break;

            
        case 17:
            document.getElementById("course17popUp").style.display = "none";
            break;

            
        case 18:
            document.getElementById("course18popUp").style.display = "none";
            break;
            
        case 19:
            document.getElementById("course19popUp").style.display = "none";
            break;
            
        case 20:
            document.getElementById("course20popUp").style.display = "none";
            break;
    }
}


// NUTRITION
// HealthCare
// PhysicalHealth