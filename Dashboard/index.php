
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <title>Dashboard</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2>Mart Dashboard</h2>
      <nav>
        <ul>
          <li><i class='bx bxs-dashboard'><a href="index.php">Dashboard</a></i></li>
          <li><i class='bx bx-shopping-bag' ><a href="sales.html">Sales</a></i></li>
          <li><i class='bx bx-box' ><a href="inventory.html">Inventory</a></i></li>
          <li><i class='bx bxs-user' ><a href="customer.html">Customers</a></i></li>
          <li><i class='bx bxs-report'></i><a href="#reports">Reports</a></li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <header>
        <h1>Dashboard</h1>
      </header>
      <section class="widgets">
        <div class="widget">
          <h3>Total Sales</h3>
          <p>$15,000</p>
        </div>
        <div class="widget">
          <h3>Products in Stock</h3>
          <p>250</p>
        </div>
        <div class="widget">
          <h3>New Customers</h3>
          <p>30</p>
        </div>
        <div class="widget">
          <h3>Orders</h3>
          <p>120</p>
        </div>
      </section>

      <!-- New Section: Recent Transactions -->
      <section id="recent-transactions" class="recent-transactions">
        <h2>Recent Transactions</h2>
        <table>
          <thead>
            <tr>
              <th>Transaction ID</th>
              <th>Customer</th>
              <th>Date</th>
              <th>Amount</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#001</td>
              <td>Sonu Thapa</td>
              <td>2024-12-15</td>
              <td>$135</td>
              <td>Completed</td>
            </tr>
            <tr>
              <td>#002</td>
              <td>Amrita Rai</td>
              <td>2024-12-15</td>
              <td>$85</td>
              <td>Pending</td>
            </tr>
            <tr>
              <td>#003</td>
              <td>Rohit kc</td>
              <td>2024-11-14</td>
              <td>$200</td>
              <td>Completed</td>
            </tr>
            <tr>
              <td>#004</td>
              <td>Milan Tamang</td>
              <td>2024-11-13</td>
              <td>$50</td>
              <td>Refunded</td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>
  </div>
  <script src="script.js"></script>
</body>
</html>
