<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Dashboard</title>
    <link rel="stylesheet" href="parent_dashboard.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background: rgb(112, 143, 112);
        padding: 30px;
    }

    .container {
        width: 1700px;
        height: 880px;
        margin: auto;
        background: white;
        border: 2px solid black;
    }

    /* HEADER */
    .header {
        display: flex;
        align-items: center;
        border-bottom: 2px solid black;
        padding: 10px;
    }

    .logo-circle {
        width: 70px;
        height: 70px;
        border: 2px solid black;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
    }

    .system-title {
        flex: 1;
        text-align: center;
    }

    .system-title h2 {
        font-size: 22px;
        font-weight: bold;
    }

    /* NAVBAR */
    .navbar {
        display: flex;
        justify-content: space-between;
        padding: 12px 20px;
        border-bottom: 2px solid black;
    }

    .nav-links a {
        margin-right: 20px;
        text-decoration: none;
        font-weight: bold;
        color: black;
    }

    .nav-right {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .logout {
        text-decoration: none;
        font-weight: bold;
        color: black;
    }

    /* NOTICE */
    .notice {
        padding: 10px 20px;
        font-size: 14px;
        border-bottom: 2px solid black;
    }

    /* CONTENT */
    .content {
        display: flex;
        justify-content: space-between;
        padding: 30px;
        gap: 30px;
    }

    /* LEFT SIDE */
    .dashboard-left {
        flex: 1;
    }

    .dashboard-left h3 {
        margin-bottom: 15px;
        font-size: 18px;
    }

    .info-box {
        border: 2px solid black;
        padding: 15px;
        width: 100%;
    }

    .info-box p {
        margin-bottom: 10px;
        font-size: 14px;
    }

    /* RIGHT SIDE */
    .dashboard-right {
        flex: 1.2;
    }

    .dashboard-right h3 {
        margin-bottom: 15px;
        font-size: 18px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 2px solid black;
        padding: 10px;
        text-align: center;
        font-size: 14px;
    }

    /* STATUS COLORS */
    .paid {
        background: #7CFC00;
        font-weight: bold;
    }

    .pending {
        background: #ff1493;
        color: white;
        font-weight: bold;
    }

    /* FOOTER */
    .footer {
        text-align: center;
        padding: 10px;

        font-size: 12px;
    }
</style>

<body>

    <div class="container">

        <!-- HEADER -->
        <div class="header">
            <div class="logo-circle">LOGO</div>

            <div class="system-title">
                <h2>PCS System</h2>
            </div>
        </div>

        <!-- NAVBAR -->
        <div class="navbar">
            <div class="nav-links">
                <a href="#">Home</a>
                <a href="#">Settings</a>
            </div>

            <div class="nav-right">
                <span class="parent-name">(Parent Name)</span>
                <a href="#" class="logout">Logout</a>
            </div>
        </div>

        <!-- NOTICE -->
        <div class="notice">
            <p>
                <b>Notice:</b> You have <b>1 pending payment</b> for SPTA Fund.
                Please settle payment before due date.
            </p>
        </div>

        <!-- MAIN CONTENT -->
        <div class="content">

            <div class="dashboard-left">
                <h3>Parent Dashboard</h3>

                <div class="info-box">
                    <p><b>Student Name:</b> Kikay D. Binuang</p>
                    <p><b>Grade/Section:</b> 5-Sampaguita</p>
                    <p><b>Remaining Balance:</b> ₱500</p>
                </div>
            </div>

            <div class="dashboard-right">
                <h3>Payment History</h3>

                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>5-25-24</td>
                            <td>SPTA</td>
                            <td>₱500</td>
                            <td class="paid">Paid</td>
                        </tr>

                        <tr>
                            <td>1-25-25</td>
                            <td>SPTA</td>
                            <td>₱500</td>
                            <td class="pending">Pending</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>

        <!-- FOOTER -->
        <div class="footer">
            © Pawing Central School
        </div>

    </div>

</body>

</html>