<!DOCTYPE html>
<html lang="en">
<?php include "./assets/functions/headFootVar.php" ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inletsky</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <script src="script.js" defer></script>
</head>

<body>
    <img class="BG_image" src="assets/images/Inletsky.png" alt="BG">
    <header class="header">
        <div class="header_section">
            <img src="assets/images/logo.svg" alt="logo" />
            <nav class="nav">
                <ul>
                    <?php getHeader($header); ?>
                </ul>
            </nav>
            <div class="buttons">
                <div class="btn btn_register">
                    <a href="#">LOGIN</a>
                </div>
                <div class="btn btn_register">
                    <a href="#">SIGNUP</a>
                </div>
            </div>
        </div>
    </header>