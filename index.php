<?php
	include('include/cards.include.php');


?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/screen.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/js.js"></script>
</head>
<body>
	
	<section id="iphone">	
		<div id="container">
			<section id="upperNav">
				<div id="navBackHome">
                    <a href="#">Back</a>
                </div>
					<!-- <div id="locationIcon"></div> -->
				<div id="navTitle"><h1>Swoosh</h1></div>
				<div id="navSetting"><a href="countries.php">Settings</a></div>
			</section>


            <a href="swoosh.php">
                <img src="images/logo.png" id="indexLogo" />
            </a>
            <div>
                <h1 class="indexValues">My net worth: <span>€0</span> </h1>
                <table id="priceTable">
                    <tr>
                        <td class="actual">
                            Return
                        </td>
                        <td class="swoosh" >
                            Swoosh
                        </td>
                    </tr>
                    <tr>
                        <td class="actual">
                            €0
                        </td>
                        <td class="swoosh" >
                            €0
                        </td>
                    </tr>
                </table>

            </div>


        </div>
        <div id="footer">
            <div id="footerProfile">
                <a href="#">Back</a>
            </div>
            <div id="footerBoost">
                <a href="swoosh.php"></a>
            </div>
            <div id="footerAction">
                <a href="countries.php">Settings</a>
            </div>
        </div>
	</section>

</body>
</html>