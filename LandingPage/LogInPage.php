<!-- 
    NOTE: This page is a placeholder for the planned log in 
    page which will connect the landing page to the dashboard
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
            align-content: center;
            }

        .formDiv{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            background-color: 	rgba(217, 217, 217, 20%);

            border-radius: 25px;

            height: 320px;
            width: 300px;
            margin: 20px 40%;
            }

        .loginDiv{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            }

        .registerFormDiv{

            /* Add height width to keep the size of the form constant */
        }
    </style>
</head>
<body>
    <header>
        <div class="heart-icon"><img src="assets/heart.png" alt="Heart Icon"></div>
        <h1 style="font-size: 35px; margin: 0px;">Health<span style="color: #0CEFEA;">Link</span></h1>
    </header>

    
    <div class="formDiv">
        <!-- Log In form -->
        <div class="loginDiv">
            <form action="MainDashBoard.php" method="post"> <!-- This is connected to the dashboard -->
                <input type="text" name="User" placeholder="Username" required>
                <br />
                <input type="password" name="Password" placeholder="Password" required>
                <br />
                <input type="checkbox" name="rememberMe" value="remember">
                 <label for="rememberMe"> Remember me?</label> <!-- fix font -->
                <br>
                <input type="submit">
            </form>
        </div>
        

        <!-- Register Form -->
         <div class="registerFormDiv">
             <form action="MainDashBoard.php" method="post"> <!-- This is connected to the dashboard -->
                 <input type="text" name="Email" placeholder="Email" required><br />
                 <input type="text" name="User" placeholder="Username" required><br />
                 <input type="password" name="Password" placeholder="Password" required><br />
                 <input type="submit">
             </form>
         </div>

    </div>

</body>
</html>