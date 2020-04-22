<?php
        session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto&display=swap" rel="stylesheet"> <!-- Imported the roboto and pacifisio font -->
	<link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- importing the icons...-->

	<link rel="stylesheet" type="text/css" href="../CSS/indexstyle.css">
	<link rel="stylesheet" type="text/css" href="../CSS/women.css">
	<link rel="stylesheet" type="text/css" href="../CSS/img.css">
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


	
	<h1 align="center">Men</h1>
	<div class="sidenav">	
	<a href="#wshirts">Shirts</a>
	<a href="#wbottoms">Pants</a>
	<a href="#wsport">Sportsware</a>
	<a href="#wassecc">Accessories</a>
	<a href="#wshoes">Shoes</a>
	</div>
	<div class="main">
		<h2 id="wshirts">Shirts</h2>
		<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msh1.jpg" method="post">
	 			<button><img src="../Images/msh1.jpg" width="267" height="400"></button>		    	
		    </form>  
		 	<div class="desc">Motivated Grey T-shirt <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msh2.jpg" method="post">
	 			<button><img src="../Images/msh2.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Light Blue Button Up Shirt <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msh3.jpg" method="post">
	 			<button><img src="../Images/msh3.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Show Your Strips Chrome Shirt <br>$10</div>
		 	</td>
		</table>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msh4.jpg" method="post">
	 			<button><img src="../Images/msh4.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Classy Plain White T-shirt <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msh5.jpg" method="post">
	 			<button><img src="../Images/msh5.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Cool Dark Grey T-shirt <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msh6.jpg" method="post">
	 			<button><img src="../Images/msh6.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">On The Sun Yellow T-shirt <br>$10</div>
		 	</td>
		</table>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msh7.jpg" method="post">
	 			<button><img src="../Images/msh7.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Modern Blue Denim Jacket <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msh8.jpg" method="post">
	 			<button><img src="../Images/msh8.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Pale Pink Button Up Shirt <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msh9.jpg" method="post">
	 			<button><img src="../Images/msh9.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">On Top Of The World Black T-shirt <br>$10</div>
		 	</td>
		</table>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msh10.jpg" method="post">
	 			<button><img src="../Images/msh10.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Show Your Strips Black Shirt<br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msh11.jpg" method="post">
	 			<button><img src="../Images/msh11.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Triumph Vibes Red Full Sleeved Shirt <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msh12.jpg" method="post">
	 			<button><img src="../Images/msh12.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Chrome Yellow Hoddie <br>$10</div>
		 	</td>
		</table>
	 	<h2 id="wbottoms">Pants</h2>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/mb1.jpg" method="post">
	 			<button><img src="../Images/mb1.jpg" width="267" height="400"></button>		    	
		    </form>  
		 	<div class="desc">Tight Ice Blue Jeans <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/mb2.jpg" method="post">
	 			<button><img src="../Images/mb2.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Ripped BLue Jeans <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/mb3.jpg" method="post">
	 			<button><img src="../Images/mb3.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Tight Black Jeans <br>$10</div>
		 	</td>
		</table>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/mb4.jpg" method="post">
	 			<button><img src="../Images/mb4.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Patched Black Jeans <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/mb5.jpg" method="post">
	 			<button><img src="../Images/mb5.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Light Grey Ripped Jeans<br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/mb6.jpg" method="post">
	 			<button><img src="../Images/mb6.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Loose Fitted Ice Blue Jeans <br>$10</div>
		 	</td>
		</table>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/mb7.jpg" method="post">
	 			<button><img src="../Images/mb7.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Ripped Black Jeans <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/mb8.jpg" method="post">
	 			<button><img src="../Images/mb8.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Grey Ripped Jeans<br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/mb9.jpg" method="post">
	 			<button><img src="../Images/mb9.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Loose Red Pants<br>$10</div>
		 	</td>
		</table>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/mb10.jpg" method="post">
	 			<button><img src="../Images/mb10.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Blue Formal Pants <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/mb11.jpg" method="post">
	 			<button><img src="../Images/mb11.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">The Explorer Dark Blue Jeans Shorts <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/mb12.jpg" method="post">
	 			<button><img src="../Images/mb12.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Light Blue Jeans Shorts<br>$10</div>
		 	</td>
		</table>
	 	<h2 id="wsport">Sportsware</h2>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msp1.jpg" method="post">
	 			<button><img src="../Images/msp1.jpg" width="267" height="400"></button>		    	
		    </form>  
		 	<div class="desc">Dark Blue Tracksuite <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msp2.jpg" method="post">
	 			<button><img src="../Images/msp2.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Black Albhabets Tracksuite <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msp3.jpg" method="post">
	 			<button><img src="../Images/msp3.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Jogging OUtfit <br>$10</div>
		 	</td>
		</table>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msp4.jpg" method="post">
	 			<button><img src="../Images/msp4.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Peach Colored Nike Shirt <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msp5.jpg" method="post">
	 			<button><img src="../Images/msp5.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Tennis Outfit #1 <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msp6.jpg" method="post">
	 			<button><img src="../Images/msp6.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Tennis Outfit #2 <br>$10</div>
		 	</td>
		</table>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msp7.jpg" method="post">
	 			<button><img src="../Images/msp7.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Basketball Outfit <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msp8.jpg" method="post">
	 			<button><img src="../Images/msp8.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Cycling Outfit <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msp9.jpg" method="post">
	 			<button><img src="../Images/msp9.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">White Tee + Grey Tracks <br>$10</div>
		 	</td>
		</table>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msp10.jpg" method="post">
	 			<button><img src="../Images/msp10.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Gym Outfit <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msp11.jpg" method="post">
	 			<button><img src="../Images/msp11.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Marathon Outfit <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/msp12.jpg" method="post">
	 			<button><img src="../Images/msp12.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Workout Outfit <br>$10</div>
		 	</td>
		</table>
	 	<h2 id="wassecc">Accessories</h2>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ma1.jpg" method="post">
	 			<button><img src="../Images/ma1.jpg" width="267" height="400"></button>		    	
		    </form>  
		 	<div class="desc">Wooden Dial Watch <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ma2.jpg" method="post">
	 			<button><img src="../Images/ma2.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Black Strap Analogue Watch <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ma3.jpg" method="post">
	 			<button><img src="../Images/ma3.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Brown Strap Analogue Watch <br>$10</div>
		 	</td>
		</table>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ma4.jpg" method="post">
	 			<button><img src="../Images/ma4.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Black Strap Gold Dial Watch <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ma5.jpg" method="post">
	 			<button><img src="../Images/ma5.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Sapphire Watch <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ma6.jpg" method="post">
	 			<button><img src="../Images/ma6.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Black Dial Watch <br>$10</div>
		 	</td>
		</table>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ma7.jpg" method="post">
	 			<button><img src="../Images/ma7.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Gold Links Watch <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ma8.jpg" method="post">
	 			<button><img src="../Images/ma8.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Silver Links Watch <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ma9.jpg" method="post">
	 			<button><img src="../Images/ma9.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Glow In The Dark Watch <br>$10</div>
		 	</td>
		</table>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ma10.jpg" method="post">
	 			<button><img src="../Images/ma10.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Black Leather Wallet <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ma11.jpg" method="post">
	 			<button><img src="../Images/ma11.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Black Belt #1 <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ma12.jpg" method="post">
	 			<button><img src="../Images/ma12.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Black Belt #2 <br>$10</div>
		 	</td>
		</table>
	 	<h2 id="wshoes">Shoes</h2>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ms1.jpg" method="post">
	 			<button><img src="../Images/ms1.jpg" width="267" height="400"></button>		    	
		    </form>  
		 	<div class="desc">Cream Colored Nike Shoes <br> $10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ms2.jpg" method="post">
	 			<button><img src="../Images/ms2.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Vintage Vibe Boots <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ms3.jpg" method="post">
	 			<button><img src="../Images/ms3.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">White Sports Shoes <br>$10</div>
		 	</td>
		</table>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ms4.jpg" method="post">
	 			<button><img src="../Images/ms4.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Black Leather Shoes <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ms5.jpg" method="post">
	 			<button><img src="../Images/ms5.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Light Brown Office Shoes <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ms6.jpg" method="post">
	 			<button><img src="../Images/ms6.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Deep Orange Sport Shoes <br>$10</div>
		 	</td>
		</table>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ms7.jpg" method="post">
	 			<button><img src="../Images/ms7.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Brown Leather Shoes <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ms8.jpg" method="post">
	 			<button><img src="../Images/ms8.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Grey Sports Shoes <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ms9.jpg" method="post">
	 			<button><img src="../Images/ms9.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Grey Nike Shoes <br>$10</div>
		 	</td>
		</table>
	 	<table>
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ms10.jpg" method="post">
	 			<button><img src="../Images/ms10.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">White Sneakers <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ms11.jpg" method="post">
	 			<button><img src="../Images/ms11.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">On The Mars Canvas Shoes <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/ms12.jpg" method="post">
	 			<button><img src="../Images/ms12.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Green Nike Shoes <br>$10</div>
		 	</td>
		</table>
	 </div>


	<!-- -------- FOOTER Begins --------->

	<footer id = "footer" align = "center" >
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
