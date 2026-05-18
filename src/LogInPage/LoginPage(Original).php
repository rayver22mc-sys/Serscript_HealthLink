<?php
include("../DataBase/dataBaseConnection.php");

$message = '';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'] ?? '';

    /* ----------------- REGISTER ----------------- */
    if ($action == 'register') {
        $username = trim(filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS));
        $email    = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
        $password = $_POST['password'];
        $confirm  = $_POST['confirmPass'];

        if (empty($username) || empty($email) || empty($password)) {
            $message = "Please fill in all fields.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = "Invalid email format.";
        } elseif ($password !== $confirm) {
            $message = "Passwords do not match!";
        } elseif (strlen($password) < 6) {
            $message = "Password must be at least 6 characters.";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, email, password) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hash);
                try {
                    mysqli_stmt_execute($stmt);
                    $message = "Account Registered Successfully!";
                } catch (mysqli_sql_exception $e) {
                    $message = "Error: Username or Email is already taken.";
                }
                mysqli_stmt_close($stmt);
            } else {
                $message = "Database error. Please try later.";
            }
        }
    }

    /* ----------------- LOGIN ----------------- */
    elseif ($action == 'login') {
        $user_input = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS));
        $password_input = $_POST['password'];

        if (empty($user_input) || empty($password_input)) {
            $message = "Please enter username/email and password.";
        } else {
            $sql = "SELECT * FROM users WHERE email = ? OR user = ?";
            $stmt = mysqli_prepare($conn, $sql);
            
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "ss", $user_input, $user_input);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($result)) {
                    if (password_verify($password_input, $row["password"])) {
                        $message = "Login successful! Welcome " . htmlspecialchars($row['user']);
                    } else {
                        $message = "Incorrect Password.";
                    }
                } else {
                    $message = "User not found.";
                }
                mysqli_stmt_close($stmt);
            } else {
                $message = "System error. Please try again.";
            }
        }
    }
}

if (isset($conn) && $conn instanceof mysqli) {
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HealthLink User Authentication Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="LoginPage.css">
</head>
<body>
    <header>
        <div class="logo">
            <div class="heart"><img src="../assets/heart.png" alt="Heart Icon"></div>
            <div class="brand">Health<span class="cyan">Link</span></div>
        </div>
    </header>

    <div class="formContainer">
        <div class="formStyle">
            <div class="tabs">
                <button type="button" class="tab active" id="tab-login" onclick="switchTab('login')">LOG IN</button>
                <button type="button" class="tab" id="tab-register" onclick="switchTab('register')">REGISTER</button>
            </div>

            <div class="boxStyle" id="boxStyle">
                <!-- Login Form -->
                <div id="loginForm" class="formContent">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <input type="hidden" name="action" value="login">
                        <div class="inputGroup"><input type="text" name="email" placeholder="Username or Email" required></div>
                        <div class="inputGroup"><input type="password" name="password" placeholder="Password" required></div>
                        <button type="submit" class="submitButton">LOG IN</button>
                    </form>
                </div>

                <!-- Register Form -->
                <div id="registerForm" class="formContent hidden">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onsubmit="return validatePasswords()">
                        <input type="hidden" name="action" value="register">
                        <div class="inputGroup"><input type="text" name="username" placeholder="Username" required></div>
                        <div class="inputGroup"><input type="email" name="email" placeholder="Email Address" required></div>
                        <div class="inputGroup"><input type="password" id="password" name="password" placeholder="Password" required></div>
                        <div class="inputGroup"><input type="password" id="confirmPass" name="confirmPass" placeholder="Confirm Password" required></div>
                        <button type="submit" class="submitButton">SIGN UP</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        
        function validatePasswords() {
            const pass = document.getElementById('password').value;
            const conf = document.getElementById('confirmPass').value;
            if (pass !== conf) {
                alert("Passwords do not match!");
                return false;
            }
            return true;
        }

        function switchTab(tab) {
            const root = document.documentElement;
            const isLogin = (tab === 'login');

            document.getElementById('loginForm').classList.toggle('hidden', !isLogin);
            document.getElementById('registerForm').classList.toggle('hidden', isLogin);
            document.getElementById('tab-login').classList.toggle('active', isLogin);
            document.getElementById('tab-register').classList.toggle('active', !isLogin);
            
            const box = document.getElementById('boxStyle');
            box.style.borderRadius = isLogin ? '0 16px 16px 16px' : '16px 0 16px 16px';

            if (isLogin) {
                root.style.setProperty('--circle-top', 'auto');
                root.style.setProperty('--circle-bottom', '-350px');
                root.style.setProperty('--circle-left', '-350px');
                root.style.setProperty('--circle-right', 'auto');
            } else {
                root.style.setProperty('--circle-top', '-350px');
                root.style.setProperty('--circle-bottom', 'auto');
                root.style.setProperty('--circle-left', 'auto');
                root.style.setProperty('--circle-right', '-350px');
            }
        }

        // Check URL parameter to activate the correct tab
        const urlParams = new URLSearchParams(window.location.search);
        const tab = urlParams.get('tab');
        if (tab === 'register') {
            switchTab('register');
        } else if (tab === 'login') {
            switchTab('login');
        }

        function showMessage(msg) {
            if (msg && msg !== '') alert(msg);
        }

        showMessage("<?php echo addslashes($message); ?>");
    </script>
</body>
</html>