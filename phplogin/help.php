<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <style>
        .help-container {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .help-container h3 {
            margin-bottom: 15px;
        }

        .help-container p {
            margin-bottom: 10px;
            color: #333;
        }

        .help-container a {
            color: #5a9;
            text-decoration: none;
        }

        .help-container a:hover {
            text-decoration: underline;
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
        <h1>Help</h1>
        <div class="help-container">
            <h3>Frequently Asked Questions</h3>
            <p>Q: How do I reset my password?</p>
            <p>A: You can reset your password in the settings page.</p>

            <p>Q: Who do I contact for support?</p>
            <p>A: Please email us at <a href="mailto:support@example.com">support@example.com</a>.</p>

            <p>For more assistance, check the <a href="#">documentation</a>.</p>
        </div>
    </div>
    <div class="help-container">
    <!-- Isi kontainer panduan -->
</div>
<div class="back-button">
    <a href="admin.php">Kembali ke Dashboard</a>
</div>

</body>
</html>
