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

    <div class="cards">
      <div class="card">
        <h3>Total Students</h3>
        <p>135</p>
      </div>
      <div class="card">
        <h3>Total Payments</h3>
        <p>₱120,000</p>
      </div>
      <div class="card">
        <h3>Pending Payments</h3>
        <p>32</p>
      </div>
      <div class="card">
        <h3>School Year</h3>
        <p>2025-2026</p>
      </div>
    </div>

    <div class="bottom-section">
      <div class="recent-payments">
        <h3>Recent Payments</h3>

        <div class=" card">
          <table>
            <thead>
              <tr>
                <th>Student Name</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Juan Dela Cruz</td>
                <td>₱200</td>
                <td>02-10-25</td>
                <td class="paid">Paid</td>
              </tr>

              <tr>
                <td>Maria Santos</td>
                <td>₱200</td>
                <td>02-08-25</td>
                <td class="pending">Pending</td>
              </tr>

              <tr>
                <td>Pedro Reyes</td>
                <td>₱200</td>
                <td>02-05-25</td>
                <td class="overdue">Overdue</td>
              </tr>
            </tbody>

          </table>
        </div>
      </div>
      <br><br>


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