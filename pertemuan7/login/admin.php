<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4c8cfa, #5edb99);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        .container h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        .container p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        .container a {
            display: inline-block;
            margin: 10px 5px;
            padding: 10px 20px;
            background: #fff;
            color: #4c8cfa;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .container a:hover {
            background: #4c8cfa;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>hormat kepada, Admin!</h1>
        <p>Login berhasil</p>
        <div>
            
            
            <a href="login.php">Logout</a>
        </div>
    </div>
</body>
</html>
