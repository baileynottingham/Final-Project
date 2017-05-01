<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
  <link href="styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <h1>Checkout</h1>
  <form action="index.php" method="POST">
    <h3>Enter your shipping address</h3>
    Full Name: <input type="text" />
    <br />
    Address: <input type="text" />
    <br />
    City: <input type="text" />
    <br />
    State: <input type="text" />
    <br />
    ZIP: <input type="text" />
    <br />
    State:
    <select>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>
  <br />
  Phone Number: <input type="text"/>
  <h3>Payment Information</h3>
  <input type="radio" name="ccard" value="visa"/> <img id="visaIMG" src="visa.png" alt="Visa">
  <input type="radio" name="ccard" value="mastercard"/> <img id="mastercardIMG" src="mastercard.JPEG" alt="Mastercard">
  <input type="radio" name="ccard" value="american"/> <img id="americanexpressIMG" src="americanexpress.png" alt="American Express">
  <input type="radio" name="ccard" value="discover"/> <img id="discoverIMG" src="discover.jpg" alt="Discover">
  <br />
  <input type="text" placeholder="Card Number"/>
  <input type="text" placeholder="Security Code"/>
  <br />
  <input type="text" placeholder="Name on Card"/>
  <br />
  Expires:
  <select>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
  </select>
  <select>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    <option value="2026">2026</option>
    <option value="2027">2027</option>
    <option value="2028">2028</option>
    <option value="2029">2029</option>
    <option value="2030">2030</option>
    <option value="2031">2031</option>
    <option value="2032">2032</option>
  </select>
  <br />
  <h3>Order Summary</h3>
  <p>Items: $<?=number_format($_POST['totalPrice'], 2)?></p>
  <p>Shipping and Handling: $5.99</p>
  <p>Order Total: <?=number_format($_POST['totalPrice'] + 5.99, 2)?>
  <br />
  <br />
  <input type="hidden" name="purchase"/>
  <input type="submit" value="Place your order"/>
  </form>
</body>
</html>
