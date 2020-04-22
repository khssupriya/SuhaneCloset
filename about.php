<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto&display=swap" rel="stylesheet"> <!-- Imported the roboto and pacifisio font -->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- importing the icons...-->

	<link rel="stylesheet" type="text/css" href="../CSS/indexstyle.css">

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

    <div class="about"><form action="../PHP/show.php" method="post">
		<button type="submit">
        <img src="/Images/about1.jpg" style="width: 100%;" style="height: 100%;"></button></form>
    <h1 class="abt2">ABOUT US </h1>
    <h1 class="abt1">WE BELIEVE THAT WE CAN<br>MAKE A DIFFERENCE</h1>
    <h2 class="abt3"></h2>
    </div>
    <hr>
    <div class="info" align="center">Suhane's closet was founded by three fashion friends committed to creating confidence through clothing.
        <br>We design seasonless essentials for everyday life.
         Perfect premiun pieces to make you feel comfortable and confident,season after season.<br>
        We partner with the best,ethical factories around the world to produce your favourite designer labels.
    </div>
    <hr>
    <div class="quality" align="centre">
        <img src="/Images/about2.jpg" align="right" height="400" width="300">
        <br>
        <h2>OUR QUALITY</h2>
        <h1>Designed To Last</h1>
        <p >At suhane's closet, we want you to wear your pieces for years, even decades to come.
        That's why we source the finest materials and factories for our timeless products.
        </p>

    </div>
    <hr>
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



</body>
</html>