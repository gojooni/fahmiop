<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <style>
        .settings-form {
            margin-top: 20px;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .settings-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .settings-form input, .settings-form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .settings-form button {
            background: #5a9;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }

        .settings-form button:hover {
            background: #47a447;
        }

        .back-button a {
    display: inline-block;
    background: #3a6186;
    color: #fff;
    padding: 10px 15px;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s;
}

.back-button a:hover {
    background: #5a9;
}
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <div class="main-content">
        <h1>Settings</h1>
        <form class="settings-form">
            <label for="admin-email">Admin Email</label>
            <input type="email" id="admin-email" placeholder="Enter admin email">

            <label for="site-name">Site Name</label>
            <input type="text" id="site-name" placeholder="Enter site name">

            <button type="submit">Save Changes</button>
        </form>
    </div>
    <form class="settings-form">
    <!-- Isi form seperti sebelumnya -->
    <button type="submit">Save Changes</button>
</form>
<div class="back-button">
    <a href="admin.php">Kembali ke Dashboard</a>
</div>

</body>
</html>
