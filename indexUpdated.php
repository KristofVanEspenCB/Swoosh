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
    <script src="js/count.js"></script>

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

            <h1 class="indexValues">My net worth: <span>€2.000</span> </h1>
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
                        <span>€<span class="jumbo" id="myTargetElement2"></span></span>
                    </td>
                    <td class="swoosh" >
                        <span>€<span class="jumbo" id="myTargetElement"></span></span>
                    </td>
                </tr>
            </table>




		</div>
        <div id="footer">
            <div id="footerProfile">
                <a href="#">Back</a>
            </div>
            <div id="footerBoost">
            </div>
            <div id="notificationIcon"></div>
            <div id="footerAction">
                <a href="countries.php">Settings</a>
            </div>
        </div>
	</section>

</body>
<script>
    var options = {
      useEasing : true,
      useGrouping : true,
      separator : '.',
      decimal : ',',
      prefix : '',
      suffix : ''
    }

    var demo = new countUp("myTargetElement", 0, 40, 0, 6, options);
    demo.start();

    var options = {
      useEasing : true,
      useGrouping : true,
      separator : '.',
      decimal : ',',
      prefix : '',
      suffix : ''
    }

    var demo2 = new countUp("myTargetElement2", 0, 8, 0, 3, options);
    demo2.start();
</script>
</html>