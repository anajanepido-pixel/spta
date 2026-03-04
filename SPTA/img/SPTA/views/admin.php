<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payout Dashboard</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      background: #f4f6fb;
      display: flex;
    }

    /* SIDEBAR */
    .sidebar {
      width: 240px;
      background: #ffffff;
      height: 100vh;
      padding: 20px;
      border-right: 1px solid #e5e7eb;
    }

    .logo {
      font-size: 22px;
      font-weight: 600;
      margin-bottom: 30px;
    }

    .search-box {
      margin-bottom: 20px;
    }

    .search-box input {
      width: 100%;
      padding: 8px;
      border-radius: 6px;
      border: 1px solid #ddd;
    }

    .menu {
      list-style: none;
    }

    .menu li {
      padding: 12px;
      margin-bottom: 5px;
      border-radius: 6px;
      cursor: pointer;
      color: #555;
    }

    .menu li.active,
    .menu li:hover {
      background: #e8f0ff;
      color: #3b82f6;
      font-weight: 500;
    }

    /* MAIN */
    .main {
      flex: 1;
      padding: 25px;
    }

    /* HEADER */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
    }

    .header h2 {
      font-weight: 600;
    }

    .header-icons span {
      margin-left: 15px;
      cursor: pointer;
    }

    /* CARDS */
    .card-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      margin-bottom: 25px;
    }

    .card {
      background: #fff;
      padding: 18px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
      text-align: center;
      margin-top: 5px;
    }

    .card h4 {
      font-size: 14px;
      color: #666;
      margin-bottom: 8px;
    }

    .card h3 {
      font-size: 22px;
      margin-bottom: 5px;
    }

    .small {
      font-size: 13px;
      color: #777;
    }

    /* BALANCE CHART */
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
      width: 98% !important;
      height: 300px !important;
    }


    /* BOTTOM GRID */
    .bottom-grid {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 20px;
    }

    /* TRANSACTION */
    .transaction {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #eee;
      font-size: 14px;
    }

    /* RIGHT SIDE */
    .right-panel {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .card-box {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    .bank-card {
      background: #1e3a8a;
      color: #fff;
      padding: 20px;
      border-radius: 12px;
    }

    .bank-card h3 {
      margin: 10px 0;
    }

    .quick-icons {
      display: flex;
      justify-content: space-between;
      margin-top: 15px;
    }

    .quick-icons button {
      background: #eef2ff;
      padding: 10px;
      border-radius: 8px;
      text-align: center;
      flex: 1;
      margin: 0 3px;
      font-size: 12px;
    }

    /* RESPONSIVE */
    @media(max-width:1100px) {
      .card-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .bottom-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>

  <!-- SIDEBAR -->
  <div class="sidebar">
    <center><img src="../img/pawing_logo_circle_no_bg.png" height="110px" width="110px">
      <div class="logo">Admin Panel</div>
    </center>

    <div class="search-box">
      <input type="text" placeholder="Search">
    </div>

    <ul class="menu">
      <li class="active">Dashboard</li>
      <li>Invoices</li>
      <li>Payments</li>
      <li>My Wallets</li>
      <li>Analytics</li>
      <li>Activity</li>
      <li>Transaction</li>
    </ul>
  </div>

  <!-- MAIN -->
  <div class="main">

    <div class="header">
      <h2>Pawing Central School System</h2>
      <div class="header-icons">
        <span>🔔</span>
        <span>💬</span>
        <span>⚙</span>
      </div>
    </div>

    <!-- TOP CARDS -->
    <div class="card-grid">
      <div class="card">
        <h2>Total Students</h2>
        <h3>135</h3>

      </div>

      <div class="card">
        <h2>Total Payments</h2>
        <h3>₱120,000.00</h3>

      </div>

      <div class="card">
        <h2>Pending Payments</h2>
        <h3>32</h3>

      </div>

      <div class="card-box">
        <div class="bank-card">
          <div>School Year</div>
          <h3>2025-2026</h3>

        </div>
      </div>
    </div>

    <!-- BALANCE -->
    <div class="charts">
      <div class="chart-container">
        <h3>Monthly Payment Collection</h3>
        <canvas id="barChart"></canvas>
      </div>

      <div class="chart-container">
        <h3>Payment Status</h3>
        <canvas id="pieChart"></canvas>
      </div>
    </div>

    <br>
    <!-- BOTTOM -->
    <div class="bottom-grid">

      <div class="transaction">
        <h4>Transaction History</h4>
        <table>
          <tr>
            <th>Name</th>
            <th>Student</th>
            <th>Status</th>
            <th>Date</th>
          </tr>
          <tr>
            <td>John Doe</td>
            <td>2</td>
            <td>Paid</td>
            <td>22/06/2023 - 15:11</td>
          </tr>
          <tr>
            <td>Marites Ka</td>
            <td>3</td>
            <td>Paid</td>
            <td>03/06/2023 - 15:11</td>
          </tr>
        </table>
      </div>

      <div class="right-panel">
        <div class="card-box">
          <h4>Quick Action</h4>
          <div class="quick-icons">
            <button>+ Add New User</button>
            <button>+ Add Student</button>
            <button>Generate Reports</button>

          </div>
        </div>

        <div class="card-box">
          <h4>Expenses Summary</h4>
          <p>Total: $9,670</p>
          <p>72% Total Expense</p>
        </div>
      </div>

    </div>

  </div>
  <script>
    // Bar Chart
    new Chart(document.getElementById("barChart"), {
      type: "bar",
      data: {
        labels: ["Jan", "Feb", "Mar", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Amount Collected (₱)",
          data: [15000, 20000, 18000, 22000, 25000, 20000, 15000, 20000, 18000, 22000, ],
          backgroundColor: "#355e4a"
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            labels: {
              color: "#000000"
            }
          },
          title: {
            display: true,
            text: "Monthly Payment Collection",
            color: "#000"
          }
        },
        scales: {
          x: {
            ticks: {
              color: "#6c757d"
            },
            grid: {
              color: "#6c757d"
            }

          },
          y: {
            ticks: {
              color: "#6c757d"
            },
            grid: {
              color: "#6c757d"
            }

          }
        }
      }
    });
    // Pie Chart
    new Chart(document.getElementById("pieChart"), {
      type: "pie",
      data: {
        labels: ["Paid", "Pending", "Overdue"],
        datasets: [{
          data: [70, 20, 10],
          backgroundColor: [
            "#16a34a",
            "#facc15",
            "#dc2626"
          ]
        }]
      },
      options: {
        responsive: true
      }
    });
  </script>


</body>

</html>