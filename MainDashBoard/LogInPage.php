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
            justify-content: space-between;
            }

        .LoginDiv{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <header>
        <h1 style="font-size: 35px; margin: 0px;">Health<span style="color: #0CEFEA;">Link</span></h1>
    </header>

    <div class="LoginDiv">
        <div>
            <h5>Log In</h5>
        </div>
        <form action="MainDashBoard.php" method="post">
            <label for="Name"></label>
            <input type="text" name="User" required>
            <input type="submit" name="" id="">
        </form>
    </div>
</body>
</html>