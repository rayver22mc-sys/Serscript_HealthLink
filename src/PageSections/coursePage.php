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
        <a href="MainDashBoard.php" style="text-decoration: none; color: inherit;">
            <div class="logo">
                <img src="../assets/heart.png" alt="Heart Icon">
                <p>Health<span></span><span style="color: #0CEFEA;">Link</span></p>
            </div>
        </a>
        <!-- Desktop Nav -->
        <nav class="desktopNavButtons" id="desktopNavButtons">
            <a href="coursePage.php" class="Active">Articles</a>
            <a href="MainDashBoard.php">Dashboard</a>
            <a href="aboutPage.php">About</a>
            <a class="LogOutButton" href="../../indexss.php">Log out</a>
        </nav>

        <!-- Phone Nav -->
        <div id="phoneNavButton">
            <button style="margin:0px;" onclick="togglePhoneBar()">☰</button>
        </div>
    </header>

    <!-- Phone Menu Bar -->
    <div class="phoneMenuBar" id="phoneMenuBar">
        <a href="coursePage.php" class="Active">Articles</a>
        <a href="MainDashBoard.php">Dashboard</a>
        <a href="aboutPage.php">About</a>
        <a href="../../indexss.php">Logout</a>
    </div>

    <main>
        <div style="display:flex; margin-top: 70px;">
            <div class="desktopFilterSection">
                <!-- filter 1 -->
                <button onclick="toggleFilter1()">Health </button>
                    <div class="filter1" id="filter1">
                        <button onclick="toggleNutrition()" id="nutritionButton">Nutrition</button><br>
                        <button onclick="toggleHealthCare()" id="healthCareButton">HealthCare</button>
                    </div>

                <!-- filter 2 -->
                <button onclick="toggleFilter2()">Fitness </button>
                    <div class="filter2" id="filter2">
                        <button onclick="togglePhysicalHealth();" id="physicalHealthButton">Physical Health</button>
                    </div>
                <button onclick="clearFilter1()">Clear Filter </button>
            </div>
            <div>
                <h1 class="tagLine">Explore Top Articles</h1>
            </div>
        </div>

        <div class="mobileFilterSection">
            <!-- filter 1 -->
            <button onclick="toggleFilter1p()">Health</button>
                <div class="filter1" id="filter1">
                    <button onclick="toggleNutrition()" id="nutritionButton">Nutrition</button>
                    <button onclick="toggleHealthCare()"id="healthCareButton">HealthCare</button>
                </div>

            <!-- filter 2 -->
            <button onclick="toggleFilter2p()">Fitness</button>
                <div class="filter2" id="filterp">
                    <button onclick="togglePhysicalHealth();" style="display: block;">Physical Health</button>
                </div>
        </div>

        <div class="coursesDiv">
            <!-- Course Row 1 -->
            <div class="PhysicalHealth">
                <h2>Importance of Physical Activity</h2>
                <p>Physical activity is essential for maintaining overall health and preventing disease. The CDC provides guidance on how regular movement improves well-being.</p>
                <button onclick="togglePopUp(1)">View Details</button>
            </div>

            <div class="Nutrition">
                <h2>Nutrition Guidelines for Healthy Living</h2>
                <p>Nutrition guidelines provide recommendations for maintaining a balanced and healthy diet. The CDC outlines key principles for proper nutrition.</p>
                <button onclick="togglePopUp(2)">View Details</button>
            </div>

            <div class="Nutrition">
                <h2>Balancing Nutrition and Physical Activity</h2>
                <p>Nutrition and physical activity work together to promote a healthy lifestyle. ODPHP emphasizes the importance of combining both for better health outcomes.</p>
                <button onclick="togglePopUp(3)">View Details</button>
            </div>

            <!-- Course Row 2 -->
            <div class="HealthCare">
                <h2>Building a Healthy Lifestyle</h2>
                <p>A healthy lifestyle includes both proper nutrition and regular fitness. The HHS provides strategies for maintaining overall health and well-being.</p>
                <button onclick="togglePopUp(4)">View Details</button>
            </div>
            <div class="HealthCare">
                <h2>Promoting Wellness Through Nutrition and Activity</h2>
                <p>Nutrition and physical activity are key components of overall wellness. This resource highlights their importance in daily life.</p>
                <button onclick="togglePopUp(5)">View Details</button>
            </div>
            <div class="PhysicalHealth">
                <h2>Achieving a Healthy Weight</h2>
                <p>Maintaining a healthy weight is important for overall health. The CDC explains how nutrition and activity contribute to weight management.</p>
                <button onclick="togglePopUp(6)">View Details</button>
            </div>

            <!-- Course Row 3 -->
            <div class="Nutrition">
                <h2>Nutrition Guidelines in Food Services</h2>
                <p>Nutrition guidelines help improve food choices in various settings. The CDC promotes healthier food environments through these standards.</p>
                <button onclick="togglePopUp(7)">View Details</button>
            </div>
            <div class="Nutrition">
                <h2>Reliable Nutrition Information</h2>
                <p>Nutrition.gov provides trusted information on healthy eating and nutrition. It serves as a guide for making informed dietary choices.</p>
                <button onclick="togglePopUp(8)">View Details</button>
            </div>
            <div class="PhysicalHealth">
                <h2>Understanding Nutrition and Weight Status</h2>
                <p>This resource explains how nutrition and physical activity influence weight and health. The CDC provides key indicators related to these factors.</p>
                <button onclick="togglePopUp(9)">View Details</button>
            </div>
            <div class="Nutrition">
                <h2>Dietary Guidelines for Healthy Living</h2>
                <p>The Dietary Guidelines provide science-based advice on what to eat for good health. They help individuals make informed food choices.</p>
                <button onclick="togglePopUp(10)">View Details</button>
            </div>

            <!-- Course Row 4 -->
            <div class="HealthCare">
                <h2>Sleeping Well for Better Health</h2>
                <p>Sleeping well is essential for maintaining both physical and mental health. The CDC provides guidance on how good sleep habits can improve overall well-being and daily functioning.</p>
                <button onclick="togglePopUp(11)">View Details</button>
            </div>
            <div class="HealthCare">
                <h2>Understanding the Importance of Sleep</h2>
                <p>Sleep is a basic human need that affects nearly every aspect of health. The CDC explains how sleep supports body functions and why it should be prioritized.</p>
                <button onclick="togglePopUp(12)">View Details</button>
            </div>
            <div class="HealthCare">
                <h2>Sleep Statistics in Adults</h2>
                <p>Sleep data from the CDC highlights how much sleep adults get and its impact on health. These statistics show trends and concerns related to sleep patterns.</p>
                <button onclick="togglePopUp(13)">View Details</button>
            </div>
            <div class="HealthCare">
                <h2>Youth High-Risk Drug Use</h2>
                <p>High-risk drug use among youth can lead to serious health and social consequences. The CDC provides insights into the causes and effects of substance use in young people.</p>
                <button onclick="togglePopUp(14)">View Details</button>
            </div>
            <div class="HealthCare">
                <h2>Overdose Prevention and Community Engagement</h2>
                <p>The ENGAGE toolkit supports communities in preventing drug overdoses through collaboration and education. It provides resources for building effective partnerships.</p>
                <button onclick="togglePopUp(15)">View Details</button>
            </div>
            <div class="HealthCare">
                <h2>Building Drug-Free Communities</h2>
                <p>The Drug-Free Communities program helps reduce substance use through community-driven strategies. It empowers local groups to create safer environments.</p>
                <button onclick="togglePopUp(16)">View Details</button>
            </div>
            <div class="HealthCare">
                <h2>Mental Health and Substance Use Disorders</h2>
                <p>Co-occurring disorders refer to the presence of both mental health and substance use conditions. SAMHSA explains how these conditions interact and affect individuals.</p>
                <button onclick="togglePopUp(17)">View Details</button>
            </div>
            <div class="PhysicalHealth">
                <h2>Meeting Physical Activity Recommendations</h2>
                <p>Regular physical activity is essential for maintaining good health. The CDC outlines recommended guidelines to help individuals stay active and reduce health risks.</p>
                <button onclick="togglePopUp(18)">View Details</button>
            </div>
            <div class="PhysicalHealth">
                <h2>Incorporating Physical Activity into Daily Life</h2>
                <p>Adding physical activity into a busy schedule can be simple and manageable. The CDC provides practical ways for adults to stay active every day.</p>
                <button onclick="togglePopUp(19)">View Details</button>
            </div>
            <div class="PhysicalHealth">
                <h2>The Importance of Physical Activity</h2>
                <p>Physical activity plays a key role in improving overall health and preventing diseases. The WHO highlights its global importance for all age groups.</p>
                <button onclick="togglePopUp(20)">View Details</button>
            </div>
        </div>

        <div class="CoursePopUp">
            <div id="course1popUp">
                <h2>Importance of Physical Activity</h2>
                <p>Regular physical activity strengthens the body and improves cardiovascular health. It helps maintain a healthy weight and reduces the risk of noncommunicable diseases. Exercise also supports mental health by reducing stress and anxiety. People of all ages benefit from staying physically active. Promoting movement is essential for healthier communities worldwide.</p>
                <button onclick="CloseTogglePopUp(1)">Close</button>
                <a href="https://www.cdc.gov/physicalactivity/" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course2popUp">
                <h2>Nutrition Guidelines for Healthy Living</h2>
                <p>Healthy eating involves consuming a variety of nutrient-rich foods. A balanced diet includes fruits, vegetables, whole grains, and lean proteins. Proper nutrition supports growth, energy, and immune function. Limiting processed foods and added sugars is important for long-term health. Following nutrition guidelines helps maintain overall well-being.</p>
                <button onclick="CloseTogglePopUp(2)">Close</button>
                <a href="https://www.cdc.gov/nutrition/php/guidelines-recommendations/index.html" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course3popUp">
                <h2>Balancing Nutrition and Physical Activity</h2>
                <p>A healthy lifestyle requires both proper nutrition and regular physical activity. Eating well provides the energy needed for daily movement. Physical activity helps the body use nutrients effectively. Together, they reduce the risk of chronic diseases. Maintaining balance supports long-term health and wellness.</p>
                <button onclick="CloseTogglePopUp(3)">Close</button>
                <a href="https://odphp.health.gov/our-work/nutrition-physical-activity" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course4popUp">
                <h2>Building a Healthy Lifestyle</h2>
                <p>Healthy living involves making consistent choices that support well-being. Balanced nutrition fuels the body, while exercise keeps it strong. Regular habits improve physical and mental health. Small lifestyle changes can lead to long-term benefits. Maintaining a healthy routine enhances quality of life.</p>
                <button onclick="CloseTogglePopUp(4)">Close</button>
                <a href="https://www.hhs.gov/programs/prevention-and-wellness/nutrition-and-fitness/index.html" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course5popUp">
                <h2>Promoting Wellness Through Nutrition and Activity</h2>
                <p>Healthy eating and regular exercise contribute to overall wellness. They help maintain a healthy weight and reduce disease risk. Communities play a role in promoting healthier lifestyles. Education encourages better habits and informed choices. Consistent healthy behaviors lead to improved quality of life.</p>
                <button onclick="CloseTogglePopUp(5)">Close</button>
                <a href="https://health.mo.gov/living/wellness/nutrition/nutritionphysicalactivity/index.php" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course6popUp">
                <h2>Achieving a Healthy Weight</h2>
                <p>A healthy weight reduces the risk of many chronic diseases. Balanced nutrition and regular exercise are key factors in weight management. Portion control and mindful eating support healthy habits. Physical activity helps burn calories and maintain fitness. Consistency is essential for long-term success.</p>
                <button onclick="CloseTogglePopUp(6)">Close</button>
                <a href="https://www.cdc.gov/healthyweight/index.html" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course7popUp">
                <h2>Nutrition Guidelines in Food Services</h2>
                <p>Food service guidelines encourage offering healthier meal options. They promote balanced meals with proper nutrients. Reducing salt, sugar, and unhealthy fats is important. These guidelines support better public health outcomes. Creating healthier environments helps individuals make better choices. </p>
                <button onclick="CloseTogglePopUp(7)">Close</button>
                <a href="https://www.cdc.gov/nutrition/php/public-health-strategy/food-service-and-nutrition-guidelines.html" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course8popUp">
                <h2>Reliable Nutrition Information</h2>
                <p>Access to reliable nutrition information supports healthier lifestyles. The website offers resources on balanced diets and meal planning. It helps individuals understand proper nutrition needs. Educational tools make healthy eating easier to follow. Informed choices lead to better long-term health.</p>
                <button onclick="CloseTogglePopUp(8)">Close</button>
                <a href="https://www.nutrition.gov" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course9popUp">
                <h2>Understanding Nutrition and Weight Status</h2>
                <p>Nutrition and activity levels directly affect weight status. Poor habits can lead to obesity and related health issues. Monitoring these factors helps improve public health outcomes. Healthy behaviors support proper weight management. Awareness encourages positive lifestyle changes.</p>
                <button onclick="CloseTogglePopUp(9)">Close</button>
                <a href="https://www.cdc.gov/cdi/indicator-definitions/npao.html" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course10popUp">
                <h2>Dietary Guidelines for Healthy Living</h2>
                <p>The guidelines recommend a balanced diet rich in nutrients. They emphasize fruits, vegetables, whole grains, and lean proteins. Limiting sugar, sodium, and saturated fats is important. These recommendations support overall health and disease prevention. Following the guidelines promotes long-term wellness.</p>
                <button onclick="CloseTogglePopUp(10)">Close</button>
                <a href="https://www.dietaryguidelines.gov" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course11popUp">
                <h2>Sleeping Well for Better Health</h2>
                <p>Sleep plays a vital role in healing and maintaining the body. Getting enough quality sleep helps improve brain performance, mood, and immune function. Poor sleep can increase the risk of chronic conditions such as heart disease and depression. Healthy sleep habits include maintaining a consistent sleep schedule and creating a comfortable sleep environment. Practicing good sleep hygiene can lead to better energy levels and improved quality of life.</p>
                <button onclick="CloseTogglePopUp(11)">Close</button>
                <a href="https://www.cdc.gov/cancer-survivors/healthy-living-guides/sleep.html" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course12popUp">
                <h2>Understanding the Importance of Sleep</h2>
                <p>Sleep allows the body to repair itself and prepare for the next day. It supports brain development, emotional well-being, and physical health. Lack of sleep can lead to difficulty concentrating, weakened immunity, and increased stress. Adults generally need at least 7 hours of sleep each night for optimal health. Prioritizing sleep helps improve productivity and overall life satisfaction. </p>
                <button onclick="CloseTogglePopUp(12)">Close</button>
                <a href="https://www.cdc.gov/sleep/about/index.html" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course13popUp">
                <h2>Sleep Statistics in Adults</h2>
                <p>Many adults do not get the recommended amount of sleep each night. Insufficient sleep is linked to various health problems, including obesity and diabetes. Sleep deprivation can also affect mental health and daily performance. Data helps identify patterns and guide public health strategies. Understanding sleep statistics encourages individuals to prioritize better sleep habits.</p>
                <button onclick="CloseTogglePopUp(13)">Close</button>
                <a href="https://www.cdc.gov/sleep/data-research/facts-stats/adults-sleep-facts-and-stats.html" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course14popUp">
                <h2>Youth High-Risk Drug Use</h2>
                <p>Substance use among youth increases the risk of addiction and long-term health issues. It can affect brain development, decision-making, and academic performance. Risk factors include peer pressure, mental health challenges, and lack of awareness. Prevention efforts focus on education, support systems, and early intervention. Addressing youth drug use is essential for building healthier communities.</p>
                <button onclick="CloseTogglePopUp(14)">Close</button>
                <a href="https://www.cdc.gov/youth-behavior/risk-behaviors/youth-high-risk-drug-use.html" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course15popUp">
                <h2>Overdose Prevention and Community Engagement</h2>
                <p>The ENGAGE initiative promotes teamwork among organizations to address overdose risks. It encourages community-based strategies and shared responsibility. Education and awareness campaigns play a key role in prevention efforts. The toolkit offers guidance on outreach, communication, and intervention planning. Strong partnerships can significantly reduce overdose incidents.</p>
                <button onclick="CloseTogglePopUp(15)">Close</button>
                <a href="https://www.cdc.gov/overdose-prevention/engage/" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course16popUp">
                <h2>Building Drug-Free Communities</h2>
                <p>This program focuses on preventing youth substance use through community action. It supports collaboration between schools, families, and local organizations. Education and awareness campaigns are key components of the initiative. Communities develop tailored strategies based on their specific needs. Long-term efforts help create healthier and safer environments.</p>
                <button onclick="CloseTogglePopUp(16)">Close</button>
                <a href="https://www.cdc.gov/dfc/" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course17popUp">
                <h2>Mental Health and Substance Use Disorders</h2>
                <p>People with co-occurring disorders experience both mental health issues and substance use challenges. These conditions often influence each other and can worsen over time. Proper diagnosis and integrated treatment are essential for recovery. Support systems and therapy play a critical role in managing both conditions. Addressing both disorders together leads to better health outcomes.</p>
                <button onclick="CloseTogglePopUp(17)">Close</button>
                <a href="https://www.samhsa.gov/co-occurring-disorders" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course18popUp">
                <h2>Meeting Physical Activity Recommendations</h2>
                <p>Physical activity helps improve heart health, muscle strength, and overall fitness. Adults should aim for at least 150 minutes of moderate activity each week. Regular exercise reduces the risk of chronic diseases such as diabetes and hypertension. It also improves mood and mental well-being. Following recommended activity levels supports a healthier and more active lifestyle.</p>
                <button onclick="CloseTogglePopUp(18)">Close</button>
                <a href="https://www.cdc.gov/physicalactivity/basics/adults/index.htm" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course19popUp">
                <h2>Incorporating Physical Activity into Daily Life</h2>
                <p>Starting small is an effective way to build an active lifestyle. Activities like walking, stretching, or taking the stairs can make a difference. Consistency is more important than intensity when forming habits. Finding enjoyable activities increases motivation to stay active. Making physical activity part of daily routines leads to long-term health benefits.</p>
                <button onclick="CloseTogglePopUp(19)">Close</button>
                <a href="https://www.cdc.gov/physicalactivity/basics/adding-physical-activity-for-adults.html" target="_blank"><button>Learn More</button></a>
            </div>
            <div id="course20popUp">
                <h2>The Importance of Physical Activity</h2>
                <p>Regular physical activity strengthens the body and improves cardiovascular health. It helps maintain a healthy weight and reduces the risk of noncommunicable diseases. Exercise also supports mental health by reducing stress and anxiety. People of all ages benefit from staying physically active. Promoting movement is essential for healthier communities worldwide.</p>
                <button onclick="CloseTogglePopUp(20)">Close</button>
                <a href="https://www.who.int/news-room/fact-sheets/detail/physical-activity" target="_blank"><button>Learn More</button></a>
            </div>
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

<script src="../CoursePage/coursePage.js"></script>
</body>
</html>