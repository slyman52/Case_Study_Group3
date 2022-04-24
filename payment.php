<html>
<head>

    <title> Bus Reservation System | About</title>
    <h1 align="center"> PAYMENT </h1>
    

</head>

<body>
      <div class="topnav"  class="container", style="border:15px solid green;margin-left:auto;margin-right:auto;">
        <a href="login.php">Login</a>
        <a href="home.php">Homepage</a>
        <a href="route1.php">Route</a>
        <a href="seat.php">Book Now</a>
        <a class="active" href="payment.php">Payment</a>
      </div>

      <link rel="stylesheet" href="payment.css">

    <?php echo "Payment Page"?>
    <br>

 
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Sulaiman">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <!-- <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>  -->

        <div>
        <button> <a href="thankyou.php" class="button">Continue</a>
</button>
</div>

      </form>
    </div>
  </div>
  
</div>

      
</body>

</html>