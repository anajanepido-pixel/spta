<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SPTA</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheets" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
        }

        .sidebar {
            background-color: #386641;
            height: 100vh;
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .topbar {
            height: 60px;
            background-color: white;
        }

        .table-container {
            max-height: 500px;
            overflow-y: auto;
            text-align: center;
        }

        .container {
            width: auto;
            background: white;
            border: 2px solid black;
        }

        .logo img {
            width: 110px;
            height: 110px;
        }

        /* CONTENT */
        .content {
            padding: 25px;
        }

        .content h2 {
            font-size: 35px;
            margin-bottom: 30px;
        }

        /* SUMMARY BOXES */
        .summary-boxes {
            display: flex;
            justify-content: space-around;
            margin-bottom: 50px;
        }

        .box {
            width: 250px;
            border: 2px solid gray;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            background: #f9f9f9;
        }

        .box h3 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        .box p {
            font-size: 28px;
            font-weight: bold;
        }

        /* BOTTOM SECTION */
        .bottom-section {
            display: flex;
            justify-content: space-between;
            gap: 30px;
        }

        /* RECENT PAYMENTS */
        .recent-payments {
            flex: 2;
        }

        .recent-payments h3 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid gray;
            border-radius: 10px;
            overflow: hidden;
        }

        table th,
        table td {
            border: 1px solid gray;
            padding: 15px;
            text-align: center;
            font-size: 18px;
        }

        table th {
            background: #f2f2f2;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #0e1a2b;
            color: #f1f1f1;
        }

        /* HEADER */
        .header {
            border: 2px solid #c9a227;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 2px solid #c9a227;
        }

        .logo {
            width: 80px;
            height: 80px;
            border: 2px solid #c9a227;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .system-title {
            font-size: 22px;
            font-weight: bold;
        }

        .staff {
            font-size: 14px;
        }



        /* MAIN CONTENT */
        .main {
            flex: 1;
            padding: 20px 30px;
        }

        .section {
            border: 2px solid #000000ff;
            padding: 15px;
            margin-bottom: 20px;
        }

        /* SUMMARY BOXES */
        .summary-boxes {
            display: flex;
            gap: 20px;
            margin-top: 15px;
        }

        .box {
            border: 2px solid #000000ff;
            padding: 15px 25px;
            text-align: center;
        }

        .box h3 {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .box p {
            font-size: 18px;
            font-weight: bold;
        }

        /* STATUS */
        .status {
            margin-top: 15px;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table,
        th,
        td {
            border: 1px solid #c9a227;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
        }

        th {
            background: #14233c;
        }

        /* BUTTONS */
        .buttons {
            margin-top: 15px;
            display: flex;
            gap: 15px;
        }

        button {
            padding: 10px 18px;
            background: transparent;
            color: #002e6bff;
            border: 2px solid #000000ff;
            cursor: pointer;
        }

        button:hover {
            background: #c9a227;
            color: #000;
        }

        .quick-actions button:hover {
            background: #eaeaea;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="../assets/dist/css/home.css" rel="stylesheet">
</head>


<body>


    <!-- Main Container -->
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block ">
            <div class="sidebar">
                <center>
                    <div class="logo">
                        <img src="../img/pawing_logo_circle_no_bg.png" alt="Logo">
                    </div>
                </center>
                <hr>
                <a href="../admin/Dashboard.php">Home</a>
                <a href="../admin/Dashboard.php">Peyments</a>
                <a href="../admin/addcarwash_booking.php">Students</a>
                <a href="../admin/Dashboard.php">Reporst</a>


                <button class="dropdown-btn">
                    Dashboard
                    <span class="caret">▶</span>
                </button>


                <button class="dropdown-btn" style="margin-top: 350px;">
                    Settings
                    <span class="caret">▶</span>
                </button>
                <div class="dropdown-container">
                    <a href="../admin/settings.php">Settings</a>
                    <a href="../views/home.php">Sign Out</a>
                </div>
            </div>

        </nav>

        <link rel="stylesheet" href="../assets/dist/css/admin.css">

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

            <div class="boxes">
                <center>
                    <p><b>Pawing Central School System</b></p>
                </center>
            </div>

            <br>
            <div class="main">

                <!-- SUMMARY -->
                <div class="section">
                    <h2>Summary</h2>
                    <div class="summary-boxes">
                        <div class="box">
                            <h3>Total Students</h3>
                            <p>715</p>
                        </div>
                        <div class="box">
                            <h3>Total Funds Collected</h3>
                            <p>₱120,000</p>
                        </div>
                    </div>

                    <div class="status">
                        <h3>Payment Status Overview</h3>
                        <p>Paid: 95 &nbsp;&nbsp; Pending: 53 &nbsp;&nbsp; Overdue: 34</p>
                    </div>
                </div>

                <!-- RECENT TRANSACTIONS -->
                <div class="section">
                    <h2>Recent Transactions</h2>

                    <table>
                        <tr>
                            <th>Students</th>
                            <th>Grade/Section</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td>Student A</td>
                            <td>3-Yas</td>
                            <td>₱500</td>
                            <td>7/15/25</td>
                            <td>Paid</td>
                        </tr>
                        <tr>
                            <td>Student B</td>
                            <td>6-Rose</td>
                            <td>₱500</td>
                            <td>7/10/25</td>
                            <td>Pending</td>
                        </tr>
                    </table>

                    <div class="buttons">
                        <button>+ Record Payment</button>
                        <button>Generate Report</button>
                    </div>
                </div>

            </div>
    </div>

    </div>

    <script>
        // Dropdown toggle
        const dropdowns = document.querySelectorAll(".dropdown-btn");
        dropdowns.forEach(btn => {
            btn.addEventListener("click", function() {
                this.classList.toggle("active");
                const dropdown = this.nextElementSibling;
                const caret = this.querySelector(".caret");
                if (dropdown.style.display === "block") {
                    dropdown.style.display = "none";
                    caret.classList.remove("rotate");
                } else {
                    dropdown.style.display = "block";
                    caret.classList.add("rotate");
                }
            });
        });
    </script>