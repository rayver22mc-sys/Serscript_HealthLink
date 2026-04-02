<?php
$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action']) && $_POST['action'] == 'login') {
        $email = $_POST['email'] ?? '';
        $message = "Login attempted for: " . htmlspecialchars($email);
    } elseif (isset($_POST['action']) && $_POST['action'] == 'register') {
        $username = $_POST['username'] ?? '';
        $pass = $_POST['password'] ?? '';
        $conf = $_POST['confirm_password'] ?? '';
        
        if ($pass !== $conf) {
            $message = "Error: Passwords do not match!";
        } else {
            $message = "Registration attempted for: " . htmlspecialchars($username);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HealthLink User Authentication Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <style>
        :root {
            --cyan: #0CEFEA;
            --yellow: #FFC800;
            --dark-header: #062B3C;
            --dark-bg: #083C52;
            --card-bg: rgba(255, 255, 255, .10); 
            
            --circle-top: auto;
            --circle-bottom: -350px; 
            --circle-left: -350px;
            --circle-right: auto;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: "Inter", sans-serif;
            background-color: var(--dark-bg);
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden; 
        }

        /* Circle */
        body::after {
            content: "";
            position: absolute;
            width: 900px;
            height: 900px;
            top: var(--circle-top);
            bottom: var(--circle-bottom);
            left: var(--circle-left);
            right: var(--circle-right);
            background-color: rgba(12, 239, 234, 0.12); 
            border-radius: 50%;
            z-index: 0;
            pointer-events: none;
            transition: all 1.5s cubic-bezier(0.65, 0, 0.35, 1);
        }

        header {
            background-color: var(--dark-header);
            padding: 25px 115px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo { display: flex; align-items: center; gap: 12px; }
        .heart-icon img { width: 40px; height: auto; display: block; }
        .brand { font-size: 22px; font-weight: 600; }
        .cyan { color: var(--cyan); }

        .auth-container {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px 20px;
            position: relative;
            z-index: 10;
        }

        .auth-box { width: 100%; max-width: 480px; }
        .tabs { display: flex; width: 100%; position: relative; z-index: 2; }

        .tab-btn {
            flex: 1;
            padding: 16px 20px;
            background: transparent;
            border: none;
            color: #C5DDE5;
            font-size: 14px;
            letter-spacing: 1px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
        }

        .tab-btn.active {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border-radius: 16px 16px 0 0;
            color: white;
        }

        .box-body {
            background: var(--card-bg);
            backdrop-filter: blur(10px); 
            padding: 40px;
            border-radius: 0 16px 16px 16px; 
            position: relative;
            z-index: 1;
            transition: border-radius 0.5s ease;
        }

        .input-group { margin-bottom: 20px; }

        input {
            width: 100%;
            padding: 15px;
            background: rgba(0, 0, 0, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: white;
            font-size: 15px;
            outline: none;
        }

        input:focus { border-color: var(--cyan); background: rgba(0, 0, 0, 0.4); }

        .btn-submit {
            width: 100%;
            padding: 15px;
            background-color: var(--cyan);
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 100;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .btn-submit:hover { opacity: 0.9; }
        .hidden { display: none; }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <div class="heart-icon"><img src="assets/heart.png" alt="Heart Icon"></div>
            <div class="brand">Health<span class="cyan">Link</span></div>
        </div>
    </header>

    <div class="auth-container">
        <div class="auth-box">
            <div class="tabs">
                <button type="button" class="tab-btn active" id="tab-login" onclick="switchTab('login')">LOG IN</button>
                <button type="button" class="tab-btn" id="tab-register" onclick="switchTab('register')">REGISTER</button>
            </div>

            <div class="box-body" id="box-body">
                <!-- Login Form -->
                <div id="form-login" class="form-content">
                    <form method="POST">
                        <input type="hidden" name="action" value="login">
                        <div class="input-group"><input type="email" name="email" placeholder="Email Address" required></div>
                        <div class="input-group"><input type="password" name="password" placeholder="Password" required></div>
                        <button type="submit" class="btn-submit">LOG IN</button>
                    </form>
                </div>

                <!-- Register Form -->
                <div id="form-register" class="form-content hidden">
                    <form method="POST" onsubmit="return validatePasswords()">
                        <input type="hidden" name="action" value="register">
                        <div class="input-group"><input type="text" name="username" placeholder="Username" required></div>
                        <div class="input-group"><input type="email" name="email" placeholder="Email Address" required></div>
                        <div class="input-group"><input type="password" id="reg-pass" name="password" placeholder="Password" required></div>
                        <div class="input-group"><input type="password" id="reg-conf" name="confirm_password" placeholder="Confirm Password" required></div>
                        <button type="submit" class="btn-submit">SIGN UP</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Trigger window prompt if PHP message exists
        <?php if(!empty($message)): ?>
            alert("<?php echo addslashes($message); ?>");
        <?php endif; ?>

        function validatePasswords() {
            const pass = document.getElementById('reg-pass').value;
            const conf = document.getElementById('reg-conf').value;
            if (pass !== conf) {
                alert("Passwords do not match!");
                return false;
            }
            return true;
        }

        function switchTab(tab) {
            const root = document.documentElement;
            const isLogin = (tab === 'login');

            document.getElementById('form-login').classList.toggle('hidden', !isLogin);
            document.getElementById('form-register').classList.toggle('hidden', isLogin);
            document.getElementById('tab-login').classList.toggle('active', isLogin);
            document.getElementById('tab-register').classList.toggle('active', !isLogin);
            
            // Seamless tab transition
            document.getElementById('box-body').style.borderRadius = isLogin ? '0 16px 16px 16px' : '16px 0 16px 16px';

            // Login and Register Animation
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
    </script>
</body>
</html>