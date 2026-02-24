<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Payment Dashboard</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            background: #f4f6f9;
        }

        /* Sidebar */
        .sidebar {
            width: 300px;
            height: 110vh;
            background: #386641;
            color: white;
            padding: 20px;
        }

        .sidebar h2 {
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            padding: 12px 0;
            cursor: pointer;
        }

        .sidebar ul li:hover {
            background: #334155;
            padding-left: 10px;
            transition: 0.3s;
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

        /* RECENT PAYMENTS */
        .recent-payments {
            flex: 2;
        }

        .recent-payments h3 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        table {
            width: 70px;
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

        /*table*/
        .table-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 10px;
            text-align: left;
        }

        table th {
            background: #52796f;
            color: white;
        }

        table tr:nth-child(even) {
            background: #f1f5f9;
        }



        /* Main */
        .main {
            flex: 1;
            padding: 20px;
        }

        /* Navbar */
        .navbar {
            background: #386641;
            padding: 30px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

        }

        /* Cards */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            margin-bottom: 10px;
        }

        .card p {
            font-size: 22px;
            font-weight: bold;
            color: #2563eb;
        }

        /* Charts */
        .charts {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }

        .chart-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        canvas {
            width: 100% !important;
            height: 300px !important;
        }

        /* STATUS COLORS */
        .paid {
            background: #16a34a;
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

        /* MAIN CONTENT */
        .main {
            flex: 1;
            padding: 20px 30px;
        }

        .section {
            border: 2px solid #000000ff;
            padding: 15px;
            margin-bottom: 20px;
            height: 400px;
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
            border-radius: 2%;
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
</head>

<body>

    <div class="sidebar">
        <center>
            <div class="logo">
                <img src="../img/pawing_logo_circle_no_bg.png" alt="Logo">
            </div>

            <h2>Admin Panel</h2>
        </center>
        <ul>
            <li>Home</li>
            <li>Students</li>
            <li>Payments</li>
            <li>Reports</li>
            <li>Setting</li>
        </ul>
    </div>

    <div class="main">
        <div class="navbar" style="color:white; height:80px; font-size:30px; display: flex; justify-content: center; align-items: center;">
            Pawing Central School System
        </div>

        <!-- SUMMARY -->
        <div class="section">

            <h2>Summary</h2>
            <div class="summary-boxes">

                <div class="box">
                    <h3>Total Students</h3>
                    <p>719</p>
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

            <br>
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
                    <td>3-Jasmine</td>
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

            <br><br><br><br><br><br><br>
            <div class="buttons">
                <button>+ Record Payment</button>
                <button>Generate Report</button>
            </div>
        </div>
</body>

</html>