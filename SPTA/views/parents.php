<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Carwash</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheets" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
        }

        .sidebar {
            background-color: #12664f;
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

        /* STATUS COLORS */
        .paid {
            background: #6ea93a;
            color: white;
            font-weight: bold;
        }

        .pending {
            background: #3b82f6;
            color: white;
            font-weight: bold;
        }

        .overdue {
            background: #b3002d;
            color: white;
            font-weight: bold;
        }

        /* QUICK ACTIONS */
        .quick-actions {
            flex: 1;
        }

        .quick-actions h3 {
            font-size: 28px;
            margin-bottom: 15px;
            text-align: center;
        }

        .quick-actions button {
            width: 50%;
            padding: 18px;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
            border: 2px solid gray;
            border-radius: 10px;
            background: white;
            cursor: pointer;

        }

        .quick-actions button:hover {
            background: #eaeaea;
        }

        /* CONTENT */
        .content {
            width: 1080px;
            display: flex;
            justify-content: space-between;
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
                <a href="../admin/Dashboard.php">Settings</a>


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
            <h2 class="text-align: left;"><b>Parents Payment</b></h2>
            <BR><BR><br>

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