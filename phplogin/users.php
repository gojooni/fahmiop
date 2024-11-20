<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style>
        .table-container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 5px;
            overflow: hidden;
        }

        table th, table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background: #3a6186;
            color: #fff;
        }

        .action-buttons a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            color: #fff;
            margin-right: 5px;
            font-size: 14px;
        }

        .edit {
            background: #5a9;
        }

        .delete {
            background: #e74c3c;
        }

        .search-bar {
            margin-bottom: 15px;
            display: flex;
            justify-content: flex-end;
        }

        .search-bar input {
            padding: 8px;
            width: 250px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .back-button {
    margin-top: 20px;
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
        <h1>Manage Users</h1>
        <div class="search-bar">
            <input type="text" placeholder="Search users...">
        </div>
        <div class="table-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>admin</td>
                    <td>admin@example.com</td>
                    <td>Admin</td>
                    <td class="action-buttons">
                        <a href="#" class="edit">Edit</a>
                        <a href="#" class="delete">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>user123</td>
                    <td>user@example.com</td>
                    <td>User</td>
                    <td class="action-buttons">
                        <a href="#" class="edit">Edit</a>
                        <a href="#" class="delete">Delete</a>
                    </td>
                </tr>
            </table>
            <div class="back-button">
    <a href="admin.php">Kembali ke Dashboard</a>
</div>

</body>
</html>
