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


	
	<h1 align="center">Women</h1>
	<div class="sidenav">	
	<a href="#wshirts">Shirts</a>
	<a href="#wdress">Dresses</a>
	<a href="#wbottoms">Bottoms</a>
	<a href="#wassecc">Accessories</a>
	<a href="#wshoes">Shoes</a>
	</div>
	<div class="main">
		<h2 id="wshirts">Shirts</h2>
		<table>
			<tr >
                <td>
		  	<form action="../PHP/show.php?img=../Images/sh1.jpg" method="post">
	 			<button><img src="../Images/sh1.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Grey Striped T-Shirt for Bright Sunny Days <br>$10</div>
                </td>
                <td>
		  	<form action="../PHP/show.php?img=../Images/sh2.jpg" method="post">
	 			<button><img src="../Images/sh2.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Cool Printed White T-shirt <br>$10</div>
                </td>
                <td>
		  	<form action="../PHP/show.php?img=../Images/sh3.jpg" method="post">
	 			<button><img src="../Images/sh3.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Grey Culprit Apparel T-Shirt <br>$10</div>
                </td>
 	</tr>
		</table>
	<table>
			<tr >
	 		<td>
		  	<form action="../PHP/show.php?img=../Images/sh4.jpg" method="post">
	 			<button><img src="../Images/sh4.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Classy Plain White T-shirt <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/sh5.jpg" method="post">
	 			<button><img src="../Images/sh5.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Black Necklined Nrinted White T-Shirt <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/sh6.jpg" method="post">
	 			<button><img src="../Images/sh6.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">On The Sun Yellow T-shirt <br>$10</div>
		 	</td>
  	 </tr>	 	
		<tr >	
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/sh7.jpg" method="post">
	 			<button><img src="../Images/sh7.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Modern Blue Denim Jacket <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/sh8.jpg" method="post">
	 			<button><img src="../Images/sh8.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Camouflage Me Green Army Jacket <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/sh9.jpg" method="post">
	 			<button><img src="../Images/sh9.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Feeling Good Off-Shoulder Top <br>$10</div>
		 	</td>
  	 </tr>
		</table>	  	
		<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/sh10.jpg" method="post">
	 			<button><img src="../Images/sh10.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Feel the Leaves Black Shirt <br>$10</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/sh11.jpg" method="post">
	 			<button><img src="../Images/sh11.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Netted Black Button Up Blouse <br>$10</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/sh12.jpg" method="post">
	 			<button><img src="../Images/sh12.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Wild Vibes Furry Sweatshirt <br>$10</div>
		 	</td>
  	 </tr>
		</table>	  	
		<h2 id="wdress">Dresses</h2>
<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/d1.jpg" method="post">
	 			<button><img src="../Images/d1.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Hot Red Maxi Dress <br>$25</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/d2.jpg" method="post">
	 			<button><img src="../Images/d2.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Soak In The Sun Flowery Sundress <br>$25</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/d3.jpg" method="post">
	 			<button><img src="../Images/d3.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">In The Fairy World V-Neck White Dress <br>$25</div>
		 	</td>
  	 </tr>
		</table>	  	
		<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/d4.jpg" method="post">
	 			<button><img src="../Images/d4.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Formal Tangerine Mini Dress <br>$25</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/d5.jpg" method="post">
	 			<button><img src="../Images/d5.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Blue Me Away Fitted Dress<br>$25</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/d6.jpg" method="post">
	 			<button><img src="../Images/d6.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">In The Mid Night Sky Maxi Dress <br>$25</div>
		 	</td>
  	 </tr>
		</table>	  	
		<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/d7.jpg" method="post">
	 			<button><img src="../Images/d7.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Strapless Deep Green Velvet Maxi Dress<br>$25</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/d8.jpg" method="post">
	 			<button><img src="../Images/d8.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Royal Blue Polka Dot Sundress $25</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/d9.jpg" method="post">
	 			<button><img src="../Images/d9.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">One Shoulder Red Mini Dress <br>$25</div>
		 	</td>
  	 </tr>
		</table>	  	
		<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/d10.jpg" method="post">
	 			<button><img src="../Images/d10.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">To The Office Vertical Strips Dress<br>$25</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/d11.jpg" method="post">
	 			<button><img src="../Images/d11.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Simple White Empire Dress <br>$25</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/d12.jpg" method="post">
	 			<button><img src="../Images/d12.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">With The Garden Embroidered Maxi Dress $30</div>
		 	</td>
  	 </tr>
		</table>	  	
			 	<h2 id="wbottoms">Bottoms</h2>
<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/b1.jpg" method="post">
	 			<button><img src="../Images/b1.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Dark Blue Ankle Length Denim  <br>$20</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/b2.jpg" method="post">
	 			<button><img src="../Images/b2.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Faded Ice Blue Ankle Length Denim  <br>$20</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/b3.jpg" method="post">
	 			<button><img src="../Images/b3.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Dark Blue Palazzo Pants  <br>$20</div>
		 	</td>
  	 </tr>
		</table>	  	
		<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/b4.jpg" method="post">
	 			<button><img src="../Images/b4.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Blue Ankle Length Denim  <br>$20</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/b5.jpg" method="post">
	 			<button><img src="../Images/b5.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Dark Blue Stripped Palazzo Pants <br>$20</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/b6.jpg" method="post">
	 			<button><img src="../Images/b6.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Metallic Black Ankle Length Pants <br>$20</div>
		 	</td>
  	 </tr>
		</table>	  	
		<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/b7.jpg" method="post">
	 			<button><img src="../Images/b7.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Dark Blue 3/4th Denim Pants <br>$20</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/b8.jpg" method="post">
	 			<button><img src="../Images/b8.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Dark Blue Ankle Length Denim  <br>$20</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/b9.jpg" method="post">
	 			<button><img src="../Images/b9.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Dark Blue Full Lenghth Formal Pants <br>$20</div>
		 	</td>
  	 </tr>
		</table>	  	
		<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/b10.jpg" method="post">
	 			<button><img src="../Images/b10.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Black Full Lenghth Formal Pants <br>$20</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/b11.jpg" method="post">
	 			<button><img src="../Images/b11.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Deep Blue 3/4th Formal Skirt <br>$20</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/b12.jpg" method="post">
	 			<button><img src="../Images/b12.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Light Turquiose Blue Full Length Skirt <br>$20</div>
		 	</td>
  	 </tr>
		</table>	  	
			 	<h2 id="wassecc">Accessories</h2>
<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/a1.jpg" method="post">
	 			<button><img src="../Images/a1.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Gold Chain With Heart Pendant <br>$15</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/a2.jpg" method="post">
	 			<button><img src="../Images/a2.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Purple Crystal Pendant And Chain <br>$15</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/a3.jpg" method="post">
	 			<button><img src="../Images/a3.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Silver Bracelet <br>$15</div>
		 	</td>
  	 </tr>
		</table>	  	
		<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/a4.jpg" method="post">
	 			<button><img src="../Images/a4.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">White and Gold Fancy Chain <br>$15</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/a5.jpg" method="post">
	 			<button><img src="../Images/a5.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Tiny Stud Earrings <br>$15</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/a6.jpg" method="post">
	 			<button><img src="../Images/a6.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Huge Party Earrings <br>$15</div>
		 	</td>
  	 </tr>
		</table>	  	
		<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/a7.jpg" method="post">
	 			<button><img src="../Images/a7.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Wooden Earrings <br>$15</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/a8.jpg" method="post">
	 			<button><img src="../Images/a8.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Hoop Earrings + Plain Silver Chain <br>$15</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/a9.jpg" method="post">
	 			<button><img src="../Images/a9.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Classy Black Choker <br>$15</div>
		 	</td>
  	 </tr>
		</table>	  	
		<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/a10.jpg" method="post">
	 			<button><img src="../Images/a10.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Single Stone Ring <br>$15</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/a11.jpg" method="post">
	 			<button><img src="../Images/a11.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Silver Belt Watch <br>$15</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/a12.jpg" method="post">
	 			<button><img src="../Images/a12.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Pale Pink Belt Watch <br>$15</div>
		 	</td>
  	 </tr>
		</table>	  	
		<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/a13.jpg" method="post">
	 			<button><img src="../Images/a13.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Small Pink Side Bag <br>$15</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/a14.jpg" method="post">
	 			<button><img src="../Images/a14.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Huge White Bag <br>$15</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/a15.jpg" method="post">
	 			<button><img src="../Images/a15.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Shoulder Bag <br>$15</div>
		 	</td>
  	 </tr>
		</table>	  	
			 	<h2 id="wshoes">Shoes</h2>
<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/s1.jpg" method="post">
	 			<button><img src="../Images/s1.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Chrome Yellow Shoes <br>$20</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/s2.jpg" method="post">
	 			<button><img src="../Images/s2.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">White Canvas Shoes <br>$20</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/s3.jpg" method="post">
	 			<button><img src="../Images/s3.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Nude Leather Shoes <br>$20</div>
		 	</td>
  	 </tr>
		</table>	  	
		<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/s4.jpg" method="post">
	 			<button><img src="../Images/s4.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Black Leather Shoes <br>$20</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/s5.jpg" method="post">
	 			<button><img src="../Images/s5.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Black Nike Sports Shoes <br>$20</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/s6.jpg" method="post">
	 			<button><img src="../Images/s6.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Yellow Sneakers <br>$20</div>
		 	</td>
  	 </tr>
		</table>	  	
		<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/s7.jpg" method="post">
	 			<button><img src="../Images/s7.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">White Shoes Canvas<br>$20</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/s8.jpg" method="post">
	 			<button><img src="../Images/s8.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Silver Silettoes <br>$20</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/s9.jpg" method="post">
	 			<button><img src="../Images/s9.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Black High Leather Boots Shoes <br>$20</div>
		 	</td>
  	 </tr>
		</table>	  	
		<table>
			<tr >
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/s10.jpg" method="post">
	 			<button><img src="../Images/s10.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Chrome Yellow Heels <br>$20</div>
		 	</td>
		 	<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/s11.jpg" method="post">
	 			<button><img src="../Images/s11.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Pale Pink Heels <br>$20</div>
		 	</td>
	 		<td>
		 	
		  	<form action="../PHP/show.php?img=../Images/s12.jpg" method="post">
	 			<button><img src="../Images/s12.jpg" width="267" height="400"></button>		    	
		    </form>		    
		 	<div class="desc">Hot Pink Heels <br>$20</div>
		 	</td>
  	 </tr>
		</table>	  	
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
