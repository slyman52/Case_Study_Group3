<html>
<head>

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
tr:hover {background-color: yellow;}

</style>

    <title> Bus Reservation System | Home</title>
    <h1 align="center"> ROUTE</h1>
    
    <link rel="stylesheet" href="home.css">

</head>

<body>
      <div class="topnav"  class="container", style="border:15px solid green;margin-left:auto;margin-right:auto;">
        <a href="login.php">Login</a>
        <a href="home.php">Homepage</a>
        <a class="active" href="route1.php">Route</a>
        <a href="seat.php">Book Now</a>
        <a href="payment.php">Payment</a>
      </div>

      </body>

      <div class="bus_schedule"  align="center">

<table>
  <tr>
    <th>Cities</th>
    <th>Bus</th>
    <th>Departure Date</th>
    <th>Departure Time</th>
    <th>Cost</th>
  </tr>
  <tr class="Seremban">
    <td>Seremban</td>
    <td>Transnational</td>
    <td>20/10/2021</td>
    <td>8.30 am</td>
    <td>RM 18</td>
  </tr>
  <tr class="Kuala Lumpur">
    <td>Kuala Lumpur</td>
    <td>Transnational</td>
    <td>20/10/2021</td>
    <td>9.00 am</td>
    <td>RM 25</td>
  </tr>
  <tr class="Kuantan">
    <td>Kuantan</td>
    <td>Transnational</td>
    <td>20/10/2021</td>
    <td>9.15 am</td>
    <td>RM 35</td>
  </tr>
  <tr class="Putrajaya">
    <td>Putrajaya</td>
    <td>Transnational</td>
    <td>20/10/2021</td>
    <td>9.30 am</td>
    <td>RM 30</td>
  </tr>
  <tr class="Gombak">
    <td>Gombak</td>
    <td>Transnational</td>
    <td>20/10/2021</td>
    <td>10.00 am</td>
    <td>RM 33</td>
  </tr>
  <tr class="JohorBahru">
    <td>Johor Bahru</td>
    <td>Transnational</td>
    <td>20/10/2021</td>
    <td>10.30 am</td>
    <td>RM 45</td>
  </tr>
</table>

</div>

<button>
<a href="seat.php" class="button">Book Now</a><br>
</button>

<button>
<a href="home.php" class="button">Return</a>
</button>

<?php
echo "<h2>Book Tickets Now to Ensure Your Destination</h2>";

?> 
    <h1 align="center"> The journey of a thousand miles begins with single step </h1>



</html>