<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto&display=swap" rel="stylesheet"> <!-- Imported the roboto and pacifisio font -->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- importing the icons...-->

	<link rel="stylesheet" type="text/css" href="../CSS/indexstyle.css">
	<link rel="stylesheet" type="text/css" href="../CSS/accountstyle.css"><!-- importing stylesheets -->
	<link rel="php" type="text/php" href="../PHP/signup.php">
	<title>Suhane's Closet</title>
</head>
<body>

	<!-- -------- NavMenu Begins --------->

		<div id = "NavMenu">
		<ul>
			<span id = "title">
				<li><a href="index.php">Suhane's Closet</a></li>				
			</span>
			<span id="NavLinks">
				<?php
					if(isset($_SESSION['userid'])){
						echo '<li><a href="#cart"><i class="fa fa-shopping-cart" style="font-size:24px" id = "cart"></i></a></li>
						<!-- The Modal -->
						<div id="myModal" class="modal">

						  <!-- Modal content -->
						  <div class="modal-content">
						    <span class="close">&times;</span>
						    <h2 style="text-align:center;">Cart</h2>
						    <form action="../PHP/logout.php" method="post">
							    <button type="submit" id="logoutbtn">LogOut</button>
							</form>
						        
						  </div>
						   
						</div>';
					}
					else{
						echo '<li><a href="account.php"><i class="material-icons" style="font-size:24px">person</i></a></li>';
					}

				?>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="index.php">Home</a></li>				
			</span>
		</ul>
	</div>

	<!-- -------- NavMenu ENDS --------->

	<!----------- Account Begins -------->

	<table id="accounttable" align="center">
		<tr>
			<td id="logcol">
				<h2>Log In</h2>

				<form action="../PHP/login.php" method="post">
				    <div class="container">
					    <label for="email">Email ID/phone no:</label>
					    <input type="text" placeholder="Micsteven@yahoo.com" name="email" required>

					    <label for="pass">Password:</label>
					    <input type="password" placeholder="D!ng@123" name="pass" required>
					    
					    <button type="submit">LogIn</button>
				    </div>
				</form>				
			</td>
			<td >
				<h2>Sign Up</h2>

				<form action="../PHP/signup.php" method="post">
				    <div class="container">
				    	<label for="fname">First name:</label>
						<input type="text" id="fname" name="fname" placeholder="Michael">

						<label for="lname">Last name:</label>
					    <input type="text" id="lname" name="lname" placeholder="Stevens">

					    <label for="phone">Phone Num:</label>
						<input type="Phone" id="phno" name="phone" placeholder="1234567089">

					    <label for="email">Email ID:</label>
					    <input type="email" placeholder="Micsteven@yahoo.com" name="email" required>

					    <label for="pass">Password:</label>
					    <input type="password" placeholder="D!ng@123" name="pass" required>
					    
					    <button type="submit">SignUp</button>
				    </div>
				</form>
			</td>
		</tr>
	</table>

	<!----------- Account Ends -------->

	<!-- -------- FOOTER Begins --------->

	<footer id = "footer" align = "center">
		<div id = "FooterIcons">
			<ul>
				<li><a href="#" class="fa fa-facebook"></a></li>
				<li><a href="#" class="fa fa-twitter"></a></li>
				<li><a href="#" class="fa fa-instagram"></a></li>
				<li><a href="#" class="fa fa-pinterest"></a></li>
			</ul>
		</div>
	  <p>Customer Service Contact : <a href="mailto:customercare@Suhanescloset.com">customercare@Suhanescloset.com</a></p>
	  <p>Suhane's Closet 2020. All Rights Reserved ®</p>
	</footer>

	<!-- -------- Footer ends --------->


	
	<!-----------SCRIPT FOR MODAL --------->

	<script type="text/javascript">
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the button that opens the modal
		//var btn = document.getElementById("orderlinkbutn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		cart.onclick = function() {
		  modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		  modal.style.display = "none";
		}
	</script>


</body>
</html>
