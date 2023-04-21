<!DOCTYPE html>
<html>
  <head>
    <title>SKD LOGISTICS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
      /* Basic CSS styling */
      body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
      }
      header {
        background-color: #f8f7f9;
        padding: 20px;
        box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      h1 {
        margin: 0;
        font-size: 32px;
      }
      nav {
        background-color: #091540;
        color: #f8f7f9;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
      }
      nav ul li {
        margin-right: 20px;
      }
      main {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px #888888;
        margin: 20px;
      }
      table {
        border-collapse: collapse;
        width: 100%;
      }
      th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }
      th {
        background-color: #4CAF50;
        color: #ffffff;
      }
    </style>
  </head>
  <body>
    <header>
    <center>
      <a class="navbar-logo" href="#"> <img src="../assets/img/logo/logo-new.jpg" alt="logo" /> </a>
  
      </center>
      <h1>SKD Logistics Admin Dashboard</h1>
    </header>
    <nav>
      <ul>
        <li><a href="admin.html">HOME</a></li>
        <li><a href="#">Dashboard</a></li>
        
        <li><a href="#">Shipments</a></li>
        <li><a href="#">Customers</a></li>
        <li><a href="#">Reports</a></li>
      </ul>
      <form action="#" method="GET">
        <label for="search">Search:</label>
        <input type="text" id="search" name="search">
        <input type="submit" value="Go">
      </form>
    </nav>
    <main>
      <h2>Recent Orders</h2>
      <table>
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Company</th>
            <th>Order Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>12345</td>
            <td>John Smith</td>
            <td>DTDC</td>
            <td>2023-04-15</td>
            <td><span ><button id="myButton" onclick="changeButton()">APRROVE ORDER</button> </span></td>
          </tr>
         
        </tbody>
      </table>
      <style>
        button {
          background-color: blue;
          color: white;
          border: none;
          padding: 10px 20px;
          font-size: 16px;
          cursor: pointer;
        }
      </style>
      <script>
        function changeButton() {
          var button = document.getElementById("myButton");
          button.innerHTML = "APPROVED!";
          button.style.backgroundColor = "green";
        }
        
      </script>
    </main>
  </body>
</html>
