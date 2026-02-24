<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SPTA Login</title>
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link rel="icon" type="image/logo" href="/img/pawing_logo_circle_no_bg.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #dcefe1;

        }

        .container {
            width: 550px;
            margin: 50px auto;
            border: 2px solid black;
            border-radius: 20px;
            padding: 20px;
            background: #f2fbf4;
            position: relative;
        }

        /* Logo circle */
        .logo {
            width: 120px;
            height: 120px;

            border-radius: 50%;
            text-align: center;
            line-height: 90px;
            font-weight: bold;
            position: absolute;
            top: 20px;
            left: 20px;
        }

        /* Title */
        .title {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        .subtitle {
            text-align: center;
            margin-top: 10px;
            font-size: 15px;
            font-weight: bold;
        }

        /* Login form */
        .form-section {
            margin-top: 60px;
            padding-left: 20px;
        }

        .form-section label {
            font-size: 16px;
            font-weight: bold;
        }

        .radio-group {
            margin-top: 10px;
            margin-left: 50px;
        }

        .radio-group input {
            margin-right: 10px;
        }

        .radio-group div {
            margin: 12px 0;
            font-size: 15px;
        }

        /* Inputs */
        .input-group {
            margin-top: 30px;
        }

        .input-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .input-group input {
            width: 80%;
            padding: 10px;
            border: 2px solid black;
            border-radius: 4px;
            font-size: 15px;
        }

        /* Login button */
        .btn-login {
            margin-top: 20px;
            float: right;
            padding: 10px 25px;
            background: #24513a;
            color: white;
            border: 2px solid black;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-login:hover {
            background: #0b65c2;
        }

        /* Footer */
        .footer {
            text-align: center;
            margin-top: 50px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style=" background: #2f6f4e;">
        <a class="navbar-brand" href="#">PCS System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="container" style="margin-top: 10%;">

        <!-- Logo -->
        <div class="logo">
            <img src="../img/pawing_logo_circle_no_bg.png" width="120px" height="120px">
        </div>

        <!-- Title -->
        <div class="title">SPTA Payment Management<br>System</div>
        <div class="subtitle">Secure Login</div>

        <!-- Form -->
        <div class="form-section">


            <form action="../views/admin.php" method="POST">
                <!-- Username -->
                <div class="input-group">
                    <label>Username:</label>
                    <input type="text" placeholder="">
                </div>

                <!-- Password -->
                <div class="input-group">
                    <label>Password:</label>
                    <input type="password" placeholder="">
                </div>

                <!-- Login Button -->
                <button class="btn-login">Login</button>

                <div style="clear: both;"></div>

        </div>

        <!-- Footer -->
        <div class="footer">
            © Pawing Central School
        </div>
        </form>
    </div>

</body>

</html>