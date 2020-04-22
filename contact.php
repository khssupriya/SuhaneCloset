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
    
    <div class="cont1" align="left">
        <img src="../Images/contact.jpg" width="600" height="500" align="right">
        <p><b><i> NEED HELP?</i></b></p>
        <p><b>HEAD OFFICE</b><br>H.No.7-1-4<br>Begumpet.<br>Hyderabad<br>India</p>
        <p><b>CONTACT INFO</b><br>+91 9126123456<br>info@suhanescloset.com</p>

    </div>
    <hr>
    <div align="centre" class="cont2">
    <p><b>Our Commitment to 24/7 Support.</b><br>As the impact of COVID-19 continues to evolve, our Customer Success teams
         will be standing by ready and eager to support our customers with the same level of service and quality we have always strived for.</p>
        </div>
    <hr>

    <div align="centre" class="cont2">
        <p><b>Refund Policy</b><br>Our policy lasts 30 days. If 30 days have gone by since your purchase, unfortunately we can’t offer you a refund or exchange.
            To be eligible for a return, products must be in the same condition that you received it. 
            Makeup products must be unused and all other products may be lightly used. All products must also be in the original packaging.</p>
            </div>
        <hr>
    <div
    
    
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



</body>
</html>