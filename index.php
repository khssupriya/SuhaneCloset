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
    
    <div class="logo">
        <img src="/Images/main.jpg" style="width: 100%;" style="height: 100%;">
    <h1 class="logo1"  align="center">SIMPLICITY IS THE KEYNOTE OF <br>ALL TRUE ALLIGIENCE</h1>
    </div>
    <br>
    <hr>
    <br>

    <div class="people">
        <div class="column">
        <img src="../Images/men.jpg" alt="men" height="300" width="300">
        <div class="centered"><a href="men.php">MEN</a></div>
        </div>
    
        <div class="column">
        </form>
        <img src="../Images/women.jpg" alt="women" height="300" width="400">
        <div class="centered"><a href="women.php">WOMEN</a></div>
        </div>       
        
    </div>
    <br>
    
    <br>
    <h1 class="title"  align="center">NEW ARRIVALS</h1>
    <hr>
    <div class="new">
        <div class="row">
        	<form action="../PHP/show.php?img=../Images/new1.jpg" method="post">
            <button><img src="../Images/new1.jpg" alt="men" height="400" width="300"></button>
            </form>
        <div class="centered">Dark Blue Denim Jeans<br>$20.00</div>
        </div>
    
        <div class="row"><form action="../PHP/show.php?img=../Images/new5.jpg" method="post">
            <button>
        <img src="../Images/new5.jpg" alt="women" height="400" width="300"></button></form>
        <div class="centered">Mosy Mood Tank Top<br>$20.00</div>
        </div>
    
        <div class="row"><form action="../PHP/show.php?img=../Images/new3.jpg" method="post">
            <button>
        <img src="../Images/new3.jpg" alt="boys" height="400" width="300"></button></form>
        <div class="centered">Cool yellow jacket<br>$15.00</div>
        </div>

        <div class="row"><form action="../PHP/show.php?img=../Images/new7.jpg" method="post">
            <button >
        <img src="../Images/new7.jpg" alt="girls" height="400" width="300"></button></form>
        <div class="centered">Classic Red dress<br>$30.00</div>
        </div>

        <div class="row"><form action="../PHP/show.php?img=../Images/new2.jpg" method="post">
            <button>
        <img src="../Images/new2.jpg" alt="girls" height="200" width="300"></button></form>
        <div class="centered">Check shirt<br>$20.00</div>
        </div>

        <div class="row"><form action="../PHP/show.php?img=../Images/new4.jpg" method="post">
            <button >
        <img src="../Images/new4.jpg" alt="girls" height="200" width="300"></button></form>
        <div class="centered">Stylish Suit<br>$30.00</div>
        </div>

        <div class="row"><form action="../PHP/show.php?img=../Images/new6.jpg" method="post">
            <button >
        <img src="../Images/new6.jpg" alt="girls" height="200" width="300"></button></form>
        <div class="centered">Black Citizen Analog Watch<br>$25.00</div>
        </div>

        <div class="row"><form action="../PHP/show.php?img=../Images/new8.jpg" method="post">
            <button>
        <img src="../Images/new8.jpg" alt="girls" height="200" width="300"></button></form>
        <div class="centered">Womens beige high heels<br>$20.00</div>
        </div>

    </div>
    <br>
    
    <br>
    <h1 class="title"  align="center">TRENDING SUMMER SPECIALS</h1>
    <hr>
    <br>

    <div class="new">
        <div class="row"><form action="../PHP/show.php?img=../Images/summer1.jpg" method="post">
            <button >
        <img src="../Images/summer1.jpg" alt="men" height="400" width="300"></button></form>
        <div class="centered">Womens Casuals<br>$20.00</div>
        </div>
    
        <div class="row"><form action="../PHP/show.php?img=../Images/summer2.jpg" method="post">
            <button>
        <img src="../Images/summer2.jpg" alt="women" height="400" width="300"></button></form>
        <div class="centered">Black Short Pants<br>$20.00</div>
        </div>
    
        <div class="row"><form action="../PHP/show.php?img=../Images/summer3.jpg" method="post">
            <button>
        <img src="../Images/summer3.jpg" alt="boys" height="400" width="300"></button></form>
        <div class="centered">Plain sunglasses<br>$15.00</div>
        </div>

        <div class="row"><form action="../PHP/show.php?img=../Images/summer4.jpg" method="post">
            <button >
        <img src="../Images/summer4.jpg" alt="girls" height="400" width="300"></button></form>
        <div class="centered">Simple Suit<br>$30.00</div>
        </div>
    </div>
    <p>ENJOY SHOPPING</p>

    
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