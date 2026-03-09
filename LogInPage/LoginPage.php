<?php
    include("../DataBase/dataBaseConnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h1>Login</h1><br>
        <label for="name">Name: </label>
        <input type="text" name="Name">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>
        <input type="submit" name="Login" value="Login">
    </form>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h1>Registration</h1><br>
        <label for="name">Name: </label>
        <input type="text" name="Name">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email">
        <br>
        <input type="submit" name="Register" value="Register">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = filter_input(INPUT_POST, "Name", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    //register
        if(isset($_POST['Register'])){
            if(empty($name)){echo"Enter Name";}
            elseif(empty($password)){echo"Enter Password";}
            else{
                $hash= password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (user, password) VALUES ('$name', '$$hash')";  

                try{
                    mysqli_query($conn, $sql);
                    echo "Acc Registered";
                }
                catch(mysqli_sql_exception){echo"Name is taken";}
            }
        }

        if(isset($_POST['Login'])){
            $sql = "SELECT * FROM users Where user = '$name'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                if($password == $row["password"]){echo "Password correct";}
                else{echo"Password Incorrect";}
            }else{
                echo "User not found";
            }
        }
    }
    mysqli_close($conn);
?>