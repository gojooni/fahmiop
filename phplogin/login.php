<?php
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek username & password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        // jika benar, redirect ke halaman admin
        header("location: admin.php");
        exit;
    } else {
        // jika salah tampilkan pesan kesalahan
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #3a6186, #89253e);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            text-align: left;
        }

        input[type="text"], input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #5a9;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #47a447;
        }

        .show-password {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .show-password input[type="checkbox"] {
            margin-right: 10px;
        }

        .error-message {
            color: red;
            font-style: italic;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <?php if (isset($error)): ?>
            <p class="error-message">Username/Password salah!</p>
        <?php endif; ?>
        <form action="" method="post">
            <label for="user">Username:</label>
            <input type="text" name="username" id="user" placeholder="Enter your username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>

            <div class="show-password">
                <input type="checkbox" id="togglePassword">
                <label for="togglePassword">Show Password</label>
            </div>

            <button type="submit" name="submit">Login</button>
        </form>
    </div>

    <script>
        // Toggle visibility of password
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');

        togglePassword.addEventListener('change', () => {
            if (togglePassword.checked) {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        });
    </script>
</body>
</html>
