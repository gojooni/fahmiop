<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
            background: #f4f4f9;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background: #3a6186;
            color: #fff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            margin-bottom: 20px;
        }

        .sidebar a {
            text-decoration: none;
            color: #fff;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            transition: background 0.3s;
            width: 100%;
        }

        .sidebar a:hover {
            background: #5a9;
        }

        .sidebar a.active {
            background: #47a447;
        }

        /* Content Area Styles */
        .main-content {
            flex: 1;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 24px;
            color: #333;
        }

        .header .logout {
            background: #e74c3c;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .header .logout:hover {
            background: #c0392b;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .card h3 {
            margin-bottom: 10px;
            color: #333;
        }

        .card p {
            color: #666;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .header h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="admin.php" class="active">Dashboard</a>
        <a href="users.php">Users</a>
        <a href="settings.php">Settings</a>
        <a href="help.php">Help</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h1>Welcome, Admin</h1>
            <a href="login.php" class="logout">Logout</a>
        </div>

        <div class="cards">
            <div class="card">
                <h3>Total Users</h3>
                <p>500</p>
            </div>
            <div class="card">
                <h3>Active Sessions</h3>
                <p>45</p>
            </div>
            <div class="card">
                <h3>Reports</h3>
                <p>12</p>
            </div>
            <div class="card">
                <h3>New Messages</h3>
                <p>8</p>
            </div>
        </div>
    </div>
</body>
</html>
