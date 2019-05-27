
<?php require_once 'buyheader.php' ?>

<style>
  .sign{
    margin-left: 350px;
    text-decoration: none;
    padding-left: 10px;
}
</style>

<div class="body">
	<div class="one clearfix">
		<h1>Review Film and Buy Tickets</h1>
		<div class="text">description text</div>
			<div class="review clearfix">
				<form action="Buytickets.php" method="post" class="select clearfix"></form>
				<p>
					<label for="">Select Date :</label>
					<input type="text">
				</p>
				<p>
					<label for="">Select Theatre :</label>
					<input type="text">
				</p>
				<p>
					<label for="">Select Time :</label>
					<input type="text">
				</p>
				<p>
					<label for="">Movie Name :</label>
					<input type="text">
				</p>
		<?php echo $admin_list ?>
			</div>
	</div>
	<div class="boder"></div>
	<div class="category">
		<table class="list">
		<tr>
			<th>Category</th>
			<th>Type</th>
			<th>Price</th>
     		<th>Quantity</th>
		</tr>
		<tr>
			<td>ODC</td>
			<td>Full</td>
			<td>250.00</td>
     		<td><input type="text" name="quantity" placeholder="quantity"></td>
		</tr>
		<tr>
			<td>ODC</td>
			<td>Kids</td>
			<td>190.00</td>
     		<td><input type="text" name="quantity" placeholder="quantity"></td>
		</tr>
		<tr>
			<td>BALCONY</td>
			<td>Full</td>
			<td>320.00</td>
     		<td><input type="text" name="quantity" placeholder="quantity"></td>
		</tr>
		<tr>
			<td>BALCONY</td>
			<td>Kids</td>
			<td>230.00</td>
     		<td><input type="text" name="quantity" placeholder="quantity"></td>
		</tr>
		<tr>
			<td>BALCONY BOX</td>
			<td>Full</td>
			<td>780.00</td>
     		<td><input type="text" name="quantity" placeholder="quantity"></td>
		</tr>
		<tr>
			<td>ODC BOX</td>
			<td>Full</td>
			<td>740.00</td>
     		<td><input type="text" name="quantity" placeholder="quantity"></td>
		</tr>
		</table>
		<form action="Buytickets.php" method="post" class="payform">
			<label for="">Total :</label>
			<input type="text">
			<button>Reset</button>
		</form>
	</div>
	<div class="boder"></div>
	<div class="pay">
		<h1>Pay With</h1>
		<button>Confirm Payment Method</button>
		
	</div>
	<div class="boder"></div>
	<div class="confirm">
		<button>Confirm and Pay</button>
		<button>Reset</button>
		
	</div>
</div>
 <!--fotter -->
  <footer>
    <div id="foot clearfix">

      <div id="links">
        <a id="footmenu" href="">Home</a> |
        <a href="">Privacy Policy</a> |
        <a href="">Terms of Use</a> |
        <a href="">Disclaimer</a> |
        <a href="">About Us</a>
        <br/>
        <br/>
        <a id="footmenu" href="">Login</a> |
        <a href="">Register</a> |
        <a href="">Advertise</a> |
        <a href="">Careers</a> |
        <a href="">Contact Us</a>
        <br/>
        <br/>
        <img id="norton" src="images/norton.png">
      </div>

      <div id="inform">
        <img id="footlogo" src="images/ss.png">
        <br/>
        <p>© 2018 Imagine Movies. All Rights Reserved. Site by
          <a href="#">Archmage</a>
          <br/>
          <br/> Copyright © 1995-2018 eBay Inc. All Rights Reserved. Accessibility, User Agreement, Privacy, Cookies and AdChoice
          <br/> Norton Secured - powered by Verisign</p>

      </div>
    </div>
  </footer> 

  <!-- slide header js -->
  <script src="JS/slideheader.js"></script>


</body>

</html>
